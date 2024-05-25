<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class ControllerPrincipale extends Controller
{


 public function home(){
    return view("home");
 }

 public function form(){
    return view("form");
 }

 public function lista(){

    $books= Book::all();

    

    return view("lista", ['books'=>$books]);
 }

 public function store(Request $request){

     $request->validate([
        'email' => 'required',
        'text' => 'nullable|integer',
       


]);
    Book::create($request->all()); 

 
   
    return redirect()->route('lista'); 

}

}
