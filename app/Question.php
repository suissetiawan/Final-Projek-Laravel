<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public static function get_all(){
        $items= DB::table('questions')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB:table('questions')->insert($data);
        return $new_item;
    }
}
