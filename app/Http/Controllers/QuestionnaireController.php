<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(){
        return view('questionnaire.create');
    }

    // public function index(){
    //     $questionnaires = Questionnaire::all();
    //     return view('questionnaire.index',compact('questionnaires'));
    // }

    public function store(){
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);
        // $data['user_id'] = auth()->user()->id;
        // $questionnaire = Questionnaire::create($data);
        
        $questionnaire = auth()->user()->questionnaires()->create($data);
        return redirect('/questionnaires/'.$questionnaire->id);
    }

    // public function show(Questionnaire $questionnaire){
    //     $questions = $questionnaire->questions;
    //     return view('questionnaire.show',[
    //         'questionnaire' => $questionnaire,
    //         'questions' => $questions
    //     ]);
    // }


    public function show(Questionnaire $questionnaire){
            $questionnaire->load('questions.answers.responses');
            return view('questionnaire.show',compact('questionnaire'));

    }
}
