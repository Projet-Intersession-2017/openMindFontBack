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
    protected $guarded = ['id'];
    // protected $fillable = ['note_user', 'note_max'];
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
        return $this->belongsTo('App\Models\Question');
    }
    /**
     * The users that belong to the role.
     */
    public function choice()
    {
        return $this->belongsTo('App\Models\Choice');
    }
    /**
     * The users that belong to the role.
     */
    public function survey()
    {
        return $this->belongsTo('App\Models\Questionnaire');
    }
    /**
     * The users that belong to the role.
     */
    public function examen()
    {
        return $this->belongsTo('App\Models\Examen');
    }
    /**
     * The tutor that reply
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getQuestionLabel()
    {
        return $this->question;
    }

    public function getUserName()
    {
        return $this->user;
    }

    public function getExamenLabel()
    {
        return $this->examen;
    }

    public function getSurveyLabel()
    {
        return $this->survey;
    }

    public function getChoiceLabel()
    {
        return $this->choice;
    }


    public function getCorrection()
    {
        $reponseCorrection = $this->choice->response;
        $reponseEtudiant = $this->getAttribute('answer_value');
        if($reponseCorrection != $reponseEtudiant)
        {
            return "FAUX";
        }
        else 
        {
            return "CORRECT";
        }
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
