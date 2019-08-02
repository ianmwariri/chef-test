<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function index(){
    	return 'INDEX';
    }

    public function showMe(){
    	return 'Remind ME of sth...';
    }

    public function loyal(){
    	return view('pages/loyal');
    }
}
