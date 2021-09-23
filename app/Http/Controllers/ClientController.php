<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('id')->get();
        return view('backend.pages.website.client', compact('clients'));
    }

    public function store(Request $request)
    {
        $client = $request->validate([
            'name' => ['required', 'max:250'],
            'company_name' => ['required'],
            'address' => ['required', 'max:250'],
            'city' => ['required', 'max:250'],
            'date_purchase' => ['required', 'max:250'],
            'contact' => ['required', 'max:250'],
            'facebook_page' => ['required', 'max:250'],
            'picture' => ['required'],
            'status' => ['required', 'max:250'],
        ]);

        $file = $request->picture->getClientOriginalName();
        $filename = pathinfo($file, PATHINFO_FILENAME);

        $imageName = $filename.time().'.'.$request->picture->extension();  
        $picture = $request->picture->move(public_path('images/client'), $imageName);

        $requestData = $request->all();
        $requestData['picture'] = $imageName;

        Client::create($requestData);

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $clients = Client::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $client = $request->validate([
            'name' => ['required', 'max:250'],
            'company_name' => ['required'],
            'address' => ['required', 'max:250'],
            'city' => ['required', 'max:250'],
            'date_purchase' => ['required', 'max:250'],
            'contact' => ['required', 'max:250'],
            'facebook_page' => ['required', 'max:250'],
            'status' => ['required', 'max:250'],
        ]);

        if($request->picture == null) {
            Client::find($id)->update($request->all());
        } else {
            $file = $request->picture->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
    
            $imageName = $filename.time().'.'.$request->picture->extension();  
            $picture = $request->picture->move(public_path('images/client'), $imageName);
    
            $requestData = $request->all();
            $requestData['picture'] = $imageName;
            
            Client::find($id)->update($requestData);
        }
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
