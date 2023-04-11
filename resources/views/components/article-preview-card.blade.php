@props(['article'])
   
    <h3>{{$article->name}}</h3>
    <p>Email: {{$article->email}}</p>
    <p>Location: {{$article->country}}</p>
    <a href="/articles/{{$article->id}}"> > Go to complete article</a>
   