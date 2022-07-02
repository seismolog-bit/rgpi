<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::count();
        $pending = User::where('status', !!3)->count();

        return view('dashboard', compact('users', 'pending'));
    }
}
