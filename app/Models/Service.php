<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre_service',
        'public_service',
        'resume_service',
        'description_service',
        'image_service',
    ];
}
