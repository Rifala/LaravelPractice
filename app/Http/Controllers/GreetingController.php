<?php
 
namespace App\Http\Controllers;
 
class GreetingController extends Controller{
    public function show($id){
        return view('greeting');
    }
}