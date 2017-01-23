<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class UserAnswer extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'useranswer';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['note_user', 'note_max'];
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
     * The users that belong to the role.
     */
    public function question()
    {
        return $this->hasOne('App\Models\Question');
    }
    /**
     * The users that belong to the role.
     */
    public function choice()
    {
        return $this->hasOne('App\Models\Choice');
    }
    /**
     * The users that belong to the role.
     */
    public function survey()
    {
        return $this->hasOne('App\Models\Questionnaire');
    }
    /**
     * The users that belong to the role.
     */
    public function examen()
    {
        return $this->hasOne('App\Models\Examen');
    }
    /**
     * The tutor that reply
     */
    public function user()
    {
        return $this->hasOne('App\Models\User');
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
