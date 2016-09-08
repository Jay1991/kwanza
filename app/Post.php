<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  /**
   * All of the relationships to be touched.
   *update timestamp of parent
   * @var array
   */
    protected $touches = ['page'];



    public function page(){
      return $this -> hasMany('App\Page', 'post_id', 'id');
    }
}
