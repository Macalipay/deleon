<?php

namespace App\Http\Controllers;

use App\DailySale;
use App\Customer;
use App\PaymentType;
use App\Product;
use App\SalesAccount;
use Auth;
use Carbon\Carbon;
use App\Payment;
use Illuminate\Http\Request;

class DailySaleController extends Controller
{
    public function index()
    {
        $dt = Carbon::now();
        $daily_sales = DailySale::where('production_status', '!=', 'Delivered')->orWhere('payment_status', '!=', 'Paid')->orderBy('id', 'desc')->get();
        $customers = Customer::orderBy('id')->get();
        $paymenttypes = PaymentType::orderBy('id')->get();
        $products = Product::orderBy('id')->get();
        $sales = SalesAccount::orderBy('id')->get();
        $total_order = DailySale::where('production_status', '!=', 'Delivered')->OrWhere('payment_status', '!=', 'Paid')->count();
        $no_artist = DailySale::where('production_status', 'No Artist')->count();
        $delivery = DailySale::where('production_status', 'For Pick Up')->count();
        $in_progress = DailySale::where('production_status', 'Layout in Progress')->count();
        $for_printing = DailySale::where('production_status', 'For Printing')->count();
        $daily_sale = Payment::where('date', $dt->toDateString())->sum('amount');
        $unpaid = DailySale::where('payment_status', 'Unpaid')->sum('balance');
        return view('backend.pages.sales.daily_sales', compact('daily_sales', 'customers', 'paymenttypes', 'products', 'sales','total_order', 'no_artist',
                     'in_progress', 'delivery', 'for_printing', 'daily_sale', 'unpaid'));
    }

    public function all()
    {
        $dt = Carbon::now();
        $daily_sales = DailySale::where('production_status', 'Delivered')->where('payment_status', 'Paid')->orderBy('id', 'desc')->get();
        $customers = Customer::orderBy('id')->get();
        $paymenttypes = PaymentType::orderBy('id')->get();
        $products = Product::orderBy('id')->get();
        $sales = SalesAccount::orderBy('id')->get();
        $total_order = DailySale::where('production_status', '!=', 'Delivered')->OrWhere('payment_status', '!=', 'Paid')->count();
        $no_artist = DailySale::where('production_status', 'No Artist')->count();
        $delivery = DailySale::where('production_status', 'For Delivery')->count();
        $in_progress = DailySale::where('production_status', 'Layout in Progress')->count();
        $for_printing = DailySale::where('production_status', 'For Printing')->count();
        $daily_sale = Payment::where('date', $dt->toDateString())->sum('amount');
        $unpaid = DailySale::where('payment_status', 'Unpaid')->sum('balance');
        return view('backend.pages.sales.all_sales', compact('daily_sales', 'customers', 'paymenttypes', 'products', 'sales', 'total_order', 
                    'no_artist', 'in_progress', 'delivery', 'for_printing', 'daily_sale', 'unpaid'));
    }

    public function store(Request $request)
    {
        $product = $request->validate([
            'customer_id' => ['required', 'max:250'],
            'sales_id' => ['required', 'max:250'],
            'product_id' => ['required', 'max:250'],
            'description' => ['required', 'max:250'],
            'quantity' => ['required', 'max:250'],
            'date' => ['required', 'max:250'],
            'amount' => ['between:0,99.99', 'required', 'max:250'],
            'production_status' => ['required', 'max:250'],
        ]);

        $request->request->add(['balance' => $request->amount, 'user_id' => Auth::user()->id]);
        
        DailySale::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $products = DailySale::where('id', $id)->with('customer')->orderBy('id')->firstOrFail();
        return response()->json(compact('products'));
    }

    public function update(Request $request, $id)
    {
        $daily_sale = DailySale::find($id);

        $amount = $daily_sale->amount - $request->amount;
        $current_balance = $daily_sale->balance - $amount;
        
        if($current_balance <= 0) {
            $request->merge([
                'balance' => $current_balance,
                'payment_status' => 'Paid'
            ]);
            DailySale::find($id)->update($request->all());
        } else {
            $request->merge([
                'balance' => $current_balance,
                'payment_status' => 'Unpaid'
            ]);
            DailySale::find($id)->update($request->all());
        }

        return redirect()->back()->with('success','Successfully Updated');
    }

    public function productionStatus(Request $request, $id)
    {
        // var_dump($request->production_status);die();
        DailySale::where('id', $id)->update(['production_status' => $request->production_status]);
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function paymentStatus(Request $request, $id)
    {
        DailySale::where('id', $id)->update(['payment_status' => $request->payment_status]);
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = DailySale::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
