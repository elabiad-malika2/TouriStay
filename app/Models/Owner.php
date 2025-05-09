<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Annonce;


class Owner extends Model
{
    protected $table="users";
    
    public function annonces(){
        return $this->hasMany(Annonce::class , 'user_id');
    }
}
