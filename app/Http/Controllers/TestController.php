<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function helloWorld(){
    	return 'Hello World';
    }


    public function newFile(){
    	return 'New File Created';
    }

    	public function __invoke($id){
    		return view('user.profile', ['user' => User::findOrFail($id)]);
    	}

    	// public function show($id)
    	// {
    	// 	return view('user.profile', ['user' => User::findOrFail($id)]);
    	// }


    	public function complete(){
    		return 'COmpleted!';
    	}

    	public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('log')->only('index');

        $this->middleware('subscribed')->except('store');
    }
    
}