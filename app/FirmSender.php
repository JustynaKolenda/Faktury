<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirmSender extends Model
{
    protected $fillable = [
       'name' , 'adress' , 'pleace' , 'postalcode' , 'nip' , 'email' , 'phone' , 'account_number'
    ];
}
