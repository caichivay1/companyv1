<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
        'id', 'phone', 'phone1','mail','address','name','facebook'
    ];
}
