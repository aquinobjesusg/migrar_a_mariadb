@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerEstadisticas')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="titulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametitulo")</label><div class="col-md-6"><input id="titulo" type="text" value="{{$registro->titulo}}" class="form-control" name="titulo" readonly></div></div>                     <div class="row mb-3">                            <label for="name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namename")</label><div class="col-md-6"><input id="name" type="text" value="{{$registro->name}}" class="form-control" name="name" readonly></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text" value="{{$registro->cantidad}}" class="form-control" name="cantidad" readonly></div></div>                     <div class="row mb-3">                            <label for="user_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuser_id")</label><div class="col-md-6"><input id="user_id" type="text" value="{{$registro->user_id}}" class="form-control" name="user_id" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('estadisticas.index') }}" class="btn btn-default" >
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
@endforeach
@endsection