<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Attachment extends Model
{
    use HasFactory;
    public $fillable = ["path", "name", "extension", "post_id", "user_id", "temp"];
    public function url()
    {
        return  Storage::disk('local')->temporaryUrl($this->path, now());
    }
}
