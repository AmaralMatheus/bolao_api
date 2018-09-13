<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Championships extends Model
{
    protected $fillable = [
        'img', 'nome'
    ];

    protected $guarded = [
        'id'
    ];
}
