<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{

	public $table = 'user_info';


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
