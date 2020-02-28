<?php

namespace App;

use App\Client;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
