@extends('layouts.app')
@section('content')
@foreach ($registros as $registro) 
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarRole')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('roles.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="codigo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo")</label><div class="col-md-6"><input id="codigo" type="text"  value="{{$registro->codigo}}" class="form-control" name="codigo" required></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text"  value="{{$registro->nombre}}" class="form-control" name="nombre" required></div></div>                     <div class="row mb-3">                            <label for="precio_principal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprecio_principal")</label><div class="col-md-6"><input id="precio_principal" type="text"  value="{{$registro->precio_principal}}" class="form-control" name="precio_principal" required></div></div>                     <div class="row mb-3">                            <label for="precio_auxiliar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprecio_auxiliar")</label><div class="col-md-6"><input id="precio_auxiliar" type="text"  value="{{$registro->precio_auxiliar}}" class="form-control" name="precio_auxiliar" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span> 
</a>
</div>
</div>
</form>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection

