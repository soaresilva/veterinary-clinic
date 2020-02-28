<?php

require_once 'DB.php';
require_once 'DB_functions.php';
DB::connect('localhost', 'clinic', 'root', 'rootroot');
DB::statement('TRUNCATE TABLE `users`');

// SELECT
$users = json_decode(file_get_contents('clients.json'), true);

foreach ($users as $user) {
  
  $query = ("INSERT INTO `users`
            (first_name, surname)
            VALUES
            (?, ?)
            ");
  
  DB::insert($query, [$user['first_name'], $user['surname']]);
  
  $id = DB::lastInsertId();


// PET INFO 
    foreach ($user['pets'] as $pet) {


      $query = ("INSERT INTO `pets`
      (name, breed, weight, age, photo, user_id)
      VALUES
      (?, ?, ?, ?, ?, ?)
      ");
    DB::insert($query, [
      $pet['name'], 
      $pet['breed'],
      $pet['weight'],
      $pet['age'],
      $pet['photo'],
      $id]);
    }
}