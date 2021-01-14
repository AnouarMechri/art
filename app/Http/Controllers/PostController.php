<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Post;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
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
       $carbon = new Carbon();
       $current = Carbon::now(); 
       $posts= Post::orderBy('id','desc')->paginate(2);
       return view('post.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug'  => 'required|alpha_dash|max:255|unique:post,slug',
            'body'  => 'required'
        ));
        $post= new \App\Models\Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();
        $request->session()->flash('success', 'Your post was successfully added :))');
        return redirect()->action([PostController::class, 'show'] , [$post->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
       return view('post.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        return view('post.edit')->with('post',$post);
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
        $post= Post::find($id);
        if($request->input('slug')==$post->slug) {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body'  => 'required' )); } 
            else
            {
                $this->validate($request, array(
                    'title' => 'required|max:255',
                    'slug'  => 'required|unique:post,slug',
                    'body'  => 'required'  ));} 
       
        $post= Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->save(); 
        $request->session()->flash('success','Your post was successfully updated :))');
        return redirect()->action([PostController::class, 'show'] , [$post->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        $post->delete();
        session()->flash('success','Your post was successfully deleted :))');
        return redirect()->action([PostController::class, 'index']);
    }
}
