@extends('admin.layout', [
  'title' => 'Pet list'
])

{{-- @if(Session::has('success_message'))
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>
@endif --}}

@section('headline')
<h1>List of Pets</h1>
@endsection

@section('searchbar')
  <form action="{{ action('PetController@index') }}" method="get">
    <input type="text" name="name" placeholder="Search">
    <input type="submit">
  </form>
@endsection

@section('content')

  <table>
  <thead>
    <tr>
      <td>Pet name</td>
      <td>Breed</td>
      <td>Owner</td>
    </tr>
  </thead>
    @foreach ($pets as $pet)
    
      <tr>
        <td><a href="/pet/{{$pet->id}}"> {{$pet->name}} </a></td>
        <td>{{$pet->breed}}</td>
        <td><a href="/client/{{$pet->client->id}}">{{$pet->client->first_name}} {{$pet->client->surname}} </a></td>


      </tr>
    @endforeach
  </table>

@endsection