@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPmoti_co')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="codmoti" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodmoti")</label><div class="col-md-6"><input id="codmoti" type="text"  class="form-control" name="codmoti" required></div></div>                     <div class="row mb-3">                            <label for="nhistori" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhistori")</label><div class="col-md-6"><input id="nhistori" type="text"  class="form-control" name="nhistori" required></div></div>                     <div class="row mb-3">                            <label for="nconsul" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenconsul")</label><div class="col-md-6"><input id="nconsul" type="text"  class="form-control" name="nconsul" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span>
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
@endsection