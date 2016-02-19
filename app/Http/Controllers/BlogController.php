<?php

namespace vblog\Http\Controllers;

use Illuminate\Http\Request;

use vblog\Http\Requests;
use vblog\Http\Controllers\Controller;
use vblog\Blog;
use vblog\Http\Requests\BlogFormRequest;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogFormRequest $request)
    {
        // $blog = new Blog::create('title','description');
        // dd($request->all());
        $blog = new Blog($request->all());
        $blog->save();
        $imageName = $blog->id.'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(base_path().'/public/img/blogs',$imageName);
        // Blog::create([
        //     'title'=>$request->get('name'),
        //     'excerpt'=>$request->get('excerpt'),
        //     'slug'=>$request->get('slug'),
        //     'description'=>$request->get('description'),
        //     ]);
        return view('blogs.create')->withMessage('Your list has been created');
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
        // dd($id);
        $blog = Blog::find($id);
        // dd($blog);
        return view('blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogFormRequest $request, $id)
    {
        $blog = Blog::find($id);
        $blog->update($request->all());
        // if($request->get('image')->exists()){dd($request->all());}
        // add method to update pic uploaded, use ref from store
        return redirect()->route('blogs.edit',[$id])->withMessage('Your blog has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('blogs.index')->with('message','The blog has been deleted');
    }

    public function about($id)
    {
        $blog = Blog::with('user')->where('slug',$id)->first();
        // $blog = Blog::find($id)->blog;
        return view('blogs.about',compact('blog'));
    }
}
