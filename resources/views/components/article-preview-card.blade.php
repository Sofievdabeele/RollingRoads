@props(['article'])
<button type="button" class="btn btn-secondary btn-lg" ><a class="nav-link" href="{{route('register')}}">Back</button>
<ul>
   {{-- {{dd($article->id)}} --}}
   
    <h1><a class="nav-link" href="/articles/{{$article->id}}">{{$article->name}}</h1></a></li>
    <p>Email: {{$article->email}}</p>
    <p>Location: {{$article->country}}</p>
    {{-- <li>Article: {{$article->article}}</li> --}}
    <a href="/articles/{{$article->id}}">Go to complete article</a>

</ul>
{{-- articles/{{article->id}} --}}