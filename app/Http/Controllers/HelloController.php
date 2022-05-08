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
        $data = [
            ['name'=>'山田たろう','mail'=>'tarp@yamada'],
            ['name'=>'田中はなこ','mail'=>'hanako@flower'],
            ['name'=>'鈴木さちこ','mail'=>'sachico@happy']
        ];
        return view('hello.index',['data'=>$data]);
    }

    public function post(Request $request){
        return view('hello.index', ['msg'=>$request->msg]);
    }
}


