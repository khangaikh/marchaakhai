<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Video extends Model
{

	protected $fillable = [
        'name', 'url', 'description',
    ];

	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	protected $dateFormat = 'U';


}
