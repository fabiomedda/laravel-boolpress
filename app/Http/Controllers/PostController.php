<?php

namespace App\Http\Controllers;

use App\Post;
use App\Categorytwo;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::latest()->get();

        // Per vedere i post con id superiore a 100 
        // $posts = Post::where('id', '>', 100)->get();

        
        // Per inserire i post alla rovescia, dal più nuovo al più vecchio
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Categorytwo::all();
        return view('posts.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd("Ciao", $request);
        //dd($request);
        //dd($request->all());

        //dd($request->all());
        //dd(request('title'), request('body'));

        // Validare i dati
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required',
            'categorytwo_id' => '',
        ]);

        Post::create($validatedData);

        /*
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        */

        //$new_post = Post::orderby('title')->take(5)->get();
        $new_post = Post::orderby('id', 'desc')->first();


        return redirect()->route('posts.show', $new_post);

        //back: ritorna alla location precedente
        //return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //

        //dd($post);
        //dd($post->title);
        //dd($post->categorytwo->name);

        return view('posts.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //

        // dd($post);
        $categories = Categorytwo::all();
        //dd($categories);
        
        return view('posts.edit', compact('post', 'categories'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        // dd($post);
        // dd($request->all())
        // dd($request->all(), $post);

        // Validare i dati
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required',
            'categorytwo_id' => '',
        ]);

        //dd($validatedData);
        
        $post->update($validatedData);

        /*
        $data = $request->all();
        $post->update($data);
        */

        //$post->update($request->all());
        
        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //

        // dd('elimina', $post);
        
        $post->delete();

        return redirect()->route('posts.index');

    }
}
