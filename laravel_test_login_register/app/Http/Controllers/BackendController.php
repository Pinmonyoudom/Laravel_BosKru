<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
class BackendController extends Controller
{
    function __construct(){

    }

    public function index(){
    	$books=Book::all();
    	// $user=\App\User::find(1);
    	// dd($user->books);
    	// $books=Book::find(1);
    	// dd($books->user->name);
    	// //$books=Book::find(1);
    	// //dd($books);
    	// //dd($books->user->name);
    	
    	$book=new Book();
    	$book->title="Oudom";
    	$book->author="king";
    	
    	$book->description="This is testing form controller";
    	$book->user_id=\Auth::id();
    	$book->save();

    
    	return view('backend.index',compact('books'));
    }
}
