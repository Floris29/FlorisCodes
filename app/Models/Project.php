<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image_path', 'skills_used', 'url', 'github'];

    protected $casts = [
        'skills_used' => 'array',
    ];
}
