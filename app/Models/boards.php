<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boards extends Model
{
    protected $table="boards";
    protected $fillable = ['name','descript'];
 
}
