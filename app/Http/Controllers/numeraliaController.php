<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\regBitacoraModel;
use App\regdepenModel;
use App\regUmedidaModel;
use App\regPeriodosModel;
use App\regMesesModel;
use App\regDiasModel;
use App\regAniosModel;
use App\regTipometaModel;
use App\regEPprogramaModel;
use App\regEPproyectoModel;
use App\regProgeAnualModel;
use App\regProgdAnualModel;

// Exportar a excel 
use Maatwebsite\Excel\Facades\Excel;
// Exportar a pdf
use PDF;
//use Options;

class numeraliaController extends Controller
{

    //*********************************************************************************//
    //************************* Estadísticas ******************************************//
    //*********************************************************************************//
    // Gráfica por unidad ejecutora - acciones
    public function actionGraficaxdepen(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');               

        $regprogdanual=regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                                                          'SIEVAD_DPA.DEPEN_ID2')
                                         ->join('SIEVAD_EPA','SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                           ->select(   'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2','SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->selectRaw('SUM(SIEVAD_DPA.TOTP_02)  AS GTAP_02')
                           ->selectRaw('SUM(SIEVAD_DPA.TOTC_02)  AS GTAC_02')
                           ->selectRaw('COUNT(*) AS NACTIV')     
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2','SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           //->where(  'SIEVAD_EPA.DEPEN_ID2'              ,$depen_id)            
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID'             ,'ASC')
                           ->orderBy(  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC','ASC')
                           ->get();     
        //dd($procesos);
        return view('sicinar.numeralia.graficaxdepen',compact('nombre','usuario','regprogdanual'));
    }

    // Gráfica por tipo de proyecto
    public function actionGraficaxtipproy(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');               

        $regprogeanual=regProgeAnualModel::join('SIEVAD_CAT_TIPO_ACCION','SIEVAD_CAT_TIPO_ACCION.TACCION_ID','=',
                                                                         'SIEVAD_EPA.TACCION_ID')
                                         ->join('SIEVAD_DPA','SIEVAD_DPA.FOLIO','=','SIEVAD_EPA.FOLIO')
                           ->select(   'SIEVAD_EPA.PERIODO_ID','SIEVAD_EPA.TACCION_ID','SIEVAD_CAT_TIPO_ACCION.TACCION_DESC')
                           //->selectRaw('SUM(SIEVAD_DPA.TOTP_02)  AS GTAP_02')
                           //->selectRaw('SUM(SIEVAD_DPA.TOTC_02)  AS GTAC_02')
                           ->selectRaw('COUNT(*) AS TOTAL')                           
                           ->groupBy(  'SIEVAD_EPA.PERIODO_ID','SIEVAD_EPA.TACCION_ID','SIEVAD_CAT_TIPO_ACCION.TACCION_DESC')
                           ->orderBy(  'SIEVAD_EPA.PERIODO_ID','ASC')
                           ->orderBy(  'SIEVAD_EPA.TACCION_ID','ASC')
                           ->get();     
        //dd($procesos);
        return view('sicinar.numeralia.graficaxtipproy',compact('nombre','usuario','regprogeanual'));
    }

    // Gráfica por Rubro social
    public function OscxRubro(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');               

        $regtotxrubro=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                                   ->selectRaw('COUNT(*) AS TOTALXRUBRO')
                                   ->where(    'PE_OSC.OSC_STATUS','S')
                                   ->get();
        $regosc=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                             ->selectRaw('PE_OSC.RUBRO_ID,PE_CAT_RUBROS.RUBRO_DESC AS RUBRO, COUNT(*) AS TOTAL')
                             ->where(    'PE_OSC.OSC_STATUS','S')
                             ->groupBy(  'PE_OSC.RUBRO_ID','PE_CAT_RUBROS.RUBRO_DESC')
                             ->orderBy(  'PE_OSC.RUBRO_ID','asc')
                             ->get();
        //dd($procesos);
        return view('sicinar.numeralia.oscxrubro',compact('regosc','regtotxrubro','nombre','usuario','rango'));
    }

    // Gráfica por Rubro social
    public function OscxRubro2(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');               

        $regtotxrubro=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('COUNT(*) AS TOTALXRUBRO')
                            ->get();
        $regosc=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('PE_OSC.RUBRO_ID,  PE_CAT_RUBROS.RUBRO_DESC AS RUBRO, COUNT(*) AS TOTAL')
                        ->groupBy('PE_OSC.RUBRO_ID','PE_CAT_RUBROS.RUBRO_DESC')
                        ->orderBy('PE_OSC.RUBRO_ID','asc')
                        ->get();
        //$procesos = procesosModel::join('SCI_TIPO_PROCESO','SCI_PROCESOS.CVE_TIPO_PROC','=','SCI_TIPO_PROCESO.CVE_TIPO_PROC')
        //    ->selectRaw('SCI_TIPO_PROCESO.DESC_TIPO_PROC AS TIPO, COUNT(SCI_PROCESOS.CVE_TIPO_PROC) AS TOTAL')
        //    ->groupBy('SCI_TIPO_PROCESO.DESC_TIPO_PROC')
        //    ->get();
        //dd($procesos);
        return view('sicinar.numeralia.graficadeprueba',compact('regosc','regtotxrubro','nombre','usuario','rango'));
    }

    // Filtro de estadistica de la bitacora
    public function actionVerBitacora(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');

        $regmeses     = regMesesModel::select('MES_ID','MES_DESC')->get();   
        $regperiodos  = regPfiscalesModel::select('PERIODO_ID', 'PERIODO_DESC')->get();        
        if($regperiodos->count() <= 0){
            toastr()->error('No existen periodos fiscales.','Lo siento!',['positionClass' => 'toast-bottom-right']);
            //return redirect()->route('nuevaIap');
        }
        return view('sicinar.osc.verBitacora',compact('nombre','usuario','regmeses','regperiodos'));
    }

    // Gráfica de transacciones (Bitacora)
    public function Bitacora(Request $request){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');

        // http://www.chartjs.org/docs/#bar-chart
        $regperiodos  = regPfiscalesModel::select('PERIODO_ID', 'PERIODO_DESC')->get();                
        $regbitatxmes=regBitacoraModel::join('PE_CAT_PROCESOS' ,'PE_CAT_PROCESOS.PROCESO_ID' ,'=','PE_BITACORA.PROCESO_ID')
                                      ->join('PE_CAT_FUNCIONES','PE_CAT_FUNCIONES.FUNCION_ID','=','PE_BITACORA.FUNCION_ID')
                                      ->join('PE_CAT_TRX'      ,'PE_CAT_TRX.TRX_ID'          ,'=','PE_BITACORA.TRX_ID')
                                      ->join('PE_CAT_MESES'    ,'PE_CAT_MESES.MES_ID'        ,'=','PE_BITACORA.MES_ID')
                                 ->select(   'PE_BITACORA.MES_ID','PE_CAT_MESES.MES_DESC')
                                 ->selectRaw('COUNT(*) AS TOTALGENERAL')
                                 ->where(    'PE_BITACORA.PERIODO_ID',$request->periodo_id)
                                 ->groupBy(  'PE_BITACORA.MES_ID','PE_CAT_MESES.MES_DESC')
                                 ->orderBy(  'PE_BITACORA.MES_ID','asc')
                                 ->get();        
        $regbitatot=regBitacoraModel::join('PE_CAT_PROCESOS','PE_CAT_PROCESOS.PROCESO_ID' ,'=','PE_BITACORA.PROCESO_ID')
                                   ->join('PE_CAT_FUNCIONES','PE_CAT_FUNCIONES.FUNCION_ID','=','PE_BITACORA.FUNCION_ID')
                                   ->join('PE_CAT_TRX'      ,'PE_CAT_TRX.TRX_ID'          ,'=','PE_BITACORA.TRX_ID')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 1 THEN 1 END) AS M01')  
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 2 THEN 1 END) AS M02')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 3 THEN 1 END) AS M03')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 4 THEN 1 END) AS M04')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 5 THEN 1 END) AS M05')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 6 THEN 1 END) AS M06')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 7 THEN 1 END) AS M07')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 8 THEN 1 END) AS M08')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 9 THEN 1 END) AS M09')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID =10 THEN 1 END) AS M10')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID =11 THEN 1 END) AS M11')
                         ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID =12 THEN 1 END) AS M12')
                         ->selectRaw('COUNT(*) AS TOTALGENERAL')
                         ->where(    'PE_BITACORA.PERIODO_ID',$request->periodo_id)
                         ->get();

        $regbitacora=regBitacoraModel::join('PE_CAT_PROCESOS' ,'PE_CAT_PROCESOS.PROCESO_ID' ,'=','PE_BITACORA.PROCESO_ID')
                                     ->join('PE_CAT_FUNCIONES','PE_CAT_FUNCIONES.FUNCION_ID','=','PE_BITACORA.FUNCION_ID')
                                     ->join('PE_CAT_TRX'      ,'PE_CAT_TRX.TRX_ID'          ,'=','PE_BITACORA.TRX_ID')
                    ->select(   'PE_BITACORA.PERIODO_ID', 'PE_BITACORA.PROCESO_ID','PE_CAT_PROCESOS.PROCESO_DESC', 
                                'PE_BITACORA.FUNCION_ID', 'PE_CAT_FUNCIONES.FUNCION_DESC', 
                                'PE_BITACORA.TRX_ID',     'PE_CAT_TRX.TRX_DESC')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 1 THEN 1 END) AS ENE')  
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 2 THEN 1 END) AS FEB')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 3 THEN 1 END) AS MAR')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 4 THEN 1 END) AS ABR')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 5 THEN 1 END) AS MAY')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 6 THEN 1 END) AS JUN')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 7 THEN 1 END) AS JUL')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 8 THEN 1 END) AS AGO')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID = 9 THEN 1 END) AS SEP')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID =10 THEN 1 END) AS OCT')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID =11 THEN 1 END) AS NOV')
                    ->selectRaw('SUM(CASE WHEN PE_BITACORA.MES_ID =12 THEN 1 END) AS DIC')                   
                    ->selectRaw('COUNT(*) AS SUMATOTAL')
                    ->where(    'PE_BITACORA.PERIODO_ID',$request->periodo_id)
                    ->groupBy(  'PE_BITACORA.PERIODO_ID','PE_BITACORA.PROCESO_ID','PE_CAT_PROCESOS.PROCESO_DESC',
                                'PE_BITACORA.FUNCION_ID','PE_CAT_FUNCIONES.FUNCION_DESC', 
                                'PE_BITACORA.TRX_ID'    ,'PE_CAT_TRX.TRX_DESC')
                    ->orderBy(  'PE_BITACORA.PERIODO_ID','asc')
                    ->orderBy(  'PE_BITACORA.PROCESO_ID','asc')
                    ->orderBy(  'PE_BITACORA.FUNCION_ID','asc')
                    ->orderBy(  'PE_BITACORA.TRX_ID'    ,'asc')
                    ->get();
        //dd($procesos);
        return view('sicinar.numeralia.bitacora',compact('regbitatxmes','regbitacora','regbitatot','regperiodos','nombre','usuario','rango'));
    }

    // Georefrenciación por municipio
    public function actiongeorefxmpio(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');  
        $arbol_id     = session()->get('arbol_id');              

        $regosc=regOscModel::join(  'PE_CAT_ENTIDADES_FED',     'PE_CAT_ENTIDADES_FED.ENTIDADFEDERATIVA_ID','=',
                                                                'PE_OSC.ENTIDADFEDERATIVA_ID')
                           ->join(  'PE_CAT_MUNICIPIOS_SEDESEM',[['PE_CAT_MUNICIPIOS_SEDESEM.ENTIDADFEDERATIVAID','=',
                                                                'PE_OSC.ENTIDADFEDERATIVA_ID'],
                                                               ['PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIOID'        ,'=',
                                                                'PE_OSC.MUNICIPIO_ID'],
                                                               ['PE_OSC.OSC_ID','<>',0]
                                                              ])
                        ->select(   'PE_OSC.ENTIDADFEDERATIVA_ID','PE_CAT_ENTIDADES_FED.ENTIDADFEDERATIVA_DESC AS ENTIDAD',
                                    'PE_OSC.MUNICIPIO_ID',        'PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIONOMBRE AS MUNICIPIO', 
                                    'PE_CAT_MUNICIPIOS_SEDESEM.GEOREF_CABMPIO_LATDECIMAL', 
                                    'PE_CAT_MUNICIPIOS_SEDESEM.GEOREF_CABMPIO_LONGDECIMAL')
                        ->selectRaw('COUNT(*) AS TOTAL')
                        ->groupBy(  'PE_OSC.ENTIDADFEDERATIVA_ID','PE_CAT_ENTIDADES_FED.ENTIDADFEDERATIVA_DESC',
                                    'PE_OSC.MUNICIPIO_ID',        'PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIONOMBRE', 
                                    'PE_CAT_MUNICIPIOS_SEDESEM.GEOREF_CABMPIO_LATDECIMAL', 
                                    'PE_CAT_MUNICIPIOS_SEDESEM.GEOREF_CABMPIO_LONGDECIMAL')
                        ->orderBy('PE_OSC.ENTIDADFEDERATIVA_ID','asc')
                        ->orderBy('PE_OSC.MUNICIPIO_ID'        ,'asc')
                        ->get();
        //dd($procesos);
        return view('sicinar.numeralia.mapaxmpio',compact('regosc','nombre','usuario','rango'));
    }


    // Mapas
    public function Mapas(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');               

        $regtotxrubro=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('COUNT(*) AS TOTALXRUBRO')
                            ->get();

        $regosc=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('PE_OSC.RUBRO_ID,  PE_CAT_RUBROS.RUBRO_DESC AS RUBRO, COUNT(*) AS TOTAL')
                        ->groupBy('PE_OSC.RUBRO_ID','PE_CAT_RUBROS.RUBRO_DESC')
                        ->orderBy('PE_OSC.RUBRO_ID','asc')
                        ->get();
        //$procesos = procesosModel::join('SCI_TIPO_PROCESO','SCI_PROCESOS.CVE_TIPO_PROC','=','SCI_TIPO_PROCESO.CVE_TIPO_PROC')
        //    ->selectRaw('SCI_TIPO_PROCESO.DESC_TIPO_PROC AS TIPO, COUNT(SCI_PROCESOS.CVE_TIPO_PROC) AS TOTAL')
        //    ->groupBy('SCI_TIPO_PROCESO.DESC_TIPO_PROC')
        //    ->get();
        //dd($procesos);
        return view('sicinar.numeralia.mapasdeprueba',compact('regosc','regtotxrubro','nombre','usuario','rango'));
    }

    // Mapas
    public function Mapas2(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');                

        $regtotxrubro=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('COUNT(*) AS TOTALXRUBRO')
                            ->get();

        $regosc=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('PE_OSC.RUBRO_ID,  PE_CAT_RUBROS.RUBRO_DESC AS RUBRO, COUNT(*) AS TOTAL')
                        ->groupBy('PE_OSC.RUBRO_ID','PE_CAT_RUBROS.RUBRO_DESC')
                        ->orderBy('PE_OSC.RUBRO_ID','asc')
                        ->get();
        //$procesos = procesosModel::join('SCI_TIPO_PROCESO','SCI_PROCESOS.CVE_TIPO_PROC','=','SCI_TIPO_PROCESO.CVE_TIPO_PROC')
        //    ->selectRaw('SCI_TIPO_PROCESO.DESC_TIPO_PROC AS TIPO, COUNT(SCI_PROCESOS.CVE_TIPO_PROC) AS TOTAL')
        //    ->groupBy('SCI_TIPO_PROCESO.DESC_TIPO_PROC')
        //    ->get();
        //dd($procesos);
        return view('sicinar.numeralia.mapasdeprueba2',compact('regosc','regtotxrubro','nombre','usuario','rango'));
    }

    // Mapas
    public function Mapas3(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');                

        $regtotxrubro=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('COUNT(*) AS TOTALXRUBRO')
                            ->get();
        $regosc=regOscModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID','=','PE_OSC.RUBRO_ID')
                      ->selectRaw('PE_OSC.RUBRO_ID,  PE_CAT_RUBROS.RUBRO_DESC AS RUBRO, COUNT(*) AS TOTAL')
                        ->groupBy('PE_OSC.RUBRO_ID','PE_CAT_RUBROS.RUBRO_DESC')
                        ->orderBy('PE_OSC.RUBRO_ID','asc')
                        ->get();
        //dd($procesos);
        return view('sicinar.numeralia.mapasdeprueba3',compact('regosc','regtotxrubro','nombre','usuario','rango'));
    }

}
