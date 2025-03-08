<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table ="posts";

    protected $fillable=
    [
        "title",
        "slug",
        "content",
        "categoria",
    ];
    //Casteo de manera antigua antes de laravel 11
    protected $casts=
    [
        "published_at"=>"datetime",
        "is_active"=>"boolean",
    ];

    //Casteo de laravel 11 hacia adelante
    // protected function casts():array
    // {
    //     return
    //     [
    //     'published_at'=>'datetime'
    //     ];
    // }

    protected function title():Attribute{

        return
        Attribute::make(set:function($value){
            return strtolower($value);
        },get:function($value){
            return ucfirst($value);
        });
    }

    // public function getRouteKeyName()
    // {
    //     return "title";
    // }


}
