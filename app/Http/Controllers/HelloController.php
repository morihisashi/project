<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

function tag($tag, $txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index(){
        return view('hello.index',['msg'=>'']);
    }

    public function post(Request $request){
        return view('hello.index', ['msg'=>$request->msg]);
    }
}


