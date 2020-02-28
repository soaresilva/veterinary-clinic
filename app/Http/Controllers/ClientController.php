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
    public function search()
    {
        $clients = Client::whereLike('surname', '%%')->get();
        return view('admin.clients.search', compact('clients'));
    }
}
