<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    protected $fillable = [
        'id', 'name', 'title','avatar','images','location','scale','form','type','investor'
    ];
}
