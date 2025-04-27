<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malts extends Model
{
    //
    protected $fillable = ['name', 'maker', 'ppg','color','malts_display_flg'];
}