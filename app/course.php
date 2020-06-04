<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
   
<<<<<<< HEAD
   protected $fillable = ['instructor', 'price', 'parent_class','room'];
=======
   protected $fillable = ['instructor', 'price', 'parent_class','room','name'];
>>>>>>> 57f7c164cb409a5fd263eb4a1290c61ce2a7da9a
   public $timestamps=false;
 
}
