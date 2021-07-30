<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    //
    public $table = "cast";
    
    protected $fillable = [
        'nama', 'umur', 'bio'
    ];
}
