<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version February 20, 2019, 2:31 pm UTC
 *
 * @property string name
 * @property string email
 * @property string first_name
 * @property string last_name
 * @property string gender
 * @property date date_of_birth
 * @property boolean is_subscribed
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property integer view_count
 * @property integer role_id
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'role' => 'integer',
    
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }
}