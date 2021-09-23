<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Auth;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id')->get();
        return view('backend.pages.crm.customer', compact('customers'));
    }

    public function store(Request $request)
    {
        $customer = $request->validate([
            'name' => ['required', 'max:250', 'unique:customers'],
            'contact' => ['max:250'],
            'email' => ['max:250'],
            'facebook' => ['max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        Customer::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $customers = Customer::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('customers'));
    }

    public function update(Request $request, $id)
    {
        Customer::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = Customer::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
