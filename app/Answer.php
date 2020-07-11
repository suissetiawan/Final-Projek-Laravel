<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'isi_jawaban', 'questions_id', 'users_id',
    ];
    protected $guarded = [];

    public function anscomment(){
        return $this->hasMany('App\AnswerComment','answers_id');
    }
}
