<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'beer_style',
        'abv',
        'ibu',
        'delete_flg',
    ];
}
