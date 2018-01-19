@extends('post.plantilla')
@section('titulo', 'Posteos')

@section('content')
  
  <section class="container">
    <section class="row">
      <article class="col-sm-8">
        <h1>{{$posts->titulo}}</h1>
        de:<a href="#">{{$user->name}}</a> <br>
        <p>Fecha:  {{$posts->created_at}}</p>
        <p class="well">{{$posts->texto}}</p>

        <div">

        {!! Form::open(['route' => 'post.store']) !!}
            @include('comment.comp.form')
        {!! Form::close() !!}
          
        </div>
      <div class="media mb-4">
              <div class="media-body">
                <h5 class="mt-0">Usuario del comentario</h5>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi nostrum odit vero iusto dolorem ducimus asperiores exercitationem repudiandae, veritatis reprehenderit, facilis dolore molestiae, maiores eligendi neque possimus ad at incidunt!
              </div>
            </div>      
      </article>
      <aside class="col-sm-4">
        aside
      </aside>
    </section>    
  </section>

@endsection