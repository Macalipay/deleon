<?php

namespace App\Http\Controllers;

use App\Order;
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
        $order = Order::find($id);
        $order->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
