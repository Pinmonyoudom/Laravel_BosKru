<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function hello($test){
    	return "Hello from controller $test";
    }

    public function index(){
    	return "Hello from index";
    }
    public function create(){
    	return "This is create from controller";
    }

    public function edit(){
    	return "This is edit form controller";
    }

   public function view(){
   	return "This is view from controller";
   }
}
