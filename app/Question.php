<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    // public static function get_all(){
    //     $items= DB::table('questions')->get();
    //     return $items;
    // }

    // public static function save($data){
    //     $new_item = DB::table('questions')->insert($data);
    //     return $new_item;
    // }

    // public static function find_by_id($id){
    //     $item = DB::table('questions')->where('id', $id)->first();
    //     return $item;
    // }
}
