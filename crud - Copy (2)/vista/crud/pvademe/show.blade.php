@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPvademe')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="codmedi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodmedi")</label><div class="col-md-6"><input id="codmedi" type="text" value="{{$registro->codmedi}}" class="form-control" name="codmedi" readonly></div></div>                     <div class="row mb-3">                            <label for="nombrege" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombrege")</label><div class="col-md-6"><input id="nombrege" type="text" value="{{$registro->nombrege}}" class="form-control" name="nombrege" readonly></div></div>                     <div class="row mb-3">                            <label for="nombreco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombreco")</label><div class="col-md-6"><input id="nombreco" type="text" value="{{$registro->nombreco}}" class="form-control" name="nombreco" readonly></div></div>                     <div class="row mb-3">                            <label for="dosifi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedosifi")</label><div class="col-md-6"><input id="dosifi" type="text" value="{{$registro->dosifi}}" class="form-control" name="dosifi" readonly></div></div>                     <div class="row mb-3">                            <label for="uso" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuso")</label><div class="col-md-6"><input id="uso" type="text" value="{{$registro->uso}}" class="form-control" name="uso" readonly></div></div>                     <div class="row mb-3">                            <label for="presenta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepresenta")</label><div class="col-md-6"><input id="presenta" type="text" value="{{$registro->presenta}}" class="form-control" name="presenta" readonly></div></div>
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