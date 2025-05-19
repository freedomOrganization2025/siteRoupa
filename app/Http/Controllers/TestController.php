<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function login(){
        return view('login');
    }

    function registro(){
        return view('registro');
    }
}
