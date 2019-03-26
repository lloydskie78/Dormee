<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDormReview extends Model
{
    public function user() {
    	return $this->belongsTo(User::class, 'user_dorm_reviews', 'id');
    }
}
