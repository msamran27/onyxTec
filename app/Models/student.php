<?php

namespace App\Models;
use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Courses()
    {
        return $this->hasMany(Courses::class);
    }
}
