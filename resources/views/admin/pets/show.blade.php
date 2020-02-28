@extends('admin.layout', [
  'title' => 'Author info'
])


@section('content')

<div>
  <h1>Author info</h1>
  
  <p><b>Artist:</b> {{$author->name}} </p>  
  <p><b>Country:</b> {{$author->country}}</p>
  {{-- <p><b>Genre:</b> {{$author->genre->name}}</p> --}}
  <p><b>List of videos from this artist:</b></p>
  <p><b><a href="/author/{{$author->id}}/edit">Edit artist</a></b></p>
  
</div>

@endsection
