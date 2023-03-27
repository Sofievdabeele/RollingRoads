<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function show() 
    {
        return view ('form');
    }
}
