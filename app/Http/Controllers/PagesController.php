<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Pages controller holds methods for controlling which pages are served

    public function home(){

        return view('welcome');
    }
public function about(){
    $titles=['Teachers','Subjects','Students'];
    return view('pages.about',compact('titles'));
}
public function posts(){
    $posts=['Good Posts'=>['About Jesus','About Puppies','About Rainbows'],'Neutral Posts'=>['About Rocks','About the color beige','About Vanilla Ice cream'],'Bad Posts '=>['About Satan','About Snakes','About Pineapple on pizza']];
    return $posts;
}
}
