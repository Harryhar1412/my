<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable =['title','body','email'];
    protected $dates =['created_at','updated_at'];
}
