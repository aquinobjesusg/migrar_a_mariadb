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
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="fecha_reporte" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_reporte")</label><div class="col-md-6"><input id="fecha_reporte" type="text"  value="{{$registro->fecha_reporte}}" class="form-control" name="fecha_reporte" required></div></div>                     <div class="row mb-3">                            <label for="fecha_opera" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_opera")</label><div class="col-md-6"><input id="fecha_opera" type="text"  value="{{$registro->fecha_opera}}" class="form-control" name="fecha_opera" required></div></div>                     <div class="row mb-3">                            <label for="diagnostico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namediagnostico")</label><div class="col-md-6"><input id="diagnostico" type="text"  value="{{$registro->diagnostico}}" class="form-control" name="diagnostico" required></div></div>                     <div class="row mb-3">                            <label for="plan_operatorio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameplan_operatorio")</label><div class="col-md-6"><input id="plan_operatorio" type="text"  value="{{$registro->plan_operatorio}}" class="form-control" name="plan_operatorio" required></div></div>                     <div class="row mb-3">                            <label for="texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametexto")</label><div class="col-md-6"><input id="texto" type="text"  value="{{$registro->texto}}" class="form-control" name="texto" required></div></div>                     <div class="row mb-3">                            <label for="estabilizada" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestabilizada")</label><div class="col-md-6"><input id="estabilizada" type="text"  value="{{$registro->estabilizada}}" class="form-control" name="estabilizada" required></div></div>                     <div class="row mb-3">                            <label for="componente_femoral" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecomponente_femoral")</label><div class="col-md-6"><input id="componente_femoral" type="text"  value="{{$registro->componente_femoral}}" class="form-control" name="componente_femoral" required></div></div>                     <div class="row mb-3">                            <label for="componente_tibial" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecomponente_tibial")</label><div class="col-md-6"><input id="componente_tibial" type="text"  value="{{$registro->componente_tibial}}" class="form-control" name="componente_tibial" required></div></div>                     <div class="row mb-3">                            <label for="componente_tibial_it" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecomponente_tibial_it")</label><div class="col-md-6"><input id="componente_tibial_it" type="text"  value="{{$registro->componente_tibial_it}}" class="form-control" name="componente_tibial_it" required></div></div>                     <div class="row mb-3">                            <label for="componente_pastelar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecomponente_pastelar")</label><div class="col-md-6"><input id="componente_pastelar" type="text"  value="{{$registro->componente_pastelar}}" class="form-control" name="componente_pastelar" required></div></div>                     <div class="row mb-3">                            <label for="reque_metilmeticatrilato" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_metilmeticatrilato")</label><div class="col-md-6"><input id="reque_metilmeticatrilato" type="text"  value="{{$registro->reque_metilmeticatrilato}}" class="form-control" name="reque_metilmeticatrilato" required></div></div>                     <div class="row mb-3">                            <label for="reque_metilmeticatrilato_cant" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_metilmeticatrilato_cant")</label><div class="col-md-6"><input id="reque_metilmeticatrilato_cant" type="text"  value="{{$registro->reque_metilmeticatrilato_cant}}" class="form-control" name="reque_metilmeticatrilato_cant" required></div></div>                     <div class="row mb-3">                            <label for="reque_steridrape" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_steridrape")</label><div class="col-md-6"><input id="reque_steridrape" type="text"  value="{{$registro->reque_steridrape}}" class="form-control" name="reque_steridrape" required></div></div>                     <div class="row mb-3">                            <label for="reque_steridrape_cant" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_steridrape_cant")</label><div class="col-md-6"><input id="reque_steridrape_cant" type="text"  value="{{$registro->reque_steridrape_cant}}" class="form-control" name="reque_steridrape_cant" required></div></div>                     <div class="row mb-3">                            <label for="reque_coban_esteril" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_coban_esteril")</label><div class="col-md-6"><input id="reque_coban_esteril" type="text"  value="{{$registro->reque_coban_esteril}}" class="form-control" name="reque_coban_esteril" required></div></div>                     <div class="row mb-3">                            <label for="reque_coban_esteril_cant" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_coban_esteril_cant")</label><div class="col-md-6"><input id="reque_coban_esteril_cant" type="text"  value="{{$registro->reque_coban_esteril_cant}}" class="form-control" name="reque_coban_esteril_cant" required></div></div>                     <div class="row mb-3">                            <label for="reque_autosutura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_autosutura")</label><div class="col-md-6"><input id="reque_autosutura" type="text"  value="{{$registro->reque_autosutura}}" class="form-control" name="reque_autosutura" required></div></div>                     <div class="row mb-3">                            <label for="reque_autosutura_cant" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_autosutura_cant")</label><div class="col-md-6"><input id="reque_autosutura_cant" type="text"  value="{{$registro->reque_autosutura_cant}}" class="form-control" name="reque_autosutura_cant" required></div></div>                     <div class="row mb-3">                            <label for="reque_orthopack" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_orthopack")</label><div class="col-md-6"><input id="reque_orthopack" type="text"  value="{{$registro->reque_orthopack}}" class="form-control" name="reque_orthopack" required></div></div>                     <div class="row mb-3">                            <label for="reque_orthopack_cant" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereque_orthopack_cant")</label><div class="col-md-6"><input id="reque_orthopack_cant" type="text"  value="{{$registro->reque_orthopack_cant}}" class="form-control" name="reque_orthopack_cant" required></div></div>                     <div class="row mb-3">                            <label for="sistema" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesistema")</label><div class="col-md-6"><input id="sistema" type="text"  value="{{$registro->sistema}}" class="form-control" name="sistema" required></div></div>                     <div class="row mb-3">                            <label for="marca" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemarca")</label><div class="col-md-6"><input id="marca" type="text"  value="{{$registro->marca}}" class="form-control" name="marca" required></div></div>                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text"  value="{{$registro->tipo}}" class="form-control" name="tipo" required></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text"  value="{{$registro->puro_texto}}" class="form-control" name="puro_texto" required></div></div>
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

