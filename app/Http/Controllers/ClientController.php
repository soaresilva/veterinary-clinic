<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('surname', 'asc')->get();
        $pets = Pet::all();
        return view('admin.clients.index', compact('clients', 'pets'));
    }
    public function search()
    {
        $clients = Client::whereLike('surname', '%%')->get();
        $pets = Pet::all();
        return view('admin.clients.search', compact('clients', 'pets'));
    }
}
