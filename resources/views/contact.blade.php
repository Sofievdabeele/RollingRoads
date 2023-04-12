@extends('layouts.layout')
    @section('content')
    <div class="container mx-auto">
        <h1 class="mt-4 text-center display-1">Contact</h1>
        <img src="{{asset("./Images/pietro-de-grandi-T7K4aEPoGGk-unsplash.jpg")}}" class="d-block w-75 mx-auto" alt="on a lake">
        
        <ul class="mt-4 list-group list-group-flush text-center">
            <li class="list-group-item"> Email: rollingroads@gmail.com</li>
            <li class="list-group-item"> Phone: +32 485 256 258</li>
            <li class="list-group-item">  Address: Advertentielaan 3, 1000 Brussels - Belgium</li>
            <li class="list-group-item"> Instagram: @rollingroads</li>
        </ul>
        <div class="container mt-4">
            <div class="row">
                <a class="text-right"href="{{route('home')}}">Go home</a>
            </div>
        </div>

    </div>
    @endsection