<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('form.index');
    }
    public function thanks(){
        return view('form.thanks');
    }
}
