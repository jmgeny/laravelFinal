@extends('post.plantilla')
@section('titulo', 'Crear Post')

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
            Nuevo post
            <a href="{{route('post.index')}}" class="btn btn-primary pull-right">Listado</a>
  
          </h2>
@include('post.comp.error');

          {!! Form::open(['route' => 'post.store']) !!}
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