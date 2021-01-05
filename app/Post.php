<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];  

    protected $fillable = [
        'category', 'title', 'body', 'barter'
    ];

    public function user() {

        return $this->belongsTo(User::class);

    }



}
