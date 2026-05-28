<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['showPath']);
    }

    public function index()
    {
        return view('home');
    }

    public function showPath()
    {
        return realpath(base_path('resources/views'));
    }
}
