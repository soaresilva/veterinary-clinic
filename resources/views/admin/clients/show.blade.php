@extends('admin.layout', [
  'title' => 'Client info'
])


@section('content')

<div>
  <h1>Client info</h1>
  <p><b>First name:</b> {{$client->first_name}} </p>  
  <p><b>Surname:</b> {{$client->surname}} </p>    
  
  <p><b>Pets:</b><p>
    @foreach ($client->pets as $pet)
      <a href="/pet/{{$pet->id}}"> {{$pet->name}}</a> ({{$pet->breed}}, {{$pet->age}} years old)<br>
      @endforeach
</div>

<a href="{{ action('ClientController@delete', ['id' => $client->id]) }}">Delete client from database</a> <br> 
<a href="{{ action('ClientController@edit', ['id' => $client->id]) }}">Edit client info</a> <br> 
<a href="{{ url()->previous() }}">Back to previous page</a>
@endsection
