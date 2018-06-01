<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Post extends Model
{
    //

    protected $table = "posts";
    protected $fillable = [
        'user_id', 'title', 'body'
    ];

    public function user() {
    	return $this->belongsTo(User::class);
    }
}
