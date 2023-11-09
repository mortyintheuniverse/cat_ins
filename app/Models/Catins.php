<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catins extends Model
{
    use HasFactory;

    /**
     * @var \Closure|mixed|object|null
     */
    protected $fillable = [
        'content',
        'likes'
    ];
}
