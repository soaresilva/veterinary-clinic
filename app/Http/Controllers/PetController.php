<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Client;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('name', 'asc')->get();
        $clients = Client::all();
        return view('admin.pets.index', compact('pets', 'clients'));
    }
    
    
}
