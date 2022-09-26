<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class threads_types extends Model
{
    protected $table="threads_types";
    protected $fillable = ["name","descript"];
}
