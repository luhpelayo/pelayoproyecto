@extends('admin.template')

@section('content')
<div class="box box-primary">
<div class="page-header text-center">
    <h1>
        <i class="fa fa-user-secret"style="color:green"></i>
        SALICITANTES <a href="{{ route('solicitante.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Solicitante</a>
    </h1>
</div>
<div class="panel-body">
        
           {{ Form::open(['route' =>'solicitante.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right','role'=>'search']) }}
                <div class="form-group">
                   
                    {{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Search solicitante']) }}

                </div>
                <button type="submit" class="btn btn-info btn-flat">Buscar</button>
           {{ Form::close() }}    

</div>
<div class="box-body">              
<table class="display table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th >C.I.</th>
                <th>Nombre</th>  
                <th>Apellido</th>          
                <th>Telefono</th>
                <th>Email</th>
                <th text-center style="width: 100px;">Acciónes </th>
            </tr>
        </thead>         
   <tbody>
    @foreach($solicitantes as $solicitante)
         <tr>  
             <td>{{ $solicitante->ci }}</td>
             <td>{{ $solicitante->nombre }}</td> 
             <td>{{ $solicitante->apellido }}</td>
             <td>{{ $solicitante->telefono }}</td>
             <td>{{ $solicitante->email }}</td>
             <td>
                <a href="{{ route('solicitante.edit', $solicitante) }}" class="btn btn-primary">
                    <i class="fa fa-pencil-square"></i>
                </a>
            </td>
            <td>
              {!! Form::open(['route' => ['solicitante.destroy', $solicitante]]) !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onClick="return confirm('Eliminar registro?')" class="btn btn-danger">
                          <i class="fa fa-trash-o"></i>
                        </button>
              {!! Form::close() !!}  
            </td> 
        </tr>
    @endforeach

    </tbody>
   </table>
    {{ $solicitantes->render() }}
</div> 
</div>    
@stop