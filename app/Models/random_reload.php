<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class random_reload extends Model
{
    protected $table="random_reload";
    protected $fillable = ['title','image','url'];
}
