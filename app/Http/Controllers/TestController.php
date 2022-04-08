<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Enforcer;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $paginationValue = 100;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Enforcer::addPermissionForUser('eve', 'articles', 'read');
        $posts = BlogPost::orderBy('id', 'asc')->paginate($this->paginationValue);
        dd($posts);
        return view('blog.index', compact('posts'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

}
