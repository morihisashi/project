<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __invoke()
    {
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body{ font-siza:16pt; color:#999;}
        h1{ font-size:30px; text-align:right; color:#eee; margin:-15px 0px 0px 0px; }
        </style>
        </head>
        <body>
            <h1>Single Action</h1>
            <p>これは、シングルアクションコントローラーです。</p>
        </body>
        </html>
        EOF;
    }
}
