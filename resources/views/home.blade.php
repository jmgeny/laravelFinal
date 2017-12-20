@extends('post.plantilla')
@section('titulo', 'Mi Perfil')

@section('content')

      <section class="container">
      	@guest
      		<h1 class="page-header">Invitado <a href="{{ route('login') }}">Ingresar</a></h1>
        @else
        	<h1 class="page-header">Bienvenido {{$user->name}}</h1>
        @endguest

      	<div class="row">
      		<div class="col-sm-4">
                <div>
                  <img src="img/user.png" class="img-thumbnail" alt="">
                </div>
                <div>
                	<ul>
                		<li><strong>Nombre:</strong> {{$user->name}}</li>
                		<li><strong>e-mail:</strong> {{$user->email}}</li>
                	</ul>
                </div>      			
      		</div>
      		<div class="col-sm-8">
            <div><a href="{{route('post.create')}}" class="btn btn-primary pull-right">Nuevo</a></div>
            {{$posteo->links()}}
            <article>
              @include('post.comp.info');
                @foreach ($posteo as $post)

                <div class="panel panel-default">
                  <div class="panel-heading">{{$post->titulo}}</div>
                  <div class="panel-body">{{$post->texto}}</div>
                  <div class="panel-footer">
                    <a class="btn btn-primary" href="{{route('post.show',$post->id)}}">
                        Ver
                    </a>
                    <a class="btn btn-primary" href="{{route('post.edit',$post->id)}}">Editar</a>
                   <form action="{{route('post.destroy',$post->id)}}" method="POST" class="pull-right">
                  {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-primary">Eliminar</button>
                  </form> 
                </div>
                </div>
                <h2>Aca los comentarios</h2>
                @endforeach
            </article>
            {{$posteo->links()}}

                
       		</div>
      	</div>

      </section>

@endsection