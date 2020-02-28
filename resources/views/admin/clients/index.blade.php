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
      <td><b>Pet</b></td>
    </tr>
  </thead>
  
  @foreach ($clients as $client)
    
  <tr>
    <td>{{$client->first_name}} {{$client->surname}}</td>
    @if ($client->id === $pets->client_id)
    <td>{{$pets->name}}</td>
    @endif
  </tr>
    @endforeach
  </table>

@endsection