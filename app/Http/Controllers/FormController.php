<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use App\Http\Requests\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function create() 
    {
        return view ('form');
    }

    public function store(FormDataRequest $request)
    {
        // $request->validate([
        //     'fname' => 'required',
        //     'lname' => 'required',
        //     'email' => 'required',
        //     'gender' => 'required',
        //     'password' => 'required'
        // ]);

        // $validate = Validator::make($request->all(), [
        //     'fname' => 'required|min:5',
        //     'lname' => 'required|min:5',
        //     'email' => 'required',
        //     'gender' => 'required',
        //     'password' => 'required'
        // ], [
        //     'fname.required' => 'Filling out your name is mandatory',
        //     'fname.min' => 'Your name should have min 5 characters',

        // ]);

        // if($validate->fails()){
        //     return back()->withErrors($validate->errors())->withInput();
        // }
        $validate = $request->validated();

        // dump all inside controller
        // dd($request->all());

        $fname = $request->input('fname');        
        $message = $request->input('message');

        return view('thankyou', [
            'fname' => $fname, 
            'message' => $message
        ]);
        // return view ('home');
        
        
    }
}
