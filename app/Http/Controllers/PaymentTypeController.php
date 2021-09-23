<?php

namespace App\Http\Controllers;

use App\PaymentType;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Response;

class PaymentTypeController extends Controller
{
    public function index()
    {
        $payments = PaymentType::orderBy('id')->get();
        return view('backend.pages.maintenance.payment_type', compact('payments'));
    }

    public function store(Request $request)
    {
        $payment = $request->validate([
            'payment' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        PaymentType::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $payments = PaymentType::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('payments'));
    }

    public function update(Request $request, $id)
    {
        PaymentType::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $payment = PaymentType::find($id);
        $payment->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
