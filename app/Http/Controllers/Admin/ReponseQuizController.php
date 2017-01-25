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


    public function listesurvey()
    {
		$examList = $this->repoQuiz->getExamList();

        return view('quiz.listeexamen', ['examList' => $examList]);
    }


	public function getResponses()
	{
		
	}
}
