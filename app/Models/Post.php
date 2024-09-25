<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    protected $fillable = ['title', 'slug', 'content', 'reading_time', 'type_id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
