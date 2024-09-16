<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['tittle','author','slug','body'];
}