<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{

    public function users()
    {

        return $this->belongsToMany(User::class,'user_trade');

    }

}
