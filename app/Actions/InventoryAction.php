<?php

namespace App\Actions;

use App\Http\Requests\Inventory\LogItemRequest;
use App\Http\Requests\Inventory\RegisterRfidRequest;
use App\Http\Requests\Inventory\StoreRequest;
use App\Http\Requests\Inventory\UpdateRequest;
use App\Models\Inventory;
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
            DB::transaction(function () use($inventory) {

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
            DB::transaction(function() use($inventory, $params){
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

        $items_scanned = Inventory::whereIn($rfids);

        $items_not_scanned = Inventory::whereNotIn($rfids);

        $data = [];

        $items_scanned->map(function() use($data)
        {
            return $data;
        });
    }

    public static function storeAvatar($file, Inventory $inventory)
    {
        $filename = uniqid() . '.' . $file->extension();

        $path = $file->storeAs('public/inventories/', $filename);

        $inventory->photo_path = $filename;
        $inventory->save();
    }
}
