{{-- look, some bootstrap here! --}}

  @extends('admin/layout', [
    'title' => 'Create a new author'
  ])
<!-- or admin.layout, do not forget -->


@section('headline')
  @if ($author->id !== null)
    Edit author
    @else
    Create a new author
  @endif
@endsection

@section('content')

{{-- Validation --}}
  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  
{{-- Success message, which is not displaying because my target view is different --}}
  @if(Session::has('success_message'))
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
  @endif
  
  @if ($author->id !== null)
    <form action="{{ action('AuthorController@update', ['id' => $author->id]) }}" method="post" class="form-group"> 
    {{-- (do not forget to put the parameter id in the action and the method put below) --}}
      @method('put')
  @else
    <form action="{{ action('AuthorController@store') }}" method="post" class="form-group">
  @endif

  @csrf
  
  <div class="form-group">

    <label>Artist name</label>
    <input type="text" autocomplete="off" name="name" value="{{ old('name', $author->name) }}">
    {{-- Adding this the author name as a value here makes it easier when creating the edit method. --}}
    <label>Country</label>
    <input type="text" autocomplete="off" name="country" value="{{ $author->country }}">
    {{-- <label>Genre</label>
    <input type="text" name="genre_id" placeholder="Genre"><br> --}}
    <input type="submit">
  </form>
@endsection