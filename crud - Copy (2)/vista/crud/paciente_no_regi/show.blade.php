@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPaciente_no_regi')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameregistro")</label><div class="col-md-6"><input id="registro" type="text" value="{{$registro->registro}}" class="form-control" name="registro" readonly></div></div>                     <div class="row mb-3">                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameapellidos")</label><div class="col-md-6"><input id="apellidos" type="text" value="{{$registro->apellidos}}" class="form-control" name="apellidos" readonly></div></div>                     <div class="row mb-3">                            <label for="nombres" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombres")</label><div class="col-md-6"><input id="nombres" type="text" value="{{$registro->nombres}}" class="form-control" name="nombres" readonly></div></div>                     <div class="row mb-3">                            <label for="celular" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecelular")</label><div class="col-md-6"><input id="celular" type="text" value="{{$registro->celular}}" class="form-control" name="celular" readonly></div></div>                     <div class="row mb-3">                            <label for="motivo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemotivo")</label><div class="col-md-6"><input id="motivo" type="text" value="{{$registro->motivo}}" class="form-control" name="motivo" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text" value="{{$registro->fecha}}" class="form-control" name="fecha" readonly></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text" value="{{$registro->medico}}" class="form-control" name="medico" readonly></div></div>                     <div class="row mb-3">                            <label for="registrado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameregistrado")</label><div class="col-md-6"><input id="registrado" type="text" value="{{$registro->registrado}}" class="form-control" name="registrado" readonly></div></div>                     <div class="row mb-3">                            <label for="hora" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora")</label><div class="col-md-6"><input id="hora" type="text" value="{{$registro->hora}}" class="form-control" name="hora" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span>
</a>
</div>
</div>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection