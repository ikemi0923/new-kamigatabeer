<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symbol extends Model
{
    //
    protected $fillable = ['name', 'brand', 'item_id'];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
