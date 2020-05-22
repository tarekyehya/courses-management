<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
   
   protected $fillable = ['instructor', 'price', 'parent_class','room'];
   public $timestamps=false;
 
}
