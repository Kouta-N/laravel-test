<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request,Response $response)
    {
        $html = <<<EOF
        <html>
        <head>
        <title>Hello/Index</title>
        <style>
        body{ font-size:16pt; color:#999; }
        h1{ font-size:120pt; text-align:right; color:#fafafa; margin:-50px 0px -120px 0px; }
        </style>
        </head>
        <body>
        <h3>Request</h3>
        <pre>{$request}</pre>
        <h3>Response</h3>
        <pre>{$response}</pre>

        <pre>request URL: {$request->url()}</pre>
        <pre>request FullURL: {$request->fullUrl()}</pre>
        <pre>request path: {$request->path()}</pre>
        <pre>response status: {$response->status()}</pre>
        </body>
        </html>
        EOF;
        $response->setContent($html);

        return $response;
    }

    public function toEach()
    {
        $data=[
            ['name'=>'山田太郎','mail'=>'taro@yamada'],
            ['name'=>'はなこ','mail'=>'hanako@yamada'],
            ['name'=>'さちこ','mail'=>'satiko@yamada'],
        ];

        return view('index', compact('data'));
    }
}