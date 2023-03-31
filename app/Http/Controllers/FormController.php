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
