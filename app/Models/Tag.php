<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $fillable=["id"];

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        return $this->belongstoMany(Post::class);
    }
}
