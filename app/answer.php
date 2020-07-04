<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    //
    public function find_by_id($id_pertanyaan){
        $questions = DB::table('questions')->where('id_pertanyaan', $id_pertanyaan)->first();
        return $questions;
    }
}
