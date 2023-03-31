@props(['article'])

<ul>
   {{-- {{dd($article->id)}} --}}
    <li><h1><a href="/articles/{{$article->id}}">{{$article->name}}</h1></a></li>
    <li>Email: {{$article->email}}</li>
    <li>Location: {{$article->country}}</li>
    {{-- <li>Article: {{$article->article}}</li> --}}
    

</ul>
{{-- articles/{{article->id}} --}}