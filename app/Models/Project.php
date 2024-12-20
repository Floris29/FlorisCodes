<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image_path', 'skills_used', 'tools_used'];

    public function skills()
    {
        return $this->belongsTo(skills::class);
    }

    public function tools()
    {
        return $this->belongsTo(tools::class);
    }
}
