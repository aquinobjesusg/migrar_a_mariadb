@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPassword_resets')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail")</label><div class="col-md-6"><input id="email" type="text" value="{{$registro->email}}" class="form-control" name="email" readonly></div></div>                     <div class="row mb-3">                            <label for="token" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametoken")</label><div class="col-md-6"><input id="token" type="text" value="{{$registro->token}}" class="form-control" name="token" readonly></div></div>
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