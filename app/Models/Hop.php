<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hop extends Model
{
    protected $fillable = ['name', 'maker', 'alpha','hops_display_flg'];
}

