<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    public $timestamps = false;
    public function dueprcsses()
    {
        return $this->belongsToMany('App\Dueprcss', 'App\Disputelnk', 'mainid', 'secondid')->wherePivot('typeid',1);
    }
}
