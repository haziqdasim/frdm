<?php

namespace App\Http\Controllers;

use App\Actions\InventoryAction;
use App\Http\Requests\Inventory\LogItemRequest;
use App\Http\Requests\Inventory\NewItemRequest;
use App\Http\Requests\Inventory\RegisterRfidRequest;
use App\Http\Requests\Inventory\StoreRequest;
use App\Http\Requests\Inventory\UpdateRequest;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();

        return view('pages.inventori.index', [
            'inventories' => $inventories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        InventoryAction::createItem($request);

        return redirect()->route('inventory.index')->with('message', 'Barang berjaya didaftarkan ke inventori trak.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request)
    {
        InventoryAction::editItem($request);

        return redirect()->route('inventory.index')->with('message', 'Barang berjaya dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        InventoryAction::deleteItem(
            Inventory::findOrFail($id)
        );

        return redirect()->route('inventory.index')->with('message', 'Barang berjaya dipadam.');
    }

    public function listItems()
    {
        $inventories = Inventory::select([
            'id',
            'name',
            'firetruck_id',
            'rfid_no',
            'photo_path'
        ])->get();

        return response()->json($inventories);
    }

    public function getItem(string $id)
    {
        $inventory = Inventory::select([
            'id',
            'name',
            'rfid_no',
            'photo_path'
        ])->findOrfail($id);

        return response()->json($inventory);
    }

    public function createNewItem(NewItemRequest $request)
    {
        return InventoryAction::createItemWithRfid($request);
    }

    public function registerRfid(RegisterRfidRequest $request)
    {
        InventoryAction::registerRfid($request);

        return response()->json(
            ['message' => 'RFID berjaya didaftarkan bagi item #'],
            200
        );
    }

    public function logItems(LogItemRequest $request)
    {
        return InventoryAction::logItem($request);

        return response()->json(
            [
                'message' => 'Item telah dilogkan ke sistem.'
            ],
            200
        );
    }
}
