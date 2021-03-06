@extends('admin.template')

@section('content')
<div class="container box box-primary">

    <div class="page-header  text-center">
      <h1>
       <i class="fa fa-recycle"style="color:green"></i>
        PROCEDIMIENTOS <small>[Agregar Procedimiento]</small>
      </h1>
    </div>
  <div class="col-xs-12 col-md-8 col-md-offset-2 col-xl-6 col-xl-offset-3">
    @if (count($errors) > 0)
        @include('admin.partials.errors')
    @endif
    
      {!! Form::open(['route'=>'procedimientos.store','method' => 'POST','files' => true]) !!}
          
          <div class="form-group">
              <label for="nombre">Nombre:</label>
              {!! 
                  Form::text(
                      'nombre', 
                      null, 
                      array(
                         
                          'class'=>'form-control',
                          'placeholder' => 'Nombre del procedimiento...',
                                        'autofocus' => 'autofocus'
                      )
                  ) 
              !!}
          </div>


         <div class="form-group">
           <label for="content">Contenido:</label>
              {!! 
                  Form::textarea(
                      'content', 
                      null, 
                      array(
                          'class'=>'form-control textarea-content',
                          'placeholder' => 'Contenido del artículo...',
                                        'autofocus' => 'autofocus'
                      )
                  ) 
              !!}
          </div>
         <div class="form-group">
          {!! Form::label('img','Agregar una imagen') !!}
          {!! Form::file('img')!!}
         </div>
          <div class="form-group">
          {!! Form::label('file','Agregar un archivo') !!}
          {!! Form::file('file')!!}
         </div>

         <div class="form-group">
              
              {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
              <a href="{{ route('procedimientos.index') }}" class="btn btn-warning">Cancelar</a>
          </div>
      
      {!! Form::close() !!}
 </div>

</div>
@endsection

@section('js')
  <script>
    $('.textarea-content').trumbowyg();

  </script>
@endsection