@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPprocedi')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nhisto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenhisto")</label><div class="col-md-6"><input id="nhisto" type="text" value="{{$registro->nhisto}}" class="form-control" name="nhisto" readonly></div></div>                     <div class="row mb-3">                            <label for="nconsul" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenconsul")</label><div class="col-md-6"><input id="nconsul" type="text" value="{{$registro->nconsul}}" class="form-control" name="nconsul" readonly></div></div>                     <div class="row mb-3">                            <label for="procedi1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprocedi1")</label><div class="col-md-6"><input id="procedi1" type="text" value="{{$registro->procedi1}}" class="form-control" name="procedi1" readonly></div></div>                     <div class="row mb-3">                            <label for="procedi2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprocedi2")</label><div class="col-md-6"><input id="procedi2" type="text" value="{{$registro->procedi2}}" class="form-control" name="procedi2" readonly></div></div>                     <div class="row mb-3">                            <label for="procedi3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprocedi3")</label><div class="col-md-6"><input id="procedi3" type="text" value="{{$registro->procedi3}}" class="form-control" name="procedi3" readonly></div></div>
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