@extends('admin.layout', [
  'title' => 'Add Pet to Database'
])

@section('headline')
<h1>Add Pet to Database</h1>
@endsection

@section('content')
<form action="/pets/create" method="post" style="display: flex; flex-direction: column; margin-top: 2rem;">
      @csrf
      
      @if($errors->has('first_name'))
        THIS FIELD HAS ERRORS
      @endif
      <input type='text' placeholder='Name' name='name' style="margin-bottom: .5rem; width: 20rem;" />
      <input type='text' placeholder='Breed' name='breed' style="margin-bottom: .5rem;" />
      <input type='text' placeholder='Age' name='age' style="margin-bottom: .5rem;" />
      <input type='text' placeholder='Weight' name='weight' style="margin-bottom: .5rem;" />
      <input type='text' placeholder='Photo' name='photo' style="margin-bottom: .5rem;" />
      
      <select name="owner_id">

      @foreach ($clients as $client)
      <option value="{{ $client->id }}">
          {{ $client->first_name }} {{ $client->surname }}
      </option>
      @endforeach
      </select>
      
      <input type='Submit'style="margin-bottom: .5rem;" />
      
      <a href="{{ action('ClientController@index') }}">Don't add new pet to database</a>

    </form>
    
    @endsection
