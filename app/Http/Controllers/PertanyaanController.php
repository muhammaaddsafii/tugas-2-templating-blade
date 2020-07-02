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
        $question->isi = $request->judul;
        $question->tanggal_dibuat = $request->tanggal_dibuat;
        $question->tanggal_diperbaharui = $request->tanggal_diperbaharui;

        $question->save();

        return redirect('/pertanyaan');
    }
    
}

