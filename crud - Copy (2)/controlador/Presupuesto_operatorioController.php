<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Presupuesto_operatorioController extends Controller
{
public $tabla = "presupuesto_operatorio";
    public $registro = null;

     public function __construct() { 
        
     }
     
     public function index()
     {
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     public function create()
     {
         return view( 'crud' . $this->tabla.'.create');
     }
 
     public function store(Request $request)
     {
        DB::table($this->tabla)->updateOrInsert(
[ 'documento'  => $request->documento ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'intervencion'  => $request->intervencion ,'ayudantes'  => $request->ayudantes ,'dias_hospi'  => $request->dias_hospi ,'arco_c'  => $request->arco_c ,'astroscopio'  => $request->astroscopio ,'sangre_qx_tipo_1'  => $request->sangre_qx_tipo_1 ,'sangre_qx_tipo_2'  => $request->sangre_qx_tipo_2 ,'sangre_qx_tipo_1_cantidad'  => $request->sangre_qx_tipo_1_cantidad ,'sangre_qx_tipo_2_cantidad'  => $request->sangre_qx_tipo_2_cantidad ,'material_sintesis'  => $request->material_sintesis ,'instrumental_traumatologico'  => $request->instrumental_traumatologico ,'honorarios'  => $request->honorarios ,'observaciones'  => $request->observaciones ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'clinica'  => $request->clinica ,'procedencia'  => $request->procedencia ,'h_1_ayudante'  => $request->h_1_ayudante ,'horas_quirofano'  => $request->horas_quirofano ,'h_2_ayudante'  => $request->h_2_ayudante ,'h_anestesiologo'  => $request->h_anestesiologo ,'rx_postoperatoria'  => $request->rx_postoperatoria ,'rx_torax'  => $request->rx_torax ,'h_tratante'  => $request->h_tratante ,'fluoroscopio'  => $request->fluoroscopio ,'h_artroscopio'  => $request->h_artroscopio ,'eval_preoperatoria'  => $request->eval_preoperatoria ,'otros_estudios_de_imagenes'  => $request->otros_estudios_de_imagenes ,'interconsultas'  => $request->interconsultas ,'otro_1_tex'  => $request->otro_1_tex ,'otro_1_deta'  => $request->otro_1_deta ,'otro_2_tex'  => $request->otro_2_tex ,'otro_2_deta'  => $request->otro_2_deta , ] 
        );
         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function show($id)
     {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view('crud' . $this->tabla . '.show',compact('registros'));
     }
 
     public function edit($id)
     {
         $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         $registros = $this->registros;
         return view('crud' .$this->tabla .'.edit',compact('registros'));
     }
 
     public function update(Request $request, $id)
     {
        
        $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'documento'  => $request->documento ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'intervencion'  => $request->intervencion ,'ayudantes'  => $request->ayudantes ,'dias_hospi'  => $request->dias_hospi ,'arco_c'  => $request->arco_c ,'astroscopio'  => $request->astroscopio ,'sangre_qx_tipo_1'  => $request->sangre_qx_tipo_1 ,'sangre_qx_tipo_2'  => $request->sangre_qx_tipo_2 ,'sangre_qx_tipo_1_cantidad'  => $request->sangre_qx_tipo_1_cantidad ,'sangre_qx_tipo_2_cantidad'  => $request->sangre_qx_tipo_2_cantidad ,'material_sintesis'  => $request->material_sintesis ,'instrumental_traumatologico'  => $request->instrumental_traumatologico ,'honorarios'  => $request->honorarios ,'observaciones'  => $request->observaciones ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'clinica'  => $request->clinica ,'procedencia'  => $request->procedencia ,'h_1_ayudante'  => $request->h_1_ayudante ,'horas_quirofano'  => $request->horas_quirofano ,'h_2_ayudante'  => $request->h_2_ayudante ,'h_anestesiologo'  => $request->h_anestesiologo ,'rx_postoperatoria'  => $request->rx_postoperatoria ,'rx_torax'  => $request->rx_torax ,'h_tratante'  => $request->h_tratante ,'fluoroscopio'  => $request->fluoroscopio ,'h_artroscopio'  => $request->h_artroscopio ,'eval_preoperatoria'  => $request->eval_preoperatoria ,'otros_estudios_de_imagenes'  => $request->otros_estudios_de_imagenes ,'interconsultas'  => $request->interconsultas ,'otro_1_tex'  => $request->otro_1_tex ,'otro_1_deta'  => $request->otro_1_deta ,'otro_2_tex'  => $request->otro_2_tex ,'otro_2_deta'  => $request->otro_2_deta , ] 
        );

         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function destroy($id)
     {
        $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     
}

