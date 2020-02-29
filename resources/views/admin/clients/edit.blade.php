@extends('admin.layout', [
  'title' => 'Edit Client Info'
])

@section('headline')
  Edit Client Info
@endsection

@section('content')

<form action="{{ action('ClientController@update', ['id' => $client->id]) }}" method="post" style="display: flex; flex-direction: column; margin-top: 2rem;">
  @method('put')
  @csrf
  
  @if($errors->has('first_name'))
    THIS FIELD HAS ERRORS
  @endif
  
  <input type='text' placeholder='Name' name='first_name' style="margin-bottom: .5rem; width: 20rem;" value="{{ old('first_name', $client->first_name) }}"/>
  <input type='text' placeholder='Surname' name='surname' style="margin-bottom: .5rem;" value="{{ old('surname', $client->surname) }}"/>
  <input type='Submit'style="margin-bottom: .5rem;" />
</form>
    
@endsection