@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerGsistema')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="id_medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_medico")</label><div class="col-md-6"><input id="id_medico" type="text" value="{{$registro->id_medico}}" class="form-control" name="id_medico" readonly></div></div>                     <div class="row mb-3">                            <label for="nomcorto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenomcorto")</label><div class="col-md-6"><input id="nomcorto" type="text" value="{{$registro->nomcorto}}" class="form-control" name="nomcorto" readonly></div></div>                     <div class="row mb-3">                            <label for="clave" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameclave")</label><div class="col-md-6"><input id="clave" type="text" value="{{$registro->clave}}" class="form-control" name="clave" readonly></div></div>                     <div class="row mb-3">                            <label for="ulthisto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameulthisto")</label><div class="col-md-6"><input id="ulthisto" type="text" value="{{$registro->ulthisto}}" class="form-control" name="ulthisto" readonly></div></div>
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