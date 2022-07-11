<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function article() {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function parent(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function children() {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
