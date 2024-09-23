<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() {
        $user = auth()->user()->role->name;
        if ($user == 'owner' || $user == 'admin' || $user == 'employee') {
            return view('dashboard', ['message' => 'Welcome to Dashboard']);
        }
        //return view('dashboard', ['message' => 'Welcome to Dashboard']);
        return abort(403, 'Необходимо авторизоваться.');
    }
}
