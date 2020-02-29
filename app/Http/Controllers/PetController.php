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
        $clients = Client::all();
        $kg = round(($pet->weight / 2.205), 1);
        return view('admin.pets.show', compact('pet', 'kg', 'clients'));
    }

    public function create()
    {
        $clients = Client::all();
        return view('admin.pets.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $pet = new Pet;

        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->age = $request->input('age');
        $pet->weight = $request->input('weight');
        $pet->photo = $request->input('photo');
        $pet->client_id = $request->input('owner_id');
        $pet->save();
        return redirect()->action('PetController@show', ['id' => $pet->id]);
    }
    
    public function delete($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();
        return redirect('/clients');
    }
    
    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $clients = Client::all();
        return view('admin.pets.edit', compact('pet', 'clients'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $pet = Pet::findOrFail($id);
        $pet->name = $request->input('name');
        $pet->breed = $request->input('breed');
        $pet->age = $request->input('age');
        $pet->weight = $request->input('weight');
        $pet->photo = $request->input('photo');
        $pet->client_id = $request->input('owner_id');
        $pet->save();
        session()->flash('success_message', 'Success!');
        return redirect()->action('PetController@show', ['id' => $pet->id]);    
    }
}
