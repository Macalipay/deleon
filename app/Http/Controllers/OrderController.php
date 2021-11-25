<?php

namespace App\Http\Controllers;

use App\Order;
use App\Inventory;
use App\DailySale;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id)
    {
        if(request()->ajax()) {
            return datatables()->of($orders = Order::with('inventory')->where('daily_sale_id', $id)->get())
            ->addIndexColumn()
            ->make(true);
        }

        return response()->json(compact('test'));
    }

    public function destroy($id)
    {
        $order_record = Order::find($id);
        $inventory = Inventory::where('id', $order_record->inventory_id)->firstOrFail();
        $total = $order_record->quantity * $inventory->price;

            $sale = DailySale::where('user_id', Auth::user()->id)->where('payment_status', 'Unpaid')->firstOrFail();
            $new_total = $sale->amount - $total;
            $new_balance = $sale->balance - $total;

            DailySale::find($sale->id)->update(['amount' => $new_total, 'balance' => $new_balance]);

            $inventory = Inventory::where('id', $order_record->inventory_id)->firstOrFail();
            $new_inventory = $inventory->quantity_stock + $order_record->quantity;

            if($new_inventory <= $inventory->critical_level && $new_inventory > 0) {
                Inventory::find($order_record->inventory_id)->update(['quantity_stock' => $new_inventory, 'status' => 'Critical Level']);
            } else if($new_inventory <= 0) {
                Inventory::find($order_record->inventory_id)->update(['quantity_stock' => $new_inventory, 'status' => 'Out of Stock']);
            } else {
                Inventory::find($order_record->inventory_id)->update(['quantity_stock' => $new_inventory]);
            }

            $order = Order::find($id);
            $order->delete();
            return redirect()->back()->with('success','Successfully Deleted!');
    }
}
