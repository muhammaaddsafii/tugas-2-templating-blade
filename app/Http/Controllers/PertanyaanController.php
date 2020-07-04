<?php

namespace App\Http\Controllers;

use App\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PertanyaanController extends Controller
{
    //
    public function index(){
        $questions = question::all();
        return view('pertanyaan', ['questions' => $questions]);
    }
    
    public function create(){
        return view('form');
    }

    public function store(Request $request){
        $question = new Question;
        $question->judul = $request->judul;
        $question->isi = $request->isi;
        $question->created_at= $request->created_at;
        $question->updated_at = $request->updated_at;

        $question->save();

        return redirect('/pertanyaan');
    }
    
}

