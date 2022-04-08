<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceAction extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource_id',
        'action',
        'description'
    ];
}
