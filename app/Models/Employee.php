<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'store_id',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
