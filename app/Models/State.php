<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function adverts(){
        return $this->hasMany(Advert::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
