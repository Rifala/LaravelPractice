<?php
 
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller{
    public function index(){
        // foreach (User::all() as $user){
        //     echo $user ->name . ' | ' . $user->email;
            // }

        //where clause to find user by email
            $user = User::where('email', 'Arama@gmail.com')->first();
            if($user){
                echo $user ->name . ' | ' . $user->email;
            }else{
            echo 'Not Found';
            }
    }

    public function store(){
        // Validate the request...

        $user = new User;
        $user->name = "Arama";
        $user->email = "Arama@gmail.com";
        $user->save();
    }

    public function update(){
        $user = User::where('email', 'Arama@gmail.com')->first();
        $user->email = 'ara07@gmail.com';
        $user->save();
    }
}