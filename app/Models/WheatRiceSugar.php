<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WheatRiceSugar extends Model
{
    protected $table = 'wheat_rice_sugars';

    protected $fillable = ['name', 'maker', 'ppg', 'color', 'wheat_rice_sugar_display_flg'];
}
