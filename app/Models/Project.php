<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // Load the Tags for this Project
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'projects_tags', 'projects_id', 'tags_id');
    }
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'url',
        'published_date',
        'image',
        'thumb',
        'slug',
        'category_id'
    ];
}
