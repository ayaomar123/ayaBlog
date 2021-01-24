<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $with = ['categories'];

    protected $fillable = ['name', 'description', 'image', 'status', 'viewer'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_article');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }



    protected static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            $article->slug = Str::slug($article->name);
        });
    }
}
