<?php

namespace App\Models;

use App\Models\Authors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable  = ['book_title'];

    public function author()
    {
        return $this->belongsTo(Authors::class);
    }
}
