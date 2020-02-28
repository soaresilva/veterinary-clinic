@extends('admin.layout', [
  'title' => 'Client list'
])

@if(Session::has('success_message'))
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>
@endif

@section('content')

  <table>
  <thead>
    <tr>
      <td><b>Client</b></td>
      <td><b>Pets</b></td>
    </tr>
  </thead>
  
  @foreach ($clients as $client)
    
  <tr>
    <td><a href="/client/{{$client->id}}"> {{$client->first_name}} {{$client->surname}} </a>
    </td>
    @foreach ($client->pets as $pet)
      <td><a href="/pet/{{$pet->id}}"> {{$pet->name}} </a></td>
      @endforeach
  </tr>
    @endforeach
  </table>

@endsection