<?php

namespace soyDeporte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use soyDeporte\Post;
use soyDeporte\Deporte;
use soyDeporte\Atleta;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $myid = $user->id;
        $deporte = Deporte::find($user->deporte_id);


        // $post = Post::orderBy('id','DESC')->paginate(3);
        $post = Post::where('user_id','=',$myid)
                ->orderBy('id','DESC')
                ->paginate(5);

        return view('home', [
            "user" => $user, 
            "posteo" => $post,
            "deporte" => $deporte,
        ]);
    }
}
