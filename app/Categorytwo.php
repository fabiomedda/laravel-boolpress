<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorytwo extends Model
{
    //
    protected $fillable = ['name', 'description'];


    public function posts()
    {
        return $this->hasMany("App\Post");
    }
}
