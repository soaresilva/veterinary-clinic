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
      <input type='text' placeholder='Owner' name='owner_id' style="margin-bottom: .5rem;" />
      <input type='Submit'style="margin-bottom: .5rem;" />
    </form>