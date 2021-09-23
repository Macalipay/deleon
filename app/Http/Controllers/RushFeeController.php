<?php

namespace App\Http\Controllers;

use App\RushFee;
use App\Customer;
use Illuminate\Http\Request;
use Auth;

class RushFeeController extends Controller
{
    public function index()
    {
        $rush_fees = RushFee::orderBy('id', 'desc')->get();
        $customers = Customer::orderBy('id', 'desc')->get();
        return view('backend.pages.sales.rushfee', compact('rush_fees', 'customers'));
    }

    public function store(Request $request)
    {
        $rush_fee = $request->validate([
            'customer_id' => ['required', 'max:250'],
            'amount' => ['required', 'max:250'],
            'date' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        RushFee::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $rush_fees = RushFee::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('rush_fees'));
    }

    public function update(Request $request, $id)
    {
        RushFee::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = RushFee::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
