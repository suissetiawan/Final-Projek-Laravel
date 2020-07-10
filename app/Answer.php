<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
    	'isi_jawaban', 'questions_id', 'users_id'
    ];

    public static function getAnswerById($id) {
		$answer = Answer::join('users', 'users_id', '=', 'users.id')
		->where('questions_id', $id)->get();
		return $answer;
	}

	public function user() {
		return $this->belongsTo('App\User');
	}
}
