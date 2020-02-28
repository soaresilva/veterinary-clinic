<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $query = Client::orderBy('surname', 'asc')->limit(20);
        
        if ($request->has('name')) {
            $search = $request->input('name');
            $query
            ->where('surname', 'LIKE', "%{$search}%")
            ->orWhere('first_name', 'LIKE', "%{$search}%");
        }
        
        $clients = $query->get();
        return view('admin.clients.index', compact('clients'));
    }
    
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.show', compact('client'));
    }
}