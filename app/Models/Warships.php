<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warships extends Model
{
    //
    protected $table = 'warships';
    protected $fillable = ['name','country','type','mainarmaments'];
}   
