<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmAdress extends Model
{
    protected $fillable = [
        'name' , 'adress' , 'pleace' , 'postalcode' , 'nip' , 'pesel' , 'email' , 'phone' , 'account_number'
    ];
}
