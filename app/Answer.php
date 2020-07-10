<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
    	'isi_jawaban', 'questions_id', 'users_id'
    ];

    public function question() {
    	return $this->belongsTo('App\Question', 'questions_id');
    }

}
