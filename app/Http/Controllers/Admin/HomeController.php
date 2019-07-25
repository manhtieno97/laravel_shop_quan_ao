<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
    public function getHome()
    {
        return view('backend.home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
