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
    public function checkuser(int $id){
        if ($id <= 10) {
            return response()->json(["messege"=>"welcome your id is valid"],);
        }
        else {
            return response()->json(["messege"=>"there is no space for you"],403);
        }
        
    }
}
