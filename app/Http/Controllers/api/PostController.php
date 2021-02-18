<?php

namespace App\Http\Controllers\api;

use App\Models\Category;
use App\Models\Post;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::
            join('post_images', 'post_images.post_id', '=', 'posts.id')->
            join('categories', 'categories.id', '=', 'posts.category_id')->
            select('posts.*', 'categories.title as category', 'post_images.image')->
            orderby('posts.created_at', 'desc')->paginate(10);
        return $this->successResponse($posts);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->image->image;
        $post->category->title;
        return $this->successResponse($post);
        // return response()->json(['data' => $post, 'code' => 200, 'msj' => '']);
    }

    public function url_clean(String $url_clean)
    {
        $post = Post::where('url_clean', $url_clean)->firstOrFail();

        $post->image->image;
        $post->category->title;
        return $this->successResponse($post);
        // return response()->json(['data' => $post, 'code' => 200, 'msj' => '']);
    }

    public function category(Category $category)
    {

        $posts = Post::
            join('post_images', 'post_images.post_id', '=', 'posts.id')->
            join('categories', 'categories.id', '=', 'posts.category_id')->
            select('posts.*', 'categories.title as category', 'post_images.image')->
            orderby('posts.created_at', 'desc')->where('categories.id',$category->id)->paginate(10);
        return $this->successResponse(['posts' => $posts,"category" => $category]);

        // sin relacion
        // return $this->successResponse(['posts' => $category->post()->paginate(10), 'category' => $category]);

    }

}
