<?php

namespace App\Actions;

use App\Http\Requests\Inventory\LogItemRequest;
use App\Http\Requests\Inventory\NewItemRequest;
use App\Http\Requests\Inventory\RegisterRfidRequest;
use App\Http\Requests\Inventory\StoreRequest;
use App\Http\Requests\Inventory\UpdateRequest;
use App\Models\Inventory;
use App\Models\InventoryLog;
use App\Models\InventoryStatus;
use Exception;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryAction
{

    public static function createItem(StoreRequest $request)
    {
        $params = $request->post();

        $file = $request->file('picture');

        try {

            DB::transaction(function () use ($params, $file) {

                $inventory = Inventory::create([
                    'firetruck_id' => $params['firetruck_id'] ?? null,
                    'rfid_no' => $params['firetruck_id'] ?? null,
                    'name' => $params['name'],
                    'photo_path' => $params['photo_path'] ?? null
                ]);

                if ($inventory) {
                    if (!is_null($file)) {
                        self::storeAvatar($file, $inventory);
                    }
                }
            });
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    public static function editItem(UpdateRequest $request)
    {
        $params = $request->post();

        $file = $request->file('picture');

        try {
            DB::transaction(function () use ($params, $file) {

                $inventory = Inventory::findOrFail($params['inventory-id']);

                $inventory->name = $params['name'];
                $inventory->save();

                if (!is_null($file)) {
                    self::storeAvatar($file, $inventory);
                }
            });
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    public static function deleteItem(Inventory $inventory)
    {
        try {
            DB::transaction(function () use ($inventory) {

                $inventory->delete();
            });
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    public static function registerRfid(RegisterRfidRequest $request)
    {
        $params = $request->post();

        $inventory = Inventory::findOrFail($params['inventory_id']);

        try {
            DB::transaction(function () use ($inventory, $params) {
                $inventory->rfid_no = $params['rfid_no'];

                $inventory->save();
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public static function logItem(LogItemRequest $request)
    {
        $rfids = $request->post('items-rfid');
        $mode = $request->post('mode');

        $items_scanned = Inventory::whereIn('rfid_no', $rfids)->get();

        $items_not_scanned = Inventory::whereNotIn('rfid_no', $rfids)->get();

        $present = '';
        $absent = '';

        DB::transaction(function () use(
            $items_scanned,
            $items_not_scanned,
            $mode,
            &$present,
            &$absent
            ){
            $present = $items_scanned->map(function ($item) use ($mode) {
                return InventoryLog::create([
                    'inventory_id' => $item->id,
                    'status_id' =>
                    $mode ?
                        InventoryStatus::TELAH_DIMASUKKAN : InventoryStatus::TELAH_DIKELUARKAN
                ]);
            });

            $absent = $items_not_scanned->map(function ($item) use ($mode) {
                return InventoryLog::create([
                    'inventory_id' => $item->id,
                    'status_id' => InventoryStatus::TIDAK_DIKESAN
                ]);
            });
        });

        return response()->json(
            [
                'present_item' => $present,
                'absent_items' => $absent
            ],
            200
        );
    }

    public static function storeAvatar($file, Inventory $inventory)
    {
        $filename = uniqid() . '.' . $file->extension();

        $path = $file->storeAs('public/inventories/', $filename);

        $inventory->photo_path = $filename;
        $inventory->save();
    }

    public static function createItemWithRfid(NewItemRequest $request)
    {
        $params = $request->post();

        $exists = Inventory::where('rfid_no', $params['rfid-no'])->first();

        if($exists){
            abort(400, 'RFID #'.$params['rfid-no'].' telah didaftarkan bagi item '.$exists->name);
        }

        try {
            $item = '';

            DB::transaction(function () use($params, &$item){
                $item = Inventory::create([
                    'name' => $params['item-name'],
                    'rfid_no' => $params['rfid-no']
                ]);
            });

            if($item instanceof Inventory)
            {
                return response()->json([
                    'message' => 'Barang '.$item->name. ' berjaya didaftarkan dengan RFID NO : '.$item->rfid_no,
                    'item' => $item
                ]);
            }

        } catch (\Throwable $th) {
            abort(500, [
                'message' => $th->getMessage()
            ]);
        }
    }
}
