@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPmoti_co')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="codmoti" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodmoti")</label><div class="col-md-6"><input id="codmoti" type="text" value="{{$registro->codmoti}}" class="form-control" name="codmoti" readonly></div></div>                     <div class="row mb-3">                            <label for="nhistori" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhistori")</label><div class="col-md-6"><input id="nhistori" type="text" value="{{$registro->nhistori}}" class="form-control" name="nhistori" readonly></div></div>                     <div class="row mb-3">                            <label for="nconsul" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenconsul")</label><div class="col-md-6"><input id="nconsul" type="text" value="{{$registro->nconsul}}" class="form-control" name="nconsul" readonly></div></div>
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