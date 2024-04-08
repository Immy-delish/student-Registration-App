<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjaxImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'image'
    ];
}
