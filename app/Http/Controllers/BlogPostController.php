<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    protected $paginationValue = 100;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::orderBy('id', 'asc')->paginate($this->paginationValue);
        return view('blog.index', compact('posts'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        return view('blog.show', [
            'post' => $blogPost,
        ]);
    }
}
