<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
   
   protected $fillable = ['instructor', 'price', 'parent_class','room','name'];
   public $timestamps=false;
 
}
