<?php

namespace App\Http\Controllers;

use App\ExpenseType;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class ExpenseTypeController extends Controller
{
    public function index()
    {
        $expense_types = ExpenseType::orderBy('id', 'desc')->get();
        return view('backend.pages.maintenance.expense_type', compact('expense_types'));
    }


    public function store(Request $request)
    {
        $expense_type = $request->validate([
            'expense' => ['required', 'max:250'],
            'color' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        ExpenseType::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $expense_type = ExpenseType::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('expense_type'));
    }

    public function update(Request $request, $id)
    {
        ExpenseType::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = ExpenseType::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
