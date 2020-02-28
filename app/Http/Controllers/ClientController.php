<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('surname', 'asc')->limit(20)->get();
        return view('admin.clients.index', compact('clients'));
    }
    
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.show', compact('client'));
    }
    
    public function search(Request $request)
    {
        $search = $request->input('name');
        // $clients = Client::all();
        $clients = Client::query()
                    ->where('surname', 'LIKE', "%{$search}%")
                    ->where('first_name', 'LIKE', "%{$search}%")->get();
        return view('admin.clients.search', compact('clients'));
    }
}
