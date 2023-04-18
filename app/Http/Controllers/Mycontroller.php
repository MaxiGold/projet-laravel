<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function profil()
    {
        return view('home.profil');
    }
    public function login()
    {
        return view('home.login');
    }
}
