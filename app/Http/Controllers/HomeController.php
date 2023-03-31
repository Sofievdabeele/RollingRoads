<?php

namespace App\Http\Controllers;
use Barryvdh\Debugbar\Facades\Debugbar;

use Illuminate\Http\Request;

use function Psy\debug;

class HomeController extends Controller
{
    public function show()
    {
  
         Debugbar::startMeasure('Woohoo', 'Rendering first message' );
        
        return view ('home');
    }
}
