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
                     <div class="row mb-3">                            <label for="codexa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodexa")</label><div class="col-md-6"><input id="codexa" type="text"  value="{{$registro->codexa}}" class="form-control" name="codexa" required></div></div>                     <div class="row mb-3">                            <label for="codetip" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodetip")</label><div class="col-md-6"><input id="codetip" type="text"  value="{{$registro->codetip}}" class="form-control" name="codetip" required></div></div>                     <div class="row mb-3">                            <label for="examen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameexamen")</label><div class="col-md-6"><input id="examen" type="text"  value="{{$registro->examen}}" class="form-control" name="examen" required></div></div>
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

