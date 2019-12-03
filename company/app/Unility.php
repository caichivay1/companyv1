<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unility extends Model
{
    protected $table = 'unility';

    protected $fillable = [
        'id', 'title', 'image','content','type'
    ];
}
