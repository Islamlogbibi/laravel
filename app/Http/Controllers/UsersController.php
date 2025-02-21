<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
        $users = [
            ["id"=>1, "name"=>"ahmed"],
            ["id"=>2, "name"=>"islam"],
            ["id"=>3, "name"=>"salh"]
        ];
        foreach($users as $user){
            echo $user['id'] . " - " . $user['name'] . "\n";
        }
    }
}
