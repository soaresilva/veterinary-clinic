@extends('admin.layout', [
  'title' => 'Pet info'
])


@section('content')

<div>
  <h1>Pet info</h1>
  
  <p><b>Photo:</b></p>

    <img src="/img/{{$pet->photo}}" />
 

  <p><b>Name:</b> {{$pet->name}} </p>  
  <p><b>Breed:</b> {{$pet->breed}}</p>
  <p><b>Age:</b> {{$pet->age}}</p>
  <p><b>Weight:</b> {{$pet->weight}}</p>
</div>

<a href="{{ url()->previous() }}">Back to previous page</a>


@endsection
