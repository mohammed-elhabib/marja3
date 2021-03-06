<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $fillable=["title","body","user_id"];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return $this->belongstoMany(Tag::class);
    }
    public function attachments(){
        return $this->hasMany(Attachment::class);
    }
    public function editor(){
        return $this->belongsTo(User::class,"user_id");
    }
}
