<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //Relation with users
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
