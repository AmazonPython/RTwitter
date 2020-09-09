<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Tweet model
class Tweet extends Model
{
    public function hasManyComments()
    {
        return $this->hasMany('id');
    }
}
