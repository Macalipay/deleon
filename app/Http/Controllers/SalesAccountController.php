<?php

namespace App\Http\Controllers;

use App\SalesAccount;
use Illuminate\Http\Request;
use Auth;
class SalesAccountController extends Controller
{
    public function index()
    {
        $sales = SalesAccount::orderBy('id')->get();
        return view('backend.pages.maintenance.sales_account', compact('sales'));
    }

    public function store(Request $request)
    {
        $sale = $request->validate([
            'sales' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        SalesAccount::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $sales = SalesAccount::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('sales'));
    }

    public function update(Request $request, $id)
    {
        SalesAccount::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = SalesAccount::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
