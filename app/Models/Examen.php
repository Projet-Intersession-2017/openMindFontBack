<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Examen extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    protected $table = 'examen';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = ['label', 'validate', 'user_id','groups'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
	|--------------------------------------------------    ------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/

    /**
     * Noob exam
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function surveys()
    {
        return $this->hasMany('App\Models\Questionnaire');
    }


    /**
     * Tutor's exam creation
     */
    public function tutor()
    {
        return $this->hasOne('App\Models\User');
    }


    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'examen_group');
    }
    public function useranswer()
    {
        return $this->hasOne('App\Models\UserAnswer');
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
