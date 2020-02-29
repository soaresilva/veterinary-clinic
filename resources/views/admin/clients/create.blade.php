@extends('admin.layout', [
  'title' => 'Create New Client'
])

@section('headline')
    Create New Client
@endsection

@section('content')

<form action="/clients/create" method="post" style="display: flex; flex-direction: column; margin-top: 2rem;">
      @csrf
      
      @if($errors->has('first_name'))
        THIS FIELD HAS ERRORS
      @endif
      <input type='text' placeholder='Name' name='first_name' style="margin-bottom: .5rem; width: 20rem;" />
      <input type='text' placeholder='Surname' name='surname' style="margin-bottom: .5rem;" />
      <input type='Submit'style="margin-bottom: .5rem;" />
    </form>
    
@endsection
