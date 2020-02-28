@extends('admin.layout', [
  'title' => 'Pet list'
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
      <td>Pet name</td>
      <td>Breed</td>
      <td>Owner</td>
    </tr>
  </thead>
    @foreach ($pets as $pet)
    
      <tr>
        <td>{{$pet->name}}</td>
        <td>{{$pet->breed}}</td>
        <td>{{$pet->client->first_name}} {{$pet->client->surname}}</td>
      </tr>
    @endforeach
  </table>

@endsection