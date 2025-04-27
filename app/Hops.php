<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hops extends Model
{
    protected $fillable = ['name', 'maker', 'alpha','hops_display_flg'];
}

