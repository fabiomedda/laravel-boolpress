<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected: sistema di protezione disabilitato per title e body 
    protected $fillable = ['title', 'body', 'categorytwo_id'];
    
    // guarded: da controllare

    public function categorytwo()
    {
        return $this->belongsTo("App\Categorytwo");
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
