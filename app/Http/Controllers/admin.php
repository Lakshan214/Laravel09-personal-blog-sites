<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function redirect()
    {
        return view('welcome');
    }

   
}

