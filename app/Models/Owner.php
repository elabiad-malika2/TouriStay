<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Annonce;


class Owner extends Model
{
    public function annonces(){
        return $this->hasMany(Annonce::class , 'user_id');
    }
}
