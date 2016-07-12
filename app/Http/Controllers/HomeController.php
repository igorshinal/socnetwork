<?php


namespace socnetwork\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {

        if (Auth::check()) {
            return view('timeline.index');
        }
        return view('home');
    }
}