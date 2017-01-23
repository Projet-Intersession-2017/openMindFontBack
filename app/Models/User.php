<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class User extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'users';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    // protected $guarded = ['id', 'remember_token'];
    protected $fillable = ['name', 'email', 'password', 'role_id', 'group_id', 'coordinate_id', 'spam', 'coordonate'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/



    /**
     * The roles that belong to the user.
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }


    /**
     * The users that belong to the role.
     */
    public function coordonate()
    {
        return $this->hasOne('App\Models\Coordonate');
    }


    /**
     * The roles that belong to the user.
     */
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }


    public function examens()
    {
        return $this->hasMany('App\Examen');
    }


    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
