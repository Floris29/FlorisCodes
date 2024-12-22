<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image_path', 'skill', 'url', 'github'];

    public function skills()
    {
        return $this->belongsTo(skills::class);
    }
}
