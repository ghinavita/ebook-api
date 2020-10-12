<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            "NIS" => "3103118070",
            "Name" => "Ghina Rosvita Maharanisa",
            "Gender" => "Female",
            "Phone" => "085865562756",
            "Class" => "XII RPL 2"
        ];
    }
}
