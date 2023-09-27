<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['category_id', 'title', 'slug', 'content', 'status'];

    public function category(){
        return $this->belongsTo(Category::class);        
    }

    public function tags() {
        return $this->belongsto(Tag::class);        
    }
}
