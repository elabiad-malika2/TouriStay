<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;


class Touriste extends Model
{
    public function favorites(){
        return $this->hasMany(Favorite::class, 'user_id'); 
    }
}
