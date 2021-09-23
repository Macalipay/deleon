<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Consumable;
use Illuminate\Http\Request;
use App\InventoryTransaction;
use Auth;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::orderBy('id', 'asc')->get();
        $consumables = Consumable::orderBy('id')->get();
        return view('backend.pages.inventory.inventory', compact('inventories', 'consumables'));
    }

    public function view_add_stock()
    {
        $add_stocks = InventoryTransaction::orderBy('id', 'desc')->get();
        $consumables = Consumable::orderBy('id')->get();
        return view('backend.pages.inventory.inventory_transaction', compact('add_stocks', 'consumables'));
    }

    public function store(Request $request)
    {
        $inventory = $request->validate([
            'consumable_id' => ['required', 'max:250'],
            'price' => ['required', 'max:250'],
            'selling_price' => ['required', 'max:250'],
            'critical_level' => ['required', 'max:250'],
            'supplier' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        Inventory::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function add_stock(Request $request)
    {
        $inventory = $request->validate([
            'inventory_id' => ['required', 'max:250'],
            'quantity' => ['required', 'max:250'],
            'date' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        InventoryTransaction::create($request->all());

        $inventory_item = Inventory::where('id', $request->inventory_id)->first();
        $quantity_stock = $inventory_item->quantity_stock + $request->quantity;
        $total_count = $inventory_item->total_count + $request->quantity;

        if($quantity_stock > $inventory_item->critical_level) {
            Inventory::where('id', $request->inventory_id)->update(['total_count' => $total_count ,'quantity_stock' => $quantity_stock, 'status' => 'Good']);
        } else if ($quantity_stock <= $inventory_item->critical_level && $quantity_stock > 0) {
            Inventory::where('id', $request->inventory_id)->update(['total_count' => $total_count , 'quantity_stock' => $quantity_stock, 'status' => 'Critical Level']);
        } else {
            Inventory::where('id', $request->inventory_id)->update(['total_count' => $total_count , 'quantity_stock' => $quantity_stock, 'status' => 'Out of Stock']);
        }

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $inventories = Inventory::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('inventories'));
    }

    public function stock_edit($id)
    {
        $stocks = InventoryTransaction::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('stocks'));
    }

    public function update(Request $request, $id)
    {
        Inventory::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function stock_update(Request $request, $id)
    {

        $inventory_item = Inventory::where('id', $request->inventory_id)->first();
        $stock = InventoryTransaction::where('id', $id)->first();

        $quantity_stock = $inventory_item->quantity_stock - $stock->quantity;
        $quantity_stock_latest = $quantity_stock + $request->quantity;

        $total_count = $inventory_item->total_count - $stock->quantity;
        $total_count_latest = $total_count + $request->quantity;

        if($quantity_stock_latest > $inventory_item->critical_level) {
            InventoryTransaction::find($id)->update($request->all());
            Inventory::where('id', $request->inventory_id)->update(['total_count' => $total_count_latest ,'quantity_stock' => $quantity_stock_latest, 'status' => 'Good']);
        } else if ($quantity_stock_latest < $inventory_item->critical_level && $quantity_stock_latest > 0) {
            InventoryTransaction::find($id)->update($request->all());
            Inventory::where('id', $request->inventory_id)->update(['total_count' => $total_count_latest , 'quantity_stock' => $quantity_stock_latest, 'status' => 'Critical Level']);
        } else {
            InventoryTransaction::find($id)->update($request->all());
            Inventory::where('id', $request->inventory_id)->update(['total_count' => $total_count_latest , 'quantity_stock' => $quantity_stock_latest, 'status' => 'Out of Stock']);
        }

        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $invetory = Inventory::find($id);
        $invetory->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }

    public function stock_destroy($id)
    {
        $stock = InventoryTransaction::find($id);
        $inventory = Inventory::find($stock->inventory_id);

        $current_stock = $inventory->quantity_stock - $stock->quantity;
        $total_quantity = $inventory->total_count - $stock->quantity;

        if( $current_stock > $inventory->critical_level ) {
            Inventory::where('id', $stock->inventory_id)->update(['total_count' => $total_quantity, 'quantity_stock' => $current_stock, 'status' => 'Good']);
        } else if($current_stock > $inventory->critical_level && $current_stock > 0) {
            Inventory::where('id', $stock->inventory_id)->update(['total_count' => $total_quantity, 'quantity_stock' => $current_stock, 'status' => 'Critical Level']);
        } else {
            Inventory::where('id', $stock->inventory_id)->update(['total_count' => $total_quantity, 'quantity_stock' => $current_stock, 'status' => 'Out of Stock']);
        }

        $stock->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
