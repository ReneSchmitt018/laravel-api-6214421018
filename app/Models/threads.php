<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class threads extends Model
{
    protected $table="threads";
    protected $fillable = ["name","descript","board_id","image","url"];

}
