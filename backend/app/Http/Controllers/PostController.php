<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Middleware;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class PostController extends Controller  implements HasMiddleware
{


public static  function middleware()
{
    return[

        new Middleware('auth:sanctum',except:['index','show'])
    
    ];
}



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $fields =$request->validate([
            'title'=>'required|max:255',
            'body'=>'required',

        ]);
  $post = $request->user()->posts()->create($fields);
// return ['post'=>$post];
return $post;
    }

    /**
     * Display the specified resource.
     */
    // get post from db
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $fields =$request->validate([
            'title'=>'required|max:255',
            'body'=>'required',

        ]);
  $post->Update($fields);
  return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    // delete post from db
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['message'=>'Post deleted']);
    }
}
