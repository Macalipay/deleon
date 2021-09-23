<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseType;
use App\User;
use App\PaymentType;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function index()
    {
        $dt = Carbon::now();

        $expenses = Expense::where('date',  $dt->toDateString())->orderBy('id', 'desc')->get();
        $expense_types = ExpenseType::orderBy('id')->get();
        $users = User::orderBy('id')->get();
        $payments = PaymentType::orderBy('id')->get();
        return view('backend.pages.expense.expense', compact('expenses', 'expense_types', 'users', 'payments'));
    }

    public function all_expense()
    {

        $expenses = Expense::orderBy('id')->get();
        $expense_types = ExpenseType::orderBy('id')->get();
        $users = User::orderBy('id')->get();
        $payments = PaymentType::orderBy('id')->get();
        return view('backend.pages.expense.all_expense', compact('expenses', 'expense_types', 'users', 'payments'));
    }

    public function daily_expense()
    {
        $dt = Carbon::now();

        $expense_types = ExpenseType::where('date', '=',  $dt->toDateString())->orderBy('id')->get();
        return view('backend.pages.maintenance.expense_type', compact('expense_types'));
    }

    public function store(Request $request)
    {
        $expense = $request->validate([
            'expensetype_id' => ['required', 'max:250'],
            'description' => ['required', 'max:250'],
            'amount' => ['required', 'max:250'],
            'user_id' => ['required', 'max:250'],
            'paymenttype_id' => ['required', 'max:250'],
            'date' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        Expense::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $expenses = Expense::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('expenses'));
    }

    public function update(Request $request, $id)
    {
        Expense::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = Expense::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
