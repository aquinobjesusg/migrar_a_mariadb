@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Valoracion_usuario;$products = Valoracion_usuario::all(); ?>

<div class="card">

<h5 class="card-header">VALORACION_USUARIO</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('valoracion_usuario.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>VALOR</th><th>USERCREATED_AT</th><th>USERUPDATED_AT</th><th>SUCURSAL_ID</th><th>AFILIADO_ID</th><th>DELIVERY_ID</th><th>EMPRESA_ID</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->valor}}</td><td>{{$pro->usercreated_at}}</td><td>{{$pro->userupdated_at}}</td><td>{{$pro->sucursal_id}}</td><td>{{$pro->afiliado_id}}</td><td>{{$pro->delivery_id}}</td><td>{{$pro->empresa_id}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('valoracion_usuario.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('valoracion_usuario.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("valoracion_usuario.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          </div>
        </div>
@endsection
