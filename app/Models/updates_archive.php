<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class updates_archive extends Model
{
    protected $table="updates_archive";
    protected $fillable = ['title','descript','image','url'];
}
 