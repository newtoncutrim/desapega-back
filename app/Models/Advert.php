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
    use HasFactory;
}
