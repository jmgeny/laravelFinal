<?php

namespace soyDeporte\Http\Controllers;

use Illuminate\Http\Request;
use soyDeporte\Post;
use Illuminate\Support\Facades\Auth;
use soyDeporte\User;
use soyDeporte\Http\Requests\PostRequest;
use soyDeporte\Coment;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id','DESC')->paginate(5);
        
        return view('post.index', [
            "posteo" => $post
        ]);

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
    public function store(PostRequest $request)
    {
        $post = new Post;
        $u_id = Auth::id();

        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->estado = 'A';
        $post->user_id = $u_id;
        $post->categori_id = 1;

        $post->save();

        return redirect() -> route('post.index') -> with('info','Se creo un nuevo POSTEO');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $u_id = Auth::id();

        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->estado = 'A';
        $post->user_id = $u_id;
        $post->categori_id = 1;

        $post->save();

        return redirect() -> route('post.index') -> with('info','El post ' . $post->id . ' fue actualizado ');
    }    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        $user_post = User::find($posts->user_id);
        // $coments = Coment::all();
        $coments = Coment::where('post_id', '=', $id)->get();
        $users = User::all();

        return view('post.show',[
               "posts"=>$posts, 
               "user_post"=>$user_post,
               "coments"=>$coments,
               "users" =>$users 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        $user = User::find($posts->user_id);

        return view('post.edit',[
               "posts"=>$posts, 
               "user"=>$user 
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();

        return back()-> with('info','El post fue eliminado ');
    }
}
