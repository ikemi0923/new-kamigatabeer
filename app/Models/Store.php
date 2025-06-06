<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'store_name',
        'delete_flg',
        'factory_address_flg',
        'store_code',
        'store_address',
        'store_phone_number',
        'tax_office',
        'symbol_choice_flg',
    ];
    
    public function symbols()
    {
        return $this->belongsToMany(Symbol::class);
    }
}
