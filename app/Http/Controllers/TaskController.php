<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // $tasks = Task::orderBy('id')->get();
        return view('backend.pages.task.task', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = $request->validate([
            'task' => ['required', 'max:250'],
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        Task::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    public function edit($id)
    {
        $tasks = Task::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('tasks'));
    }

    public function update(Request $request, $id)
    {
        Task::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $barangay_destroy = Task::find($id);
        $barangay_destroy->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
