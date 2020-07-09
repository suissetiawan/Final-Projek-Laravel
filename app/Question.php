<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $guarded = [];
    
    public function tags(){
    	return $this->belongsToMany('App\Tag','questions_tags','questions_id','tags_id');
    }

}
