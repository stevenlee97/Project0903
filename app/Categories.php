<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";

    function products(){
        return $this->hasMany('App\Products','id_type','id');
        //id: Categories: local key
    }

    
    function pageUrlCate(){
        return $this->belongsTo("App\PageUrl","id_url","id");
        //id: Primary key of page_url : other key
    }

    function levelTwo(){
        return $this->hasMany('App\Categories','id_parent','id');
    }
}
