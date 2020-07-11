<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'isi_jawaban', 'question_id', 'users_id',
    ];
    protected $guarded = [];
}
