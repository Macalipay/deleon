<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        $notifications = Notification::with('inventory_notif')->orderBy('id')->get();
        $count = Notification::with('inventory_notif')->where('status', 0)->count();
        return response()->json(compact('notifications', 'count'));
    }

    public function edit(Notification $notification)
    {
        //
    }

    public function update(Request $request, Notification $notification)
    {
        //
    }

    public function destroy(Notification $notification)
    {
        //
    }
}
