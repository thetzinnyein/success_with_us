<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'url', 'photo', 'teacher_id' ];

    public function teacher(){
        return $this->belongsToMany('App\Teacher')
                    ->withTimestamps();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
