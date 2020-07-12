<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerComment extends Model
{
    //
    protected $table =  "answers_comments";
    protected $fillable = [
        'isi_comments', 'answers_id', 'users_id',
    ];
}
