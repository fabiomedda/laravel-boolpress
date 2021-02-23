<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected: sistema di protezione disabilitato per title e body 
    protected $fillable = ['title', 'body'];
    
    // guarded: da controllare

}
