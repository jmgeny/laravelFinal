<?php

namespace soyDeporte\Http\Controllers;

use Illuminate\Http\Request;
use soyDeporte\Http\Requests\ComentRequest;
use soyDeporte\Coment;
use Illuminate\Support\Facades\Auth;

class ComentController extends Controller
{
    public function store(ComentRequest $request)
    {
        $coment = new Coment;
        $user_id = Auth::id();

        $coment->texto = $request->texto;
        $coment->user_id = $user_id;
        $coment->post_id = 2;

        $coment->save();

        return redirect() -> route('post.index') -> with('info','Se creo un nuevo Comentario al post');
        
    }	
}
