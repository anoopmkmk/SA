<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    protected  $connection = 'mongodb';

    protected  $collection = 'contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subtitle', 'description', 'created_at', 'updated_at'
    ];
}
