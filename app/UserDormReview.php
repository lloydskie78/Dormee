<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDormReview extends Model
{
    public function user() {
    	return $this->belongsTo(User::class, 'id', 'id');
    }
}
