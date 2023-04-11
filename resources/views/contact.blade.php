@extends('layouts.layout')
    @section('content')
        <h1>Contact</h1>
        <img src="{{asset("./Images/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg")}}" class="d-block w-100" alt="on a lake">
            <ul>
                <li> Email: rollingroads@gmail.com</li>
                <li> Phone: +32 485 256 258</li>
                <li> Address: Advertentielaan 3, 1000 Brussels - Belgium</li>
                <li> instagram: @rollingroads</li>
            </ul>
 
        <a href="{{route('home')}}">Go home</a>
    @endsection