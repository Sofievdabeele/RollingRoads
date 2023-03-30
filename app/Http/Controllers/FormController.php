<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use App\Http\Requests\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Article;

class FormController extends Controller
{
    public function show() 
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
        // $validate = $request->validated();

        // dump all inside controller
        // dd($request->all());

        $article = new Article;
        $article->name = $request->input('name');
        $article->email = $request->input('email');
        $article->password = $request->input('password');
        $article->country = $request->input('country');
        $article->article = $request->input('message');

        $article->save();
        
        return redirect('/article')->with('status', 'Article has been inserted');      
    }
}
