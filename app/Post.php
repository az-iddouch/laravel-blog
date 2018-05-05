<?php

namespace App;


class Post extends Model
{
    
    public function comments(){

        return    $this->hasMany(Comment::class);

    }


    public function addComment($body){

        $this->comments()->create(compact('body'));

        

    }

    public function user(){

        return    $this->belongsTo(User::class);

    }

    public static function archives(){
        
        return static::selectRaw( 'year (created_at) as year, monthname (created_at) as month, count(*) as published ')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function tags()
    {
        //many to many relationship
        
        return $this->belongsToMany(Tag::class);
    }
   

}
