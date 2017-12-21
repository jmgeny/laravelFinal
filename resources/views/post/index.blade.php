@extends('post.plantilla')
@section('titulo', 'Posteos')

@section('content')
<section class="row">
	<aside class="col-sm-2">
		Izquerda
	</aside>
	<article class="col-sm-8">
		<div>
			<h1>Listado de Posteos <a href="{{route('post.create')}}" class="btn btn-primary pull-right">Nuevo</a>
			</h1>
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
        </div>
        {{$posteo->links()}}
	</article>
	<aside class="col-sm-2">
		Derecha
	</aside>
</section>	
@endsection