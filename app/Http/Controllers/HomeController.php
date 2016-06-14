<?php


namespace socnetwork\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }
}