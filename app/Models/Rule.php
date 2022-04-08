<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'ptype',
        'v0',
        'v1',
        'v2',
        'v3',
        'v4',
        'v5'
    ];
}
