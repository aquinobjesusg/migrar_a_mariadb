@extends('dashboard1')
@section('content-table')
@foreach ($registros as $registro)
<div class="card">
<h5 class="card-header">
@lang('dicc.VerSettings')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="/tablas/roles">
@csrf
                     <div class="row mb-3">                            <label for="site_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesite_name")</label><div class="col-md-6"><input id="site_name" type="text" value="{{$registro->site_name}}" class="form-control" name="site_name" readonly></div></div>                     <div class="row mb-3">                            <label for="site_email" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesite_email")</label><div class="col-md-6"><input id="site_email" type="text" value="{{$registro->site_email}}" class="form-control" name="site_email" readonly></div></div>                     <div class="row mb-3">                            <label for="site_title" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesite_title")</label><div class="col-md-6"><input id="site_title" type="text" value="{{$registro->site_title}}" class="form-control" name="site_title" readonly></div></div>                     <div class="row mb-3">                            <label for="footer_text" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefooter_text")</label><div class="col-md-6"><input id="footer_text" type="text" value="{{$registro->footer_text}}" class="form-control" name="footer_text" readonly></div></div>                     <div class="row mb-3">                            <label for="sidebar_collapse" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesidebar_collapse")</label><div class="col-md-6"><input id="sidebar_collapse" type="text" value="{{$registro->sidebar_collapse}}" class="form-control" name="sidebar_collapse" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('settings.index') }}" class="btn btn-default" >
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