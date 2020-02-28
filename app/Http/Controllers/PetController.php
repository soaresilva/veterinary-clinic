<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Client;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(Request $request)
    {
        $query = Pet::orderBy('name', 'asc')->limit(20);

        if ($request->has('name')) {
            $search = $request->input('name');
            $query
            ->where('name', 'LIKE', "%{$search}%");
        }
        
        $pets = $query->get();
        $clients = Client::all();
        return view('admin.pets.index', compact('pets', 'clients'));
    }
    
    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('admin.pets.show', compact('pet'));
    }
}
