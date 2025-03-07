<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;


class OwnerController extends Controller
{
    public function index(){
        $user = Owner::with('annonces')->find(auth()->id());
        return view("dashboardOwner",['user'=>$user]);
    }
}
