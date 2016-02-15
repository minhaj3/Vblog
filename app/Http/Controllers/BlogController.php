<?php

namespace vblog\Http\Controllers;

use Illuminate\Http\Request;

use vblog\Http\Requests;
use vblog\Http\Controllers\Controller;
use vblog\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('title')->paginate(12);
        return view('blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $blog = new Blog::create('title','description');
        // return view('blog.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  		$blog = Blog::where('slug','=',$id)->first();
        // dd($blog->posts);
    //     $user = $blog->user()->name;
    //     $theme = $blog->theme()->actual_name;
        $posts = $blog->posts()->paginate(3);
        return view('blogs.blog',compact('blog','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function about($id)
    {
        $blog = Blog::with('user')->where('slug',$id)->first();
        // $blog = Blog::find($id)->blog;
        return view('blogs.about',compact('blog'));
    }
}
