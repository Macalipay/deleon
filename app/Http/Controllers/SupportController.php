<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::orderBy('id')->get();
        return view('backend.pages.website.support', compact('supports'));
    }

    public function store(Request $request)
    {
        $support = $request->validate([
            'name' => ['required', 'max:250'],
            'contact' => ['required'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif',
            'status' => ['required', 'max:250'],
        ]);

        $file = $request->picture->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);

        $imageName = $filename.time().'.'.$request->picture->extension();  
        $picture = $request->picture->move(public_path('images/support'), $imageName);

        $requestData = $request->all();
        $requestData['picture'] = $imageName;

        Support::create($requestData);

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $supports = Support::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('supports'));
    }

    public function update(Request $request, $id)
    {
        $support = $request->validate([
            'name' => ['required', 'max:250'],
            'contact' => ['required'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif',
            'status' => ['required', 'max:250'],
        ]);

        if($request->picture == null) {
            Support::find($id)->update($request->all());
        } else {
            $file = $request->picture->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
    
            $imageName = $filename.time().'.'.$request->picture->extension();  
            $picture = $request->picture->move(public_path('images/support'), $imageName);
    
            $requestData = $request->all();
            $requestData['picture'] = $imageName;
            
            Support::find($id)->update($requestData);
        }
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $support = Support::find($id);
        $support->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
