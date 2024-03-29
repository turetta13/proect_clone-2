<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    protected $fillable = [
        'title', 'slug', 'description'
    ];

    protected $hidden = [
        'updated_at', 'created_at'
    ];

}
