<?php

namespace App\Http\Controllers;

use App\Consumable;
use Illuminate\Http\Request;
use Auth;

class ConsumableController extends Controller
{
    public function index()
    {
        $consumables = Consumable::orderBy('id')->get();
        return view('backend.pages.maintenance.consumable', compact('consumables'));
    }

    public function store(Request $request)
    {
        $consumable = $request->validate([
            'code' => ['required', 'max:250'],
            'consumable' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        Consumable::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $consumables = Consumable::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('consumables'));
    }

    public function update(Request $request, $id)
    {
        Consumable::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = Consumable::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
