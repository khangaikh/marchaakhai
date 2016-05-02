<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	
	protected $fillable = [
        'name', 'url', 'user', 'description',
    ];

	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	protected $dateFormat = 'U';


}
