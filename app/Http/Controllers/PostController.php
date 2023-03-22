<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{

    public function handleRequest(PostRequest $request, $slug)
    {

        $url = url($slug);
        $agent = $request->header('User-Agent');
        $host = $request->getHost();
        $body = $request->getContent();

        $data = [
            'URL' => $url,
            'Agent' => $agent,
            'Host' => $host
        ];

        if ($request->isMethod('post')) {
            $data['Get information'] = $slug;
            $data['Body'] = $body;
        }

        return response()->json($data);
    }
}
