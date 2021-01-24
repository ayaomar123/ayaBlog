<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class StaticPages extends Model
{
    protected $table = 'pages';
    protected $fillable =
    [
    'title',
    'description',
    'status',
    ];
}
