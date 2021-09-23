<?php

namespace App\Http\Controllers;

use App\ConsumableHeader;
use App\ConsumableDetails;
use App\Customer;
use App\Inventory;
use App\SalesAccount;
use Auth;
use Illuminate\Http\Request;

class ConsumableHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumables = ConsumableHeader::where('type', 1)->where('payment_status', 'unpaid')->where('status', '!=', 'Delivered')->get();
        $customers = Customer::paginate(15);
        $sales = SalesAccount::orderBy('id')->get();
        return view('backend.pages.consumable.consumable_transaction', compact('consumables', 'customers', 'sales'));
    }

    public function purchase_order($id)
    {
        $consumable_order = ConsumableHeader::where('id', $id)->first();
        $orders = ConsumableDetails::where('consumable_header_id', $id)->get();
        $po_code = $consumable_order->code;
        $id = $id;
        $customer = Customer::where('id', $consumable_order->customer_id)->first();
        $inventories = Inventory::get();
        $title = $consumable_order->title;

        return view('backend.pages.consumable.purchase_order', compact('code', 'orders', 'customer', 'title', 'inventories', 'po_code', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last_id = ConsumableHeader::orderBy('id', 'desc')->first();
        $id = ($last_id === NULL) ? $code = 1 : $code = $last_id->id + 1;
        $purchase_order = new ConsumableHeader;
        $purchase_order->code = 'PO-'. str_pad($code, 7, '0', STR_PAD_LEFT);;
        $purchase_order->title = $request->title;
        $purchase_order->customer_id = $request->customer_id;
        $purchase_order->sales_id = $request->sales_id;
        $purchase_order->subtotal = 0;
        $purchase_order->total = 0;
        $purchase_order->balance = 0;
        $purchase_order->status = 'Place Order';
        $purchase_order->payment_status = 'Unpaid';
        $purchase_order->user_id = Auth::user()->id;
        $purchase_order->type = 1;
        $purchase_order->save();

        return redirect()->back()->with('success','Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsumableHeader  $consumableHeader
     * @return \Illuminate\Http\Response
     */
    public function show(ConsumableHeader $consumableHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsumableHeader  $consumableHeader
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsumableHeader $consumableHeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsumableHeader  $consumableHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConsumableHeader $consumableHeader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsumableHeader  $consumableHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsumableHeader $consumableHeader)
    {
        //
    }
}
