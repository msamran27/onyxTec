<?php

namespace App\Models;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    use HasFactory;
    protected $fillable=[
        'book_id',
        'name',
    ];
    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
