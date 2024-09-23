<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function index() {
        $user = auth()->user()->role->name;
        if ($user == 'owner' || $user == 'employee') {
            return view('reports', ['message' => 'Welcome to Reports']);
        }
        return abort(403, 'У вас нет прав для просмотра.');
    }
}
