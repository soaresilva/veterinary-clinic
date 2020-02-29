@extends('admin.layout', [
  'title' => 'Pet info'
])


@section('content')

<div>
  <h1>Pet info</h1>
  
  <p><b>Name:</b> {{$pet->name}} </p>  
  <p><b>Breed:</b> {{$pet->breed}}</p>
  <p><b>Age:</b> {{$pet->age}} years</p>
  <p><b>Weight:</b> {{$kg}} kg ({{$pet->weight}} pounds)  </p>
  <p><b>Owner:</b>
    
    @foreach ($clients as $client)
    @if ($client->id == $pet->client_id)
    <a href="/client/{{$client->id}}">{{ $client->first_name }} {{ $client->surname }}</a>
    @endif
    @endforeach
    </p>


  <p><b>Photo:</b></p>
@if ($pet->photo === null)
    <img src="/img/noPhoto.png" class="nopic"/>
@else
    <img src="/img/{{$pet->photo}}" />
@endif
</div>
<br>
<a href="{{ action('PetController@delete', ['id' => $pet->id]) }}">Delete pet from database :(</a> <br> 
<a href="{{ action('PetController@edit', ['id' => $pet->id]) }}">Edit pet info</a> <br>
<a href="{{ url()->previous() }}">Back to previous page</a>


@endsection
