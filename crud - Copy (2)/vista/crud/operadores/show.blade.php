@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerOperadores')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="primera" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprimera")</label><div class="col-md-6"><input id="primera" type="text" value="{{$registro->primera}}" class="form-control" name="primera" readonly></div></div>                     <div class="row mb-3">                            <label for="segunda" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesegunda")</label><div class="col-md-6"><input id="segunda" type="text" value="{{$registro->segunda}}" class="form-control" name="segunda" readonly></div></div>                     <div class="row mb-3">                            <label for="nonbre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenonbre")</label><div class="col-md-6"><input id="nonbre" type="text" value="{{$registro->nonbre}}" class="form-control" name="nonbre" readonly></div></div>                     <div class="row mb-3">                            <label for="nivel" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenivel")</label><div class="col-md-6"><input id="nivel" type="text" value="{{$registro->nivel}}" class="form-control" name="nivel" readonly></div></div>
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