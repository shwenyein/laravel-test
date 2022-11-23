<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()    { 
       /* $data=[
            ["id"=>1, "title"=>"First Article"],["id"=>2, "title"=>"Second Article"],
        ] ;   
        */  

        $data= Article::all();
         return view('articles/index',['persons'=> $data]);   
     } 
    public function detail($id)    {     
           return "Controller - Article Detail - $id";  
      } 
}
