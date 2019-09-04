<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Book extends Model{
	protected $table = "books";
	protected $primaryKey="id";
	protected $attributes=['isbn' =>'000000','year'=>2000,'amount'=>1,'price'=>0];
	
	function  user(){
		return $this ->belongTo('App\User');
	}
}