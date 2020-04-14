<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'titolo',
        'colore',
        'data',
        'luogo'
    ];

    protected $guarded = [
        'id'
    ];

    public $timestamps = false; 
}
