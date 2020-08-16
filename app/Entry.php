<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //Relación entre el modelo Entry y User
    //Entry N - 1 User
    //Eager Loading
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
