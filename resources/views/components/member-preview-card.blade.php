@props(['article'])
@props(['member'])
<ul>
  
    <li>Name: {{$article->name}}</li>
    <li>Email: {{$article->email}}</li>
    <li>Address: {{$article->address}}</li>
    <li>Instagram: {{$member->instagram}}</li>
    <li>Website: {{$member->website}}</li>
    <li>Bio: {{$member->bio}}</li>

</ul>