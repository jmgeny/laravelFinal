@extends('post.plantilla')
@section('titulo', 'Editar')

@section('content')

    <!-- Page Content -->
    <section class="container">
      <div class="row">
        <div class="col-sm-2">
			lateral
        </div>

        <!-- Post Content Column -->
        <div class="col-sm-8">
          <h2>
            Editar post
            <a href="{{route('post.index')}}" class="btn btn-primary pull-right">Listado</a>
  
          </h2>
          {!! Form::model($posts, ['route' => ['post.update', $posts->id], 'method' => 'PUT']) !!}
            @include('post.comp.form')
          {!! Form::close() !!}

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-sm-2">
			lateral
        </div>

      </div>
      <!-- /.row -->

    </section>
    <!-- /.container -->

@endsection