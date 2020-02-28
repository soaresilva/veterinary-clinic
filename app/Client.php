<?php

namespace App;

use App\Pet;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
