<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Client;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('name', 'asc')->limit(20)->get();
        $clients = Client::all();
        return view('admin.pets.index', compact('pets', 'clients'));
    }
    
    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('admin.pets.show', compact('pet'));
    }
}
