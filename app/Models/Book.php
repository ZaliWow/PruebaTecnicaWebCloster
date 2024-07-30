<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

   
    protected $fillable = [
        'title', 
        'description', 
        'publication_date', 
        'isbn', 
        'author_id', 
        'price', 
        'status', 
        'cover_image', 
        'shelf_code'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
