@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerMessages')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="conversation_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconversation_id")</label><div class="col-md-6"><input id="conversation_id" type="text" value="{{$registro->conversation_id}}" class="form-control" name="conversation_id" readonly></div></div>                     <div class="row mb-3">                            <label for="user_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuser_id")</label><div class="col-md-6"><input id="user_id" type="text" value="{{$registro->user_id}}" class="form-control" name="user_id" readonly></div></div>                     <div class="row mb-3">                            <label for="body" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebody")</label><div class="col-md-6"><input id="body" type="text" value="{{$registro->body}}" class="form-control" name="body" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('messages.index') }}" class="btn btn-default" >
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