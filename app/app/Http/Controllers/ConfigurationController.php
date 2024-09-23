<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    //
    public function index() {
        $user = auth()->user()->role->name;
        if ($user == 'owner' || $user == 'admin') {
            return view('configuration', ['message' => 'Welcome to Configuration']);
        }
        //return view('dashboard', ['message' => 'Welcome to Dashboard']);
        return abort(403, 'Необходимо авторизоваться.');
    }
}
