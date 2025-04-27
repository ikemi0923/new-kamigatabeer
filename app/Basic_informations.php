<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic_informations extends Model
{
    //
    protected $fillable = ['office_name','office_code', 'office_address', 'office_phone_number', 'representative_name', 'factory_name', 'factory_code', 'factory_address', 'factory_phone_number', 'tax_office', 'tax_accountant', 'tax_phone_number','thirty_flg', 'thirty_three_flg', 'special_adaptation_manufacturer_flg'];
}
