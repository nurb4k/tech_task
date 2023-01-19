<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'page_count', 'author_id', 'created_at','updated_at'];

    public function author(){

        return $this->belongsTo(Author::class);
    }
}
