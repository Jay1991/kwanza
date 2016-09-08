<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = ['post_id'];

    public function post(){
      return $this -> belongsTo('App\Post','post_id', 'id');
    }
}
