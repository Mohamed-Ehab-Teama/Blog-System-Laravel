<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        // if the foreign key is user_id, you should name the function user, otherwise, you should pass the foreign key
        return $this->belongsTo(User::class);    // if the naming is correct
        // return $this->belongsTo(User::class, 'user_id');    // if the naming is not correct
    }
    
    
    // public function created_by()
    // {
    //     return $this->belongsTo(User::class, 'user_id');    // if the naming is not correct
    // }

}
