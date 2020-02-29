<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title}} | Vet Clinic </title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
</head>
<body>

<header>
  <h1>Táborská Veterinarian Clinic</h1>
</header>

<nav>
  <a href="{{ action('PetController@index') }}">List of pets</a>
  <a href="{{ action('ClientController@index') }}">List of clients</a>
  <a href="{{ action('PetController@create') }}">Create new pet</a>
  <a href="{{ action('ClientController@create') }}">Create new client</a>
</nav>

<div class="centertext">
  <h1>@yield('headline')</h1>
  @yield('searchbar')
  @yield('content')
</div>

<footer>
  <hr/>
  <p>Hackathoned by Diogo Soares da Silva and Lyuben Tenekedzhiev at Coding Bootcamp Praha, 2020</p>
</footer>
</body>
</html>
