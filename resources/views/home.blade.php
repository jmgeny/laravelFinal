@extends('post.plantilla')
@section('titulo', 'Mi Perfil')

@section('content')
      <section class="container">
      	@guest
      		<h1 class="page-header">Invitado <a href="{{ route('login') }}">Ingresar</a></h1>
        @else
        	<h1 class="page-header">Bienvenido {{$user->name}}</h1>
        @endguest

      	<section class="row">
      		<article class="col-sm-4">
            <div>
              {{-- @if () --}}
                <a href="#" class="btn btn-primary">Editar</a>
              {{-- @endif --}}
            </div>
                <div>
                  <img src="img/user.png" class="img-thumbnail" alt="">
                </div>
                <div>
                	<ul>
                		<li><strong>Nombre Usuario: </strong> {{$user->name}} </li>
                		<li><strong>e-mail: </strong> {{$user->email}} </li>
                    <li><strong>Apellido: </strong> {{$user->atleta->apellido}} </li>
                    <li><strong>Nombre: </strong>{{$user->atleta->nombre}}</li>
                    <li><strong>Deporte: </strong>  </li>
                    
                    <li><strong>Apellido: </strong>{{$user->atleta->apellido}}</li>
                    <li><strong>DNI: </strong>{{$user->atleta->dni}}</li>
                    <li><strong>Genero: </strong>{{$user->atleta->genero}}</li>
                    <li><strong>Telefono: </strong>{{$user->atleta->telefono}}</li>
                    <li><strong>Dirección: </strong>{{$user->atleta->direccion}}</li> 
                    <li><strong>Localidad: </strong></li>
                    <li><strong>Asociación: </strong></li>
                    <li><strong>Equipo: </strong></li>
                	</ul>
                </div>      			
      		</article>

            <a href="{{route('post.create')}}" class="btn btn-primary pull-right">Nuevo</a>

          <article class="col-sm-8">
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
              @endforeach
          </article>
            {{$posteo->links()}}
      	</section>
      </section>

@endsection