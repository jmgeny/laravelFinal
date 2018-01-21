@extends('post.plantilla')
@section('titulo', 'Posteos')

@section('content')
  <section class="container">
    {{-- {{dd($users['0'])}} --}}
    <section class="row">
      <article class="col-sm-8">
        <h1>{{$posts->titulo}}</h1>
        de:<a href="#">{{$user_post->name}}</a> <br>
        <p>Fecha:  {{$posts->created_at}}</p>
        <p class="well">{{$posts->texto}}</p>

        <div">
   @include('error')
        {!! Form::open(['route' => 'coment.store', $posts->id]) !!}
            @include('comment.comp.form')
        {!! Form::close() !!}
          
        </div>

      <div class="media mb-4">
              <div class="well">
                  @foreach($coments as $coment)
                    Comenta: <p>{{$coment->texto}}</p><br>
                  @endforeach
              </div>
      </div>      
      </article>
      <aside class="col-sm-4">
        aside
      </aside>
    </section>    
  </section>

@endsection