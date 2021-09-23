<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Auth;
class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now();
        $users = User::where('designation', '!=', 'Super Admin')->orderBy('name')->get();
        $attendances = Attendance::where('date',  $dt->toDateString())->orderBy('id')->get();
        return view('frontend.pages.attendance', compact('users', 'attendances'));
    }

    public function view()
    {
        $dt = Carbon::now();
        $users = User::where('designation', '!=', 'Super Admin')->orderBy('name')->get();
        $attendances = Attendance::orderBy('id')->get();
        return view('backend.pages.attendance.attendance', compact('users', 'attendances'));
    }

    public function timeIn($id)
    {
        $dt = Carbon::now();
        $user = Attendance::where('user_id', '=', $id)->where('date', '=',  $dt->toDateString())->where('time_in', '!=', null)->first();

        if ($user === null) {
            $attendance = new Attendance([
                'user_id' => $id,
                'date' => $dt->toDateString(),
                'time_in' => $dt->toTimeString(),
                'status' => 'Present',
            ]);

            $attendance->save();

            return redirect()->back()->with('success','Successfully Added');
        } else {
            return redirect()->back()->with('success','You already have TIME-IN!');
        }

    }

    public function timeOut($id)
    {
        $dt = Carbon::now();
        $user = Attendance::where('user_id', '=', $id)->where('date', '=',  $dt->toDateString())->where('time_in', '!=', null)->first();

        if ($user !== null) {
            $timeout = Attendance::find($user->id);
            $timeout->time_out =  $dt->toTimeString();
            $timeout->save();

            return redirect()->back()->with('success','Successfully Added');
        } else {
            return redirect()->back()->with('success','You already have TIME-OUT!');
        }

    }

    public function store(Request $request)
    {
        $attendance = $request->validate([
            'user_id' => ['required', 'max:250'],
            'date',
            'time_in',
            'time_out',
            'status',
        ]);

        $request->request->add(['created_user' => Auth::user()->id]);
        Attendance::create($request->all());

        return redirect()->back()->with('success','Successfully Added');
    }

    function search(Request $request)
    {
        $dt = Carbon::now();
        $users = User::orderBy('id')->get();
        $attendances = Attendance::where('date',  $dt->toDateString())->orderBy('id')->get();
        
        if(request()->ajax())
            {
                if(!empty($request->starting_date))
                {
                    $data = DB::table('attendances')
                    ->whereBetween('date', array($request->starting_date, $request->ending_date))
                    ->get();
                }
                else
                {
                    $data = DB::table('attendances')
                    ->get();
                }
                return datatables()->of($data)->make(true);
            }
        return view('frontend.pages.attendance', compact('users', 'attendances'));

    }

    public function edit($id)
    {
        $attendance = Attendance::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('attendance'));
    }

    public function update(Request $request, $id)
    {
        Attendance::find($id)->update($request->all());
        return redirect()->back()->with('success','Successfully Updated');
    }

    public function destroy($id)
    {
        $attendance = Attendance::find($id);
        $attendance->delete();
        return redirect()->back()->with('success','Successfully Deleted!');
    }
}
