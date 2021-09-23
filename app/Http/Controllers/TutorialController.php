<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Response;

class TutorialController extends Controller
{
    public function index()
    {
        $tutorials = Tutorial::orderBy('id')->get();
        return view('backend.pages.website.tutorial', compact('tutorials'));
    }

    public function store(Request $request)
    {
        $tutorial = $request->validate([
            'title' => ['required', 'max:250', 'unique:tutorials'],
            'description' => ['required'],
            'link' => ['required'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        Tutorial::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $tutorials = Tutorial::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('tutorials'));
    }

    public function update(Request $request, $id)
    {
        Tutorial::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
