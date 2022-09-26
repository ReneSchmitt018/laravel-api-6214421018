<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class threads_details extends Model
{
    protected $table="threads_details";
    protected $fillable = ["threads_id","name","descript","image","url"];
}

