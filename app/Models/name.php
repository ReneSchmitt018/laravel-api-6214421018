<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class name extends Model
{
    protected $table="name";
    protected $fillable = ["id","name","email"];
}
