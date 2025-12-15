<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
    return $this->MYFUNCTION();
    }
    function myfunction(){
        return "<h1>MY FUNCTION</h1>";
    }

}

