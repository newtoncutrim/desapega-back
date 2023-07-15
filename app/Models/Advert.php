<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $filable = [
        'title',
        'price',
        'isNegociable',
        'description',
        'user_id',
        'category_id',
        'state_id'
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function states(){
        return $this->belongsTo(State::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
