@extends('post.plantilla')
@section('titulo', 'Posteos')

@section('content')

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
			lateral
        </div>

        <!-- Post Content Column -->
        <div class="col-sm-8">
          <!-- Title -->
          <h1 class="mt-4">{{$posts->titulo}}</h1>
          <!-- Author -->
          <p class="lead">
            de
            <a href="#">{{$user->name}}</a>
          </p>
          <hr>
          <!-- Date/Time -->
          <p>Fecha: {{$posts->created_at}}</p>
          <hr>
          <!-- Post Content -->
          <p>{{$posts->texto}}</p>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
	            <h5 class="card-header">Nuevo comentario:</h5>
	            <div class="card-body">
	              <form>
	                <div class="form-group">
	                  <textarea class="form-control" rows="3"></textarea>
	                </div>
	                <button type="submit" class="btn btn-primary">Enviar</button>
	              </form>
	            </div>
          </div>

          <!-- Single Comment -->
          <div class="media mb-4">
	            <div class="media-body">
	              <h5 class="mt-0">Usuario del comentario</h5>
	              	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi nostrum odit vero iusto dolorem ducimus asperiores exercitationem repudiandae, veritatis reprehenderit, facilis dolore molestiae, maiores eligendi neque possimus ad at incidunt!
	            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-sm-2">
			lateral
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection