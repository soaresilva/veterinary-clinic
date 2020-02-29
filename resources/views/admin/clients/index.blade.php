@extends('admin.layout', [
  'title' => 'Client list'
])

{{-- @if(Session::has('success_message'))
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>
@endif --}}

@section('headline')
<h1>List of Clients</h1>
@endsection

@section('searchbar')
<form action="{{ action('ClientController@index') }}" method="get">
  <input type="text" name="name" placeholder="Search">
  <input type="submit">
</form>
@endsection

@section('content')

<div class="centertext">

  <table>
  <thead>
    <tr>
      <td>Client</td>
      <td>Pets</td>
    </tr>
  </thead>
  
  @foreach ($clients as $client)
    
  <tr>
    <td><a href="/client/{{$client->id}}"> {{$client->first_name}} {{$client->surname}} </a>
    </td>
    @foreach ($client->pets as $pet)
      <td><a href="/pet/{{$pet->id}}"> {{$pet->name}}</a></td>
      @endforeach
  </tr>
    @endforeach
  </table>

</div>
@endsection

