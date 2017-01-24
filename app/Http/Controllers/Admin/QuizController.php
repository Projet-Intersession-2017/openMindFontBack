<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\QuizRepository;

class QuizController extends Controller
{
	protected $repoQuiz;

	public function __construct()
    {
        $this->repoQuiz = new QuizRepository;
    }


    public function listeexamen()
    {
		$examList = $this->repoQuiz->getExamList();
        return view('quiz.listeexamen', ['examList' => $examList]);
    }


    public function listesurvey(Request $request)
    {
		$surveyList = $this->repoQuiz->getSurveyList($request->idExamen);
        return view('quiz.listesurvey', ['surveyList' => $surveyList]);
    }


    public function listequestions(Request $request)
    {
		$questionsList = $this->repoQuiz->getQuestionList($request->idSurvey);
        return view('quiz.listequestion', ['questionsList' => $questionsList]);
    }

}
