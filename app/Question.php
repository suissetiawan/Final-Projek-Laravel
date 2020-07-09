<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
<<<<<<< HEAD
    //
    protected $guarded = [];

=======
    public static function get_all(){
        $items= DB::table('questions')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB:table('questions')->insert($data);
        return $new_item;
    }
>>>>>>> b8da8735011b88741c29bfe5a945a3c852a45f6f
}
