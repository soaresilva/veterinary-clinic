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

        {{-- <td>
          <a href="{{ action('AuthorController@edit', ['id' => $author->id]) }}">Edit</a>
        </td>
        <td>
          <form action="{{ action('AuthorController@delete', ['id' => $author->id])}}" method="post">
          @method('delete')
          @csrf
          <input type="submit" value="Delete"></form>
        </td> --}}
    @endforeach
  </table>

@endsection