<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'Post';

    public $timestamps = true;
    protected $casts = [
    'price' => 'float'
    ];
    protected $fillable = [
    'title',
    'body',
    'created_at'
    ];
   
}
