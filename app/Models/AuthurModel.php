<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthurModel extends Model
{

    protected $table = "author";
    protected $fillable = ["name","feature"];

}
