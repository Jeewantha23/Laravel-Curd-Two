<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
 protected $fillable = [

    "name",
    "subject",
    "age",
    "degree",
    "address"
 ];
}
