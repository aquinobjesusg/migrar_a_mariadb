@extends('dashboard1')
@section('content-table')
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearContratos')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('contratos.store') }}">
@csrf
                     <div class="row mb-3">                            <label for="nacionalidad_titular" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenacionalidad_titular")</label><div class="col-md-6"><input id="nacionalidad_titular" type="text"  class="form-control" name="nacionalidad_titular" required></div></div>                     <div class="row mb-3">                            <label for="cedula_titular" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula_titular")</label><div class="col-md-6"><input id="cedula_titular" type="text"  class="form-control" name="cedula_titular" required></div></div>                     <div class="row mb-3">                            <label for="nombre_titular_beneficiario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre_titular_beneficiario")</label><div class="col-md-6"><input id="nombre_titular_beneficiario" type="text"  class="form-control" name="nombre_titular_beneficiario" required></div></div>                     <div class="row mb-3">                            <label for="apellido_titular_beneficiario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameapellido_titular_beneficiario")</label><div class="col-md-6"><input id="apellido_titular_beneficiario" type="text"  class="form-control" name="apellido_titular_beneficiario" required></div></div>                     <div class="row mb-3">                            <label for="estado_civil" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado_civil")</label><div class="col-md-6"><input id="estado_civil" type="text"  class="form-control" name="estado_civil" required></div></div>                     <div class="row mb-3">                            <label for="sexo_titular_beneficiario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesexo_titular_beneficiario")</label><div class="col-md-6"><input id="sexo_titular_beneficiario" type="text"  class="form-control" name="sexo_titular_beneficiario" required></div></div>                     <div class="row mb-3">                            <label for="fecha_nacimiento_titular_beneficiario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_nacimiento_titular_beneficiario")</label><div class="col-md-6"><input id="fecha_nacimiento_titular_beneficiario" type="text"  class="form-control" name="fecha_nacimiento_titular_beneficiario" required></div></div>                     <div class="row mb-3">                            <label for="parentesco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameparentesco")</label><div class="col-md-6"><input id="parentesco" type="text"  class="form-control" name="parentesco" required></div></div>                     <div class="row mb-3">                            <label for="nombre_agente_recaudador" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre_agente_recaudador")</label><div class="col-md-6"><input id="nombre_agente_recaudador" type="text"  class="form-control" name="nombre_agente_recaudador" required></div></div>                     <div class="row mb-3">                            <label for="tipo_de_cuenta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_de_cuenta")</label><div class="col-md-6"><input id="tipo_de_cuenta" type="text"  class="form-control" name="tipo_de_cuenta" required></div></div>                     <div class="row mb-3">                            <label for="numero_de_cuenta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumero_de_cuenta")</label><div class="col-md-6"><input id="numero_de_cuenta" type="text"  class="form-control" name="numero_de_cuenta" required></div></div>                     <div class="row mb-3">                            <label for="tipo_de_vencimiento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_de_vencimiento")</label><div class="col-md-6"><input id="tipo_de_vencimiento" type="text"  class="form-control" name="tipo_de_vencimiento" required></div></div>                     <div class="row mb-3">                            <label for="codigo_empresa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo_empresa")</label><div class="col-md-6"><input id="codigo_empresa" type="text"  class="form-control" name="codigo_empresa" required></div></div>                     <div class="row mb-3">                            <label for="codigo_sucursal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo_sucursal")</label><div class="col-md-6"><input id="codigo_sucursal" type="text"  class="form-control" name="codigo_sucursal" required></div></div>                     <div class="row mb-3">                            <label for="numero_de_telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumero_de_telefono")</label><div class="col-md-6"><input id="numero_de_telefono" type="text"  class="form-control" name="numero_de_telefono" required></div></div>                     <div class="row mb-3">                            <label for="correo_electronico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecorreo_electronico")</label><div class="col-md-6"><input id="correo_electronico" type="text"  class="form-control" name="correo_electronico" required></div></div>                     <div class="row mb-3">                            <label for="codigo_cia_seguro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo_cia_seguro")</label><div class="col-md-6"><input id="codigo_cia_seguro" type="text"  class="form-control" name="codigo_cia_seguro" required></div></div>                     <div class="row mb-3">                            <label for="codigo_plan_en_siser" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo_plan_en_siser")</label><div class="col-md-6"><input id="codigo_plan_en_siser" type="text"  class="form-control" name="codigo_plan_en_siser" required></div></div>                     <div class="row mb-3">                            <label for="codigo_productor_asesor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo_productor_asesor")</label><div class="col-md-6"><input id="codigo_productor_asesor" type="text"  class="form-control" name="codigo_productor_asesor" required></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text"  class="form-control" name="estado" required></div></div>                     <div class="row mb-3">                            <label for="estado_observacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado_observacion")</label><div class="col-md-6"><input id="estado_observacion" type="text"  class="form-control" name="estado_observacion" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('contratos.index') }}" class="btn btn-default" >
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
@endsection