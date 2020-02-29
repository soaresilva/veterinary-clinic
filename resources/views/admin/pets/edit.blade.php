@extends('admin.layout', [
  'title' => 'Edit Pet Info'
])

@section('headline')
  Edit Pet Info
@endsection

@section('content')

<form action="{{ action('PetController@update', ['id' => $pet->id]) }}" method="post" style="display: flex; flex-direction: column; margin-top: 2rem;">
  @method('put')
  @csrf
  
  @if($errors->has('name'))
    THIS FIELD HAS ERRORS
  @endif
  
  <input type='text' placeholder='Name' name='name' style="margin-bottom: .5rem; width: 20rem;" value="{{ old('name', $pet->name) }}"/>
  <input type='text' placeholder='Breed' name='breed' style="margin-bottom: .5rem;" value="{{ old('breed', $pet->breed) }}"/>
  <input type='text' placeholder='Age' name='age' style="margin-bottom: .5rem;" value="{{ old('age', $pet->age) }}"/>
  <input type='text' placeholder='Weight (pounds; 1 pound ≈ 0.45kg)' name='weight' style="margin-bottom: .5rem;" value="{{ old('weight', $pet->weight) }}"/>
  <input type='text' placeholder='Photo' name='photo' style="margin-bottom: .5rem;" value="{{ old('photo', $pet->photo) }}"/>
  
  <select name="owner_id">
    @foreach ($clients as $client)
      <option value="{{ $client->id }}" {{ $client->id == old('owner_id', $pet->client_id) ? ' selected' : ''}}>
          {{ $client->first_name }} {{ $client->surname }}
      </option>
    @endforeach
    </select>

  
  <input type='Submit'style="margin-bottom: .5rem;" />
</form>
    
@endsection