<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pundiitarticle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identity', 'name', 'author', 'title', 'body', 'url', 'imageUrl', 'publicationDate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
