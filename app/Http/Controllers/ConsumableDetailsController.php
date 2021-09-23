<?php

namespace App\Http\Controllers;

use App\ConsumableHeader;
use App\ConsumableDetails;
use App\Inventory;
use Illuminate\Http\Request;

class ConsumableDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add($id, $total)
    {
        $record = ConsumableHeader::select('total')->where('id', $id)->first();
        $new_total = $record->total + $total;
        ConsumableHeader::find($id)->update(['total' => $new_total, 'subtotal' => $new_total]);
    }

    public function minus($id, $total)
    {
        $record = ConsumableHeader::select('total')->where('id', $id)->first();
        $new_total = $record->total - $total;
        ConsumableHeader::find($id)->update(['total' => $new_total, 'subtotal' => $new_total]);
    }

    public function deduct_inventory($id, $quantity)
    {
        $consumable = Inventory::where('id', $id)->first();
        $quantity_stock = $consumable->quantity_stock - $quantity;
        $sold_count = $consumable->sold_count + $quantity;

        if($consumable->critical_level >= $quantity_stock && $quantity_stock > 0) {
            Inventory::find($id)->update(['quantity_stock' => $quantity_stock, 'sold_count' => $sold_count, 'status' => 'Critical Level']);
        } else if($consumable->critical_level <= $quantity_stock){
            Inventory::find($id)->update(['quantity_stock' => $quantity_stock, 'sold_count' => $sold_count, 'status' => 'Good']);
        } else {
            Inventory::find($id)->update(['quantity_stock' => $quantity_stock, 'sold_count' => $sold_count, 'status' => 'Out of Stock']);
        }
    }

    public function update_total($id, $old_total, $total)
    {
        $record = ConsumableHeader::select('total')->where('id', $id)->first();
        $new_total = ($record->total + $total) - $old_total;
        ConsumableHeader::find($id)->update(['total' => $new_total, 'subtotal' => $new_total]);
    }

    public function add_inventory($id, $quantity)
    {
        $consumable = Inventory::where('id', $id)->first();
        $quantity_stock = $consumable->quantity_stock + $quantity;
        $sold_count = $consumable->sold_count - $quantity;

        if($consumable->critical_level >= $quantity_stock && $quantity_stock > 0) {
            Inventory::find($id)->update(['quantity_stock' => $quantity_stock, 'sold_count' => $sold_count, 'status' => 'Critical Level']);
        } else if($consumable->critical_level <= $quantity_stock){
            Inventory::find($id)->update(['quantity_stock' => $quantity_stock, 'sold_count' => $sold_count, 'status' => 'Good']);
        } else {
            Inventory::find($id)->update(['quantity_stock' => $quantity_stock, 'sold_count' => $sold_count, 'status' => 'Out of Stock']);
        }
    }

    public function getPrice($id)
    {
        $price = Inventory::select('selling_price')->where('id', $id)->first();
        return response()->json(compact('price'));
    }

    public function addOrder(Request $request)
    {
        $order = $request->validate([
            'consumable_header_id' => ['required', 'max:250'],
            'inventory_id' => ['required', 'max:250'],
            'quantity' => ['required', 'max:250'],
            'description' => ['required', 'max:250'],
            'unit_price' => ['required', 'max:250'],
        ]);

        $total = $request->quantity * $request->unit_price;
        $request->request->add(['total' => $total]);
        ConsumableDetails::create($request->all());

        $this->add($request->consumable_header_id, $total);
        $this->deduct_inventory($request->inventory_id, $request->quantity);
    }

    public function listOrder($id)
    {
        if(request()->ajax()) {
            return datatables()->of(ConsumableDetails::where('consumable_header_id', $id)->with('inventory.consumable')->get())
            ->addIndexColumn()
            ->make(true);
        }

        return response()->json(compact('orders'));
    }

    public function edit($id)
    {
        $item = ConsumableDetails::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('item'));
    }

    public function update(Request $request, $id)
    {
        $order = ConsumableDetails::where('id', $id)->firstOrFail();
        $total = $request->quantity * $request->unit_price;
        $this->update_total($order->consumable_header_id, $order->total, $total);

        $order->quantity = $request->quantity;
        $order->description = $request->description;
        $order->unit_price = $request->unit_price;
        $order->total =  $request->quantity * $request->unit_price;
        $order->update();

        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $consumableDetails = ConsumableDetails::find($id);
        $consumableDetails->delete();

        $total = $consumableDetails->quantity * $consumableDetails->unit_price;
        $this->minus($consumableDetails->consumable_header_id, $total);
        $this->add_inventory($consumableDetails->inventory_id, $consumableDetails->quantity);

        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
