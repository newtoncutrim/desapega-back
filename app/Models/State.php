<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $filable = [
        'name',
        'slug'
    ];

    public function adverts(){
        return $this->hasMany(Advert::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
