<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\dirdhsRequest;
use App\regRegionesModel;
use App\regDirdhsModel;
use App\regBitacoraModel;
use App\regMunicipioModel;
use App\regdepenModel;
use App\regRelscmModel; 
use App\regPeriodosModel;
use App\regMesesModel;
use App\regDiasModel;

// Exportar a excel 
use App\Exports\ExportDirdhsExcel;
use Maatwebsite\Excel\Facades\Excel;
// Exportar a pdf
use PDF;
//use Options;

class dirdhsController extends Controller
{

    public function actionBuscarDirDhs(Request $request)
    {
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');
        $depen_id     = session()->get('depen_id');        

        $regmunicipio = regMunicipioModel::select('MUNICIPIOID','MUNICIPIONOMBRE')
                        ->wherein('ENTIDADFEDERATIVAID',[15])
                        ->orderBy('MUNICIPIONOMBRE','DESC')
                        ->get();
        $regperiodos  = regPeriodosModel::select('PERIODO_ID','PERIODO_DESC')
                        ->get(); 
        $regregiones  = regRegionesModel::select('REGION_ID','REGION_ROMANO','REGION_DESC')
                        ->orderBy('REGION_ID','ASC')
                        ->get();     
        $regdepen     = regdepenModel::select('DEPEN_ID', 'DEPEN_DESC')
                        ->where(  'DEPEN_PADRE','211')
                        ->orderBy('DEPEN_DESC' ,'ASC')
                        ->get();                               
        //**************************************************************//
        // ***** busqueda https://github.com/rimorsoft/Search-simple ***//
        // ***** video https://www.youtube.com/watch?v=bmtD9GUaszw   ***//                            
        //**************************************************************//
        //********* Validar rol de usuario **********************/
        $name    = $request->get('name');   
        //$nameiap = $request->get('nameiap');           
        //$email = $request->get('email');  
        //$bio   = $request->get('bio');             
        if(session()->get('rango') !== '0'){    
            $regdirdhs= regDirdhsModel::select( 'PERIODO_ID','DHS_ID','NIVELGOB_ID','NIVELGOB_DESC','RUBRO_ID','RUBRO_DESC',
                        'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC',
                        'MUNICIPIO_ID','MUNICIPIO_DESC','CARGO_ID','CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                        'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                        'FECREG','FECREG2','FECREG3','IP','LOGIN','FECHA_M','FECHA_M2','FECHA_M3','IP_M','LOGIN_M')
                        ->orderBy('PERIODO_ID'  ,'asc')
                        ->orderBy('SUBSEC_ID'   ,'asc')
                        ->orderBy('COORD_ID'    ,'asc')
                        ->orderBy('REGION_ID'   ,'asc')
                        ->orderBy('MUNICIPIO_ID','asc')
                        ->name($name)           //Metodos personalizados es equvalente a ->where('OSC_DESC', 'LIKE', "%$name%");
                        //->nameiap($nameiap)     //Metodos personalizados
                        //->bio($bio)           //Metodos personalizados
                        ->paginate(40);                 
        }else{                
            $regdirdhs= regDirdhsModel::select( 'PERIODO_ID','DHS_ID','NIVELGOB_ID','NIVELGOB_DESC','RUBRO_ID','RUBRO_DESC',
                        'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC',
                        'MUNICIPIO_ID','MUNICIPIO_DESC','CARGO_ID','CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                        'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                        'FECREG','FECREG2','FECREG3','IP','LOGIN','FECHA_M','FECHA_M2','FECHA_M3','IP_M','LOGIN_M')
                        ->where(  'SUBSEC_ID'   ,$depen_id)
                        ->orderBy('PERIODO_ID'  ,'asc')
                        ->orderBy('SUBSEC_ID'   ,'asc')
                        ->orderBy('COORD_ID'    ,'asc')
                        ->orderBy('REGION_ID'   ,'asc')
                        ->orderBy('MUNICIPIO_ID','asc')
                        ->name($name)             //Metodos personalizados es equvalente a ->where('OSC_DESC', 'LIKE', "%$name%");
                        //->nameiap($nameiap)       //Metodos personalizados
                        //->bio($bio)             //Metodos personalizados
                        ->paginate(40);                         
        }
        if($regdirdhs->count() <= 0){
            toastr()->error('No existen registros.','Lo siento!',['positionClass' => 'toast-bottom-right']);
        }            
        return view('sicinar.directoriodhs.verDirdhs', compact('nombre','usuario','regperiodos','regdepen','regregiones','regmunicipio','regdirdhs'));
    }

    public function actionverDirDhs(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');  
        $depen_id     = session()->get('depen_id');              

        $regmunicipio = regMunicipioModel::select('MUNICIPIOID','MUNICIPIONOMBRE')
                        ->wherein('ENTIDADFEDERATIVAID',[15])
                        ->orderBy('MUNICIPIONOMBRE','DESC')
                        ->get();
        $regperiodos  = regPeriodosModel::select('PERIODO_ID','PERIODO_DESC')
                        ->get(); 
        $regregiones  = regRegionesModel::select('REGION_ID','REGION_ROMANO','REGION_DESC')
                        ->orderBy('REGION_ID','ASC')
                        ->get();                         
        //********* Validar rol de usuario **********************/
        if(session()->get('rango') !== '0'){    
            $regdepen = regdepenModel::select('DEPEN_ID', 'DEPEN_DESC')
                        ->where(  'DEPEN_PADRE','211')
                        ->orderBy('DEPEN_DESC' ,'ASC')
                        ->get();                                     
            $regdirdhs= regDirdhsModel::select('PERIODO_ID','DHS_ID','NIVELGOB_ID','NIVELGOB_DESC','RUBRO_ID','RUBRO_DESC',
                        'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC',
                        'MUNICIPIO_ID','MUNICIPIO_DESC','CARGO_ID','CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                        'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                        'FECREG','FECREG2','FECREG3','IP','LOGIN','FECHA_M','FECHA_M2','FECHA_M3','IP_M','LOGIN_M')
                        ->orderBy('PERIODO_ID'  ,'asc')
                        ->orderBy('SUBSEC_ID'   ,'asc')
                        ->orderBy('COORD_ID'    ,'asc')
                        ->orderBy('REGION_ID'   ,'asc')
                        ->orderBy('MUNICIPIO_ID','asc')
                        ->paginate(40);
        }else{            
            $regdepen = regdepenModel::select('DEPEN_ID', 'DEPEN_DESC')
                        ->where(  'DEPEN_PADRE','211')
                        ->where(  'DEPEN_ID'  ,$depen_id)                        
                        ->orderBy('DEPEN_DESC','ASC')
                        ->get();                                     
            $regdirdhs= regDirdhsModel::select('PERIODO_ID','DHS_ID','NIVELGOB_ID','NIVELGOB_DESC','RUBRO_ID','RUBRO_DESC',
                        'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC',
                        'MUNICIPIO_ID','MUNICIPIO_DESC','CARGO_ID','CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                        'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                        'FECREG','FECREG2','FECREG3','IP','LOGIN','FECHA_M','FECHA_M2','FECHA_M3','IP_M','LOGIN_M')
                        ->where(  'SUBSEC_ID' ,$depen_id)
                        ->orderBy('PERIODO_ID'  ,'asc')
                        ->orderBy('SUBSEC_ID'   ,'asc')
                        ->orderBy('COORD_ID'    ,'asc')
                        ->orderBy('REGION_ID'   ,'asc')
                        ->orderBy('MUNICIPIO_ID','asc')                     
                        ->paginate(40);            
        }
        if($regdirdhs->count() <= 0){
            toastr()->error('No existe registros.','Lo siento!',['positionClass' => 'toast-bottom-right']);
        }
        return view('sicinar.directoriodhs.verDirdhs',compact('nombre','usuario','regmunicipio','regdepen','regperiodos','regregiones','regdirdhs'));
    }

    public function actionNuevoDirDhs(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');
        $depen_id     = session()->get('depen_id');        

        $regmeses     = regMesesModel::select('MES_ID','MES_DESC')->get();      
        $regdias      = regDiasModel::select('DIA_ID','DIA_DESC')->get();       
        $regperiodos  = regPeriodosModel::select('PERIODO_ID','PERIODO_DESC')
                        ->orderBy('PERIODO_ID','ASC')
                        ->get(); 
        $regregiones  = regRegionesModel::select('REGION_ID','REGION_ROMANO','REGION_DESC')
                        ->orderBy('REGION_ID','ASC')
                        ->get();                                            
        if(session()->get('rango') !== '0'){                           
            $regrelacion = regRelscmModel::select('MUNICIPIO_ID','MUNICIPIO_DESC','REGION_ID','COORD_ID','SUBSEC_ID','SUBSEC_DESC')
                           ->orderBy('MUNICIPIO_ID','ASC')            
                           ->get();                             
        }else{
            $regrelacion = regRelscmModel::select('MUNICIPIO_ID','MUNICIPIO_DESC','REGION_ID','COORD_ID','SUBSEC_ID','SUBSEC_DESC')
                           ->where(  'SUBSEC_ID'   ,$depen_id)
                           ->orderBy('MUNICIPIO_ID','ASC')            
                           ->get();            
        }                                                
        $regdirdhs    = regDirdhsModel::select('PERIODO_ID','DHS_ID','NIVELGOB_ID','NIVELGOB_DESC','RUBRO_ID','RUBRO_DESC',
                        'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC',
                        'MUNICIPIO_ID','MUNICIPIO_DESC','CARGO_ID','CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                        'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                        'FECREG','FECREG2','FECREG3','IP','LOGIN')
                        ->orderBy('PERIODO_ID'  ,'asc')
                        ->orderBy('SUBSEC_ID'   ,'asc')
                        ->orderBy('COORD_ID'    ,'asc')
                        ->orderBy('REGION_ID'   ,'asc')
                        ->orderBy('MUNICIPIO_ID','asc')
                        ->get();
        return view('sicinar.directoriodhs.nuevoDirdhs',compact('nombre','usuario','regperiodos','regregiones','regrelacion','regdirdhs','regmeses','regdias'));
    }

    public function actionAltanuevoDirDhs(Request $request){
        //dd($request->all());
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');
        $depen_id     = session()->get('depen_id');        

        /************ Obtenemos la IP ***************************/                
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        } elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');
        } elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }        

        // **************** validar duplicidad ******************************/
        setlocale(LC_TIME, "spanish");        
        $xperiodo_id  = (int)date('Y');        
        $xmes_id      = (int)date('m');                
        $xdia_id      = (int)date('d');                        
        $mes    = regMesesModel::ObtMes($xmes_id);
        $dia    = regDiasModel::ObtDia($xdia_id);                        
        //dd('mes:'.$mes,' dia:'.$dia,' p mes:'.$xmes_id,' p dia:'.$xdia_id);
        $relac  = regRelscmModel::ObtRelac($request->municipio_id);

        // *************** Validar triada ***********************************/
        $triada = regDirdhsModel::where(['DHS_RESPON'   => $request->dhs_respon, 
                                         'MUNICIPIO_ID' => $request->municipio_id])
                  ->get();
        if($triada->count() >= 1)
            return back()->withInput()->withErrors(['DHS_RESPON' => 'Responsable '.$request->dhs_respon.' Ya existe. Por favor verificar.']);
        else{        
            // *************** Validar curp ***********************************/
            //$dupcurp = regDhsModel::where('CURP',substr(strtoupper(trim($request->curp)),0,18))
            //           ->get();
            //if($dupcurp->count() >= 1)
            //    return back()->withInput()->withErrors(['CURP' => ' CURP '.$request->curp.' Ya existe otro beneficiario con el mismo curp. Por favor verificar.']);
            //else{                    
                //**************************** Alta ********************************/
                $folio = regDirdhsModel::max('DHS_ID');
                $folio = $folio + 1;
                $nuevoDhs = new regDirdhsModel();
                $nuevoDhs->PERIODO_ID    = $xperiodo_id;
                $nuevoDhs->SUBSEC_ID     = substr(trim($relac[0]->subsec_id)    ,0,15);
                $nuevoDhs->SUBSEC_DESC   = substr(trim($relac[0]->subsec_desc)  ,0,79);
                $nuevoDhs->COORD_ID      = substr(trim($relac[0]->coord_id)     ,0,15);
                $nuevoDhs->COORD_DESC    = substr(trim($relac[0]->coord_desc)   ,0,79);
                $nuevoDhs->REGION_ID     = $relac[0]->region_id;
                $nuevoDhs->REGION_ROMANO = substr(trim($relac[0]->region_romano),0, 5);                
                $nuevoDhs->REGION_DESC   = substr(trim($relac[0]->region_desc)  ,0,79);

                $nuevoDhs->DHS_ID        = $folio;
                $nuevoDhs->MUNICIPIO_ID  = $request->municipio_id;
                $nuevoDhs->MUNICIPIO_DESC= substr(trim($relac[0]->municipio_desc)         ,0,79);                
                $nuevoDhs->CARGO_DESC    = substr(strtoupper(trim($request->cargo_desc))  ,0,129);                
                $nuevoDhs->DHS_RESPON    = substr(strtoupper(trim($request->dhs_respon))  ,0, 79);
                $nuevoDhs->DHS_TELOFIC   = substr(strtoupper(trim($request->dhs_telofic)) ,0, 79);
                $nuevoDhs->DHS_TELEFONO  = substr(strtoupper(trim($request->dhs_telefono)),0, 79);                
                $nuevoDhs->DHS_EMAIL     = substr(strtolower(trim($request->dhs_email))   ,0, 79);

                $nuevoDhs->DHS_DOM       = substr(strtoupper(trim($request->dhs_dom))     ,0,149);        

                //$nuevoDhs->FECREG      = date('Y/m/d', strtotime(trim($dia1[0]->dia_desc.'/'.$mes1[0]->mes_mes.'/'.$request->periodo_id1) ));
                $nuevoDhs->FECREG2       = date('d/m/Y'); //trim($dia[0]->dia_desc.'/'.$mes[0]->mes_mes.'/'.$xperiodo_id);                
                //dd($dia[0]->dia_desc,$mes[0]->mes_mes,$xperiodo_id);
                //$nuevoDhs->FECREG3       = date('d/m/Y'); //trim($dia[0]->dia_desc.'/'.$mes[0]->mes_mes.'/'.$xperiodo_id);                

                $nuevoDhs->IP            = $ip;
                $nuevoDhs->LOGIN         = $nombre;         // Usuario ;
                $nuevoDhs->save();
                if($nuevoDhs->save() == true){
                    toastr()->success('Responsable dado de alta.','ok!',['positionClass' => 'toast-bottom-right']);

                    /************ Bitacora inicia *************************************/ 
                    setlocale(LC_TIME, "spanish");        
                    $xip          = session()->get('ip');
                    $xperiodo_id  = (int)date('Y');
                    $xprograma_id = 1;
                    $xmes_id      = (int)date('m');
                    $xproceso_id  =         3;
                    $xfuncion_id  =      3005;
                    $xtrx_id      =        17;    //Alta
                    $regbitacora = regBitacoraModel::select('PERIODO_ID','MES_ID','PROCESO_ID','FUNCION_ID', 
                                                    'TRX_ID', 'FOLIO', 'NO_VECES', 'FECHA_REG', 'IP', 'LOGIN', 
                                                    'FECHA_M', 'IP_M', 'LOGIN_M')
                               ->where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 'MES_ID' => $xmes_id,
                                    'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id, 
                                    'FOLIO' => $folio])
                               ->get();
                    if($regbitacora->count() <= 0){              // Alta
                        $nuevoregBitacora = new regBitacoraModel();              
                        $nuevoregBitacora->PERIODO_ID = $xperiodo_id;    // Año de transaccion 
                        $nuevoregBitacora->PROGRAMA_ID= $xprograma_id;   // Proyecto JAPEM 
                        $nuevoregBitacora->MES_ID     = $xmes_id;        // Mes de transaccion
                        $nuevoregBitacora->PROCESO_ID = $xproceso_id;    // Proceso de apoyo
                        $nuevoregBitacora->FUNCION_ID = $xfuncion_id;    // Funcion del modelado de procesos 
                        $nuevoregBitacora->TRX_ID     = $xtrx_id;        // Actividad del modelado de procesos
                        $nuevoregBitacora->FOLIO      = $folio;          // Folio    
                        $nuevoregBitacora->NO_VECES   = 1;               // Numero de veces            
                        $nuevoregBitacora->IP         = $folio;          // Folio
                        $nuevoregBitacora->LOGIN      = $nombre;         // Usuario 
                        $nuevoregBitacora->save();
                        if($nuevoregBitacora->save() == true)
                            toastr()->success('Trx de responsable dado de alta en Bitacora.','¡Ok!',['positionClass' => 'toast-bottom-right']);
                        else
                            toastr()->error('Error en Trx de responsable. Por favor volver a interlo.','Ups!',['positionClass' => 'toast-bottom-right']);
                    }else{                   
                        //*********** Obtine el no. de veces *****************************
                        $xno_veces = regBitacoraModel::where(['PERIODO_ID' => $xperiodo_id,'PROGRAMA_ID' => $xprograma_id,'MES_ID' => $xmes_id, 
                                                              'PROCESO_ID' => $xproceso_id,'FUNCION_ID'  => $xfuncion_id, 'TRX_ID' => $xtrx_id, 
                                                              'FOLIO' => $folio])
                                     ->max('NO_VECES');
                        $xno_veces = $xno_veces+1;                        
                        //*********** Termina de obtener el no de veces *****************************         
                        $regbitacora = regBitacoraModel::select('NO_VECES','IP_M','LOGIN_M','FECHA_M')
                                   ->where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 'MES_ID' => $xmes_id, 'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id,'TRX_ID' => $xtrx_id,'FOLIO' => $folio])
                                   ->update([
                                         'NO_VECES'=> $regbitacora->NO_VECES = $xno_veces,
                                         'IP_M'    => $regbitacora->IP       = $ip,
                                         'LOGIN_M' => $regbitacora->LOGIN_M  = $nombre,
                                         'FECHA_M' => $regbitacora->FECHA_M  = date('Y/m/d')  //date('d/m/Y')
                                       ]);
                        toastr()->success('Trx de responsable actualizada en Bitacora.','¡Ok!',['positionClass' => 'toast-bottom-right']);
                    }
                    /************ Bitacora termina *************************************/ 
                }else{
                    toastr()->error('Error en Trx de responsable. Por favor volver a interlo.','Ups!',['positionClass' => 'toast-bottom-right']);
                }   /**************** Termina de dar de alta ********************************/
            //}     /**************** Termina de validar duplicidad del CURP ****************/
        }           /**************** Termina de validar duplicidad triada *****************/
        return redirect()->route('verdirdhs');
    }

    
    public function actionEditarDirDhs($id){
        $nombre        = session()->get('userlog');
        $pass          = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario       = session()->get('usuario');
        $rango         = session()->get('rango');
        $arbol_id      = session()->get('arbol_id');   
        $depen_id      = session()->get('depen_id');

        $regmeses     = regMesesModel::select('MES_ID','MES_DESC')->get();      
        $regdias      = regDiasModel::select('DIA_ID','DIA_DESC')->get();       
        $regperiodos  = regPeriodosModel::select('PERIODO_ID','PERIODO_DESC')
                        ->orderBy('PERIODO_ID','ASC')
                        ->get(); 
        $regregiones  = regRegionesModel::select('REGION_ID','REGION_ROMANO','REGION_DESC')
                        ->orderBy('REGION_ID','ASC')
                        ->get();                          
        //********* Validar rol de usuario **********************/
        if(session()->get('rango') !== '0'){                          
            $regrelacion = regRelscmModel::select('MUNICIPIO_ID','MUNICIPIO_DESC','REGION_ID','COORD_ID','SUBSEC_ID','SUBSEC_DESC')
                           ->orderBy('MUNICIPIO_ID','ASC')            
                           ->get();                      
            $regdirdhs   = regDirdhsModel::select('PERIODO_ID','DHS_ID','NIVELGOB_ID','NIVELGOB_DESC','RUBRO_ID','RUBRO_DESC',
                           'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC',
                           'MUNICIPIO_ID','MUNICIPIO_DESC','CARGO_ID','CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                           'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                           'FECHA_M','FECHA_M2','FECHA_M3','IP_M','LOGIN_M')
                           ->where('DHS_ID',$id)                         
                           ->first();                                  
        }else{
            $regrelacion = regRelscmModel::select('MUNICIPIO_ID','MUNICIPIO_DESC','REGION_ID','COORD_ID','SUBSEC_ID','SUBSEC_DESC')
                           ->where(  'SUBSEC_ID'   ,$depen_id)
                           ->orderBy('MUNICIPIO_ID','ASC')            
                           ->get();            
            $regdirdhs   = regDirdhsModel::select('PERIODO_ID','DHS_ID','NIVELGOB_ID','NIVELGOB_DESC','RUBRO_ID','RUBRO_DESC',
                           'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ID','REGION_ROMANO','REGION_DESC',
                           'MUNICIPIO_ID','MUNICIPIO_DESC','CARGO_ID','CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                           'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                           'FECHA_M','FECHA_M2','FECHA_M3','IP_M','LOGIN_M')
                           ->where('DHS_ID'   ,$id)              
                           ->where('SUBSEC_ID',$depen_id)           
                           ->first();                           
        }                                                
        if($regdirdhs->count() <= 0){
            toastr()->error('No existe responsable.','Lo siento!',['positionClass' => 'toast-bottom-right']);
        }
        return view('sicinar.directoriodhs.editarDirdhs',compact('nombre','usuario','regperiodos','regregiones','regrelacion','regdirdhs','regmeses','regdias'));
    }

    public function actionActualizarDirdhs(dirdhsRequest $request, $id){
        $nombre        = session()->get('userlog');
        $pass          = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario       = session()->get('usuario');
        $rango         = session()->get('rango');
        $ip            = session()->get('ip');
        $arbol_id      = session()->get('arbol_id');   
        $depen_id      = session()->get('depen_id');

        // **************** actualizar ******************************
        $regdirdhs = regDirdhsModel::where('DHS_ID',$id);
        if($regdirdhs->count() <= 0)
            toastr()->error('No existe responsable.','¡Por favor volver a intentar!',['positionClass' => 'toast-bottom-right']);
        else{        
            //*************** Actualizar ********************************/
            setlocale(LC_TIME, "spanish");        
            $xperiodo_id  = (int)date('Y');        
            $xmes_id      = (int)date('m');                
            $xdia_id      = (int)date('d');                        
            $mes          = regMesesModel::ObtMes($xmes_id);
            $dia          = regDiasModel::ObtDia($xdia_id);   
            $relac        = regRelscmModel::ObtRelac($request->municipio_id);                     

            $regdirdhs = regDirdhsModel::where('DHS_ID',$id)        
                         ->update([          
                                    'SUBSEC_ID'       => substr(strtoupper(trim($relac[0]->subsec_id))     ,0,15),
                                    'SUBSEC_DESC'     => substr(strtoupper(trim($relac[0]->subsec_desc))   ,0,79),
                                    'COORD_ID'        => substr(strtoupper(trim($relac[0]->coord_id))      ,0,15),
                                    'COORD_DESC'      => substr(strtoupper(trim($relac[0]->coord_desc))    ,0,79),                

                                    'REGION_ID'       => $relac[0]->region_id,
                                    'REGION_ROMANO'   => substr(strtoupper(trim($relac[0]->region_romano)) ,0, 5),                
                                    'REGION_DESC'     => substr(strtoupper(trim($relac[0]->region_desc))   ,0,79),
                                    'MUNICIPIO_DESC'  => substr(strtoupper(trim($relac[0]->municipio_desc)),0,79),

                                    'CARGO_DESC'      => substr(strtoupper(trim($request->cargo_desc))     ,0,129),
                                    'DHS_RESPON'      => substr(strtoupper(trim($request->dhs_respon))     ,0, 79),
                                    'DHS_TELOFIC'     => substr(strtoupper(trim($request->dhs_telofic))    ,0, 79),
                                    'DHS_TELEFONO'    => substr(strtoupper(trim($request->dhs_telefono))   ,0, 79),                
                                    'DHS_EMAIL'       => substr(strtolower(trim($request->dhs_email))      ,0, 79),                
                                    'DHS_DOM'         => substr(strtoupper(trim($request->dhs_dom))        ,0,149),
                                    'DHS_OBS1'        => substr(strtoupper(trim($request->dhs_obs1))       ,0,199),
                                    //'STATUS_1'      => $request->status_1,                

                                    'IP_M'            => $ip,
                                    'LOGIN_M'         => $nombre,
                                    'FECHA_M3'        => date('Y/m/d', strtotime(trim($dia[0]->dia_desc.'/'.$mes[0]->mes_mes.'/'.$xperiodo_id) )),
                                    'FECHA_M2'        => trim($dia[0]->dia_desc.'/'.$mes[0]->mes_mes.'/'.$xperiodo_id),                
                                    'FECHA_M'         => date('Y/m/d')    //date('d/m/Y')        
                                  ]);
            toastr()->success('Responsable actualizado.','¡Ok!',['positionClass' => 'toast-bottom-right']);

            /************ Bitacora inicia *************************************/ 
            setlocale(LC_TIME, "spanish");        
            $xip          = session()->get('ip');
            $xperiodo_id  = (int)date('Y');
            $xprograma_id = 1;
            $xmes_id      = (int)date('m');
            $xproceso_id  =         3;
            $xfuncion_id  =      3005;
            $xtrx_id      =        18;    //Actualizar         
            $regbitacora = regBitacoraModel::select('PERIODO_ID','MES_ID','PROCESO_ID','FUNCION_ID','TRX_ID','FOLIO','NO_VECES', 
                                                    'FECHA_REG', 'IP', 'LOGIN', 'FECHA_M', 'IP_M', 'LOGIN_M')
                           ->where(['PERIODO_ID' => $xperiodo_id,'PROGRAMA_ID' => $xprograma_id,'MES_ID' => $xmes_id, 
                                    'PROCESO_ID' => $xproceso_id,'FUNCION_ID'  => $xfuncion_id, 'TRX_ID' => $xtrx_id, 
                                    'FOLIO' => $id])
                           ->get();
            if($regbitacora->count() <= 0){              // Alta
                $nuevoregBitacora = new regBitacoraModel();              
                $nuevoregBitacora->PERIODO_ID = $xperiodo_id;    // Año de transaccion 
                $nuevoregBitacora->PROGRAMA_ID= $xprograma_id;   // Proyecto JAPEM 
                $nuevoregBitacora->MES_ID     = $xmes_id;        // Mes de transaccion
                $nuevoregBitacora->PROCESO_ID = $xproceso_id;    // Proceso de apoyo
                $nuevoregBitacora->FUNCION_ID = $xfuncion_id;    // Funcion del modelado de procesos 
                $nuevoregBitacora->TRX_ID     = $xtrx_id;        // Actividad del modelado de procesos
                $nuevoregBitacora->FOLIO      = $id;             // Folio    
                $nuevoregBitacora->NO_VECES   = 1;               // Numero de veces            
                $nuevoregBitacora->IP         = $ip;             // IP
                $nuevoregBitacora->LOGIN      = $nombre;         // Usuario 

                $nuevoregBitacora->save();
                if($nuevoregBitacora->save() == true)
                    toastr()->success('Trx de modificacion de responsable registrada en Bitacora.','¡Ok!',['positionClass' => 'toast-bottom-right']);
                else
                    toastr()->error('Error en trx de modificacion de responsable. Por favor volver a interlo.','Ups!',['positionClass' => 'toast-bottom-right']);
            }else{                   
                //*********** Obtine el no. de veces *****************************
                $xno_veces = regBitacoraModel::where(['PERIODO_ID' => $xperiodo_id,'PROGRAMA_ID' => $xprograma_id,'MES_ID' => $xmes_id, 
                                                      'PROCESO_ID' => $xproceso_id,'FUNCION_ID'  => $xfuncion_id, 'TRX_ID' => $xtrx_id, 'FOLIO' => $id])
                             ->max('NO_VECES');
                $xno_veces = $xno_veces+1;                        
                //*********** Termina de obtener el no de veces *****************************         
                $regbitacora = regBitacoraModel::select('NO_VECES','IP_M','LOGIN_M','FECHA_M')
                               ->where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 
                                        'MES_ID' => $xmes_id, 'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 
                                        'TRX_ID' => $xtrx_id, 'FOLIO' => $id])
                               ->update([
                                         'NO_VECES' => $regbitacora->NO_VECES = $xno_veces,
                                         'IP_M' => $regbitacora->IP           = $ip,
                                         'LOGIN_M' => $regbitacora->LOGIN_M   = $nombre,
                                         'FECHA_M' => $regbitacora->FECHA_M   = date('Y/m/d')  //date('d/m/Y')
                                        ]);
                toastr()->success('Trx de modificar responsable actualizada en Bitacora.','¡Ok!',['positionClass' => 'toast-bottom-right']);
            }   /************ Bitacora termina *************************************/                     
        }       /************ Actualizar *******************************************/
        return redirect()->route('verdirdhs');
    }


    public function actionBorrarDirDhs($id){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id'); 
        $depen_id     = session()->get('depen_id');               

        /************ Elimina la IAP **************************************/
        $regdirdhs = regDirdhsModel::where('FOLIO',$id);
        if($regdirdhs->count() <= 0)
            toastr()->error('No existe Responsable.','¡Por favor volver a intentar!',['positionClass' => 'toast-bottom-right']);
        else{        
            $regdirdhs->delete();
            toastr()->success('Responsable eliminado.','¡Ok!',['positionClass' => 'toast-bottom-right']);

            //echo 'Ya entre a borrar registro..........';
            /************ Bitacora inicia *************************************/ 
            setlocale(LC_TIME, "spanish");        
            $xip          = session()->get('ip');
            $xperiodo_id  = (int)date('Y');
            $xprograma_id = 1;
            $xmes_id      = (int)date('m');
            $xproceso_id  =         3;
            $xfuncion_id  =      3005;
            $xtrx_id      =        19;     // Baja 
            $regbitacora = regBitacoraModel::select('PERIODO_ID','MES_ID','PROCESO_ID','FUNCION_ID','TRX_ID','FOLIO','NO_VECES',
                                                    'FECHA_REG', 'IP', 'LOGIN', 'FECHA_M', 'IP_M', 'LOGIN_M')
                           ->where(['PERIODO_ID' => $xperiodo_id,'PROGRAMA_ID' => $xprograma_id,'MES_ID' => $xmes_id, 
                                    'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id,'FOLIO' => $id])
                           ->get();
            if($regbitacora->count() <= 0){              // Alta
                $nuevoregBitacora = new regBitacoraModel();              
                $nuevoregBitacora->PERIODO_ID = $xperiodo_id;    // Año de transaccion 
                $nuevoregBitacora->PROGRAMA_ID= $xprograma_id;   // Proyecto JAPEM 
                $nuevoregBitacora->MES_ID     = $xmes_id;        // Mes de transaccion
                $nuevoregBitacora->PROCESO_ID = $xproceso_id;    // Proceso de apoyo
                $nuevoregBitacora->FUNCION_ID = $xfuncion_id;    // Funcion del modelado de procesos 
                $nuevoregBitacora->TRX_ID     = $xtrx_id;        // Actividad del modelado de procesos
                $nuevoregBitacora->FOLIO      = $id;             // Folio    
                $nuevoregBitacora->NO_VECES   = 1;               // Numero de veces            
                $nuevoregBitacora->IP         = $ip;             // IP
                $nuevoregBitacora->LOGIN      = $nombre;         // Usuario 

                $nuevoregBitacora->save();
                if($nuevoregBitacora->save() == true)
                    toastr()->success('Trx de eliminar responsable registrada en Bitacora.','¡Ok!',['positionClass' => 'toast-bottom-right']);
                else
                    toastr()->error('Error de trx de eliminar responsable en bitacora. Por favor volver a interlo.','Ups!',['positionClass' => 'toast-bottom-right']);
            }else{                   
                //*********** Obtine el no. de veces *****************************
                $xno_veces = regBitacoraModel::where(['PERIODO_ID' => $xperiodo_id,'PROGRAMA_ID' => $xprograma_id,'MES_ID' => $xmes_id, 
                                                      'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id,'FOLIO' => $id])
                             ->max('NO_VECES');
                $xno_veces = $xno_veces+1;                        
                //*********** Termina de obtener el no de veces *****************************         
                $regbitacora = regBitacoraModel::select('NO_VECES','IP_M','LOGIN_M','FECHA_M')
                               ->where(['PERIODO_ID' => $xperiodo_id,'PROGRAMA_ID' => $xprograma_id,'MES_ID' => $xmes_id,
                                        'PROCESO_ID' => $xproceso_id,'FUNCION_ID'  => $xfuncion_id, 'TRX_ID' => $xtrx_id,'FOLIO' => $id])
                               ->update([
                                         'NO_VECES' => $regbitacora->NO_VECES = $xno_veces,
                                         'IP_M'     => $regbitacora->IP       = $ip,
                                         'LOGIN_M'  => $regbitacora->LOGIN_M  = $nombre,
                                         'FECHA_M'  => $regbitacora->FECHA_M  = date('Y/m/d')  //date('d/m/Y')
                                        ]);
                toastr()->success('Trx de eliminar responsable actualizada en Bitacora.','¡Ok!',['positionClass' => 'toast-bottom-right']);
            }   /************ Bitacora termina *************************************/                 
        }       /************* Termina de eliminar  la IAP **********************************/
        return redirect()->route('verdirdhs');
    }    

    // exportar a formato excel
    public function actionExportDirdhsExcel(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');  
        $depen_id     = session()->get('depen_id');              
        
        /************ Bitacora inicia *************************************/ 
        setlocale(LC_TIME, "spanish");        
        $xip          = session()->get('ip');
        $xperiodo_id  = (int)date('Y');
        $xprograma_id = 1;
        $xmes_id      = (int)date('m');
        $xproceso_id  =         3;
        $xfuncion_id  =      3005;
        $xtrx_id      =        20;            // Exportar a formato Excel
        $id           =         0;
        $regbitacora = regBitacoraModel::select('PERIODO_ID',  'MES_ID', 'PROCESO_ID', 'FUNCION_ID', 
                                                'TRX_ID', 'FOLIO', 'NO_VECES', 'FECHA_REG', 'IP', 'LOGIN', 'FECHA_M', 
                                                'IP_M', 'LOGIN_M')
                        ->where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 'MES_ID' => $xmes_id, 
                                 'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id, 
                                 'FOLIO' => $id])
                        ->get();
        if($regbitacora->count() <= 0){              // Alta
            $nuevoregBitacora = new regBitacoraModel();              
            $nuevoregBitacora->PERIODO_ID = $xperiodo_id;    // Año de transaccion 
            $nuevoregBitacora->PROGRAMA_ID= $xprograma_id;   // Proyecto JAPEM 
            $nuevoregBitacora->MES_ID     = $xmes_id;        // Mes de transaccion
            $nuevoregBitacora->PROCESO_ID = $xproceso_id;    // Proceso de apoyo
            $nuevoregBitacora->FUNCION_ID = $xfuncion_id;    // Funcion del modelado de procesos 
            $nuevoregBitacora->TRX_ID     = $xtrx_id;        // Actividad del modelado de procesos
            $nuevoregBitacora->FOLIO      = $id;             // Folio    
            $nuevoregBitacora->NO_VECES   = 1;               // Numero de veces            
            $nuevoregBitacora->IP         = $ip;             // IP
            $nuevoregBitacora->LOGIN      = $nombre;         // Usuario 

            $nuevoregBitacora->save();
            if($nuevoregBitacora->save() == true)
               toastr()->success('Bitacora dada de alta correctamente.','¡Ok!',['positionClass' => 'toast-bottom-right']);
            else
               toastr()->error('Error inesperado al dar de alta la bitacora. Por favor volver a interlo.','Ups!',['positionClass' => 'toast-bottom-right']);
        }else{                   
            //*********** Obtine el no. de veces *****************************
            $xno_veces = regBitacoraModel::where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id,
                                                  'MES_ID' => $xmes_id, 'PROCESO_ID' => $xproceso_id, 
                                                  'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id, 'FOLIO' => $id])
                        ->max('NO_VECES');
            $xno_veces = $xno_veces+1;                        
            //*********** Termina de obtener el no de veces *****************************                
            $regbitacora = regBitacoraModel::select('NO_VECES','IP_M','LOGIN_M','FECHA_M')
                           ->where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 'MES_ID' => $xmes_id, 
                                    'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id, 
                                    'FOLIO' => $id])
                           ->update([
                                     'NO_VECES' => $regbitacora->NO_VECES = $xno_veces,
                                     'IP_M' => $regbitacora->IP           = $ip,
                                     'LOGIN_M' => $regbitacora->LOGIN_M   = $nombre,
                                     'FECHA_M' => $regbitacora->FECHA_M   = date('Y/m/d')  //date('d/m/Y')
                                    ]);
            toastr()->success('Bitacora actualizada.','¡Ok!',['positionClass' => 'toast-bottom-right']);
        }   /************ Bitacora termina *************************************/  
        return Excel::download(new ExportDirdhsExcel, 'Directorio_dhs_'.date('d-m-Y').'.xlsx');
    }

    // exportar a formato PDF
    public function actionExportDirdhsPdf(){
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);

        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');
        $arbol_id     = session()->get('arbol_id');  
        $depen_id     = session()->get('depen_id');              

        /************ Bitacora inicia *************************************/ 
        setlocale(LC_TIME, "spanish");        
        $xip          = session()->get('ip');
        $xperiodo_id  = (int)date('Y');
        $xprograma_id = 1;
        $xmes_id      = (int)date('m');
        $xproceso_id  =         3;
        $xfuncion_id  =      3005;
        $xtrx_id      =        21;       //Exportar a formato PDF
        $id           =         0;
        $regbitacora = regBitacoraModel::select('PERIODO_ID',  'MES_ID', 'PROCESO_ID', 'FUNCION_ID', 
                       'TRX_ID', 'FOLIO', 'NO_VECES', 'FECHA_REG', 'IP', 'LOGIN', 'FECHA_M', 'IP_M', 'LOGIN_M')
                       ->where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 'MES_ID' => $xmes_id, 
                                'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id, 
                                'FOLIO' => $id])
                       ->get();
        if($regbitacora->count() <= 0){              // Alta
            $nuevoregBitacora = new regBitacoraModel();              
            $nuevoregBitacora->PERIODO_ID = $xperiodo_id;    // Año de transaccion 
            $nuevoregBitacora->PROGRAMA_ID= $xprograma_id;   // Proyecto JAPEM 
            $nuevoregBitacora->MES_ID     = $xmes_id;        // Mes de transaccion
            $nuevoregBitacora->PROCESO_ID = $xproceso_id;    // Proceso de apoyo
            $nuevoregBitacora->FUNCION_ID = $xfuncion_id;    // Funcion del modelado de procesos 
            $nuevoregBitacora->TRX_ID     = $xtrx_id;        // Actividad del modelado de procesos
            $nuevoregBitacora->FOLIO      = $id;             // Folio    
            $nuevoregBitacora->NO_VECES   = 1;               // Numero de veces            
            $nuevoregBitacora->IP         = $ip;             // IP
            $nuevoregBitacora->LOGIN      = $nombre;         // Usuario 

            $nuevoregBitacora->save();
            if($nuevoregBitacora->save() == true)
               toastr()->success('Bitacora dada de alta correctamente.','¡Ok!',['positionClass' => 'toast-bottom-right']);
            else
               toastr()->error('Error inesperado al dar de alta la bitacora. Por favor volver a interlo.','Ups!',['positionClass' => 'toast-bottom-right']);
        }else{                   
            //*********** Obtine el no. de veces *****************************
            $xno_veces = regBitacoraModel::where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 
                         'MES_ID' => $xmes_id, 'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 
                         'TRX_ID' => $xtrx_id, 'FOLIO' => $id])
                        ->max('NO_VECES');
            $xno_veces = $xno_veces+1;                        
            //*********** Termina de obtener el no de veces *****************************         
            $regbitacora = regBitacoraModel::select('NO_VECES','IP_M','LOGIN_M','FECHA_M')
                           ->where(['PERIODO_ID' => $xperiodo_id, 'PROGRAMA_ID' => $xprograma_id, 'MES_ID' => $xmes_id, 
                                    'PROCESO_ID' => $xproceso_id, 'FUNCION_ID' => $xfuncion_id, 'TRX_ID' => $xtrx_id, 
                                    'FOLIO' => $id])
                           ->update([
                                     'NO_VECES' => $regbitacora->NO_VECES = $xno_veces,
                                     'IP_M' => $regbitacora->IP           = $ip,
                                     'LOGIN_M' => $regbitacora->LOGIN_M   = $nombre,
                                     'FECHA_M' => $regbitacora->FECHA_M   = date('Y/m/d')  //date('d/m/Y')
                                    ]);
            toastr()->success('Bitacora actualizada.','¡Ok!',['positionClass' => 'toast-bottom-right']);
        }   /************ Bitacora termina *************************************/ 

        $regentidades = regEntidadesModel::select('ENTIDADFEDERATIVA_ID','ENTIDADFEDERATIVA_DESC')     
                                           ->get();
        $regmunicipio = regMunicipioModel::select('ENTIDADFEDERATIVAID', 'MUNICIPIOID', 'MUNICIPIONOMBRE')
                                           ->wherein('ENTIDADFEDERATIVAID',[9, 11, 15, 22])
                                           ->get(); 
        $regperiodos  = regPeriodosModel::select('PERIODO_ID','PERIODO_DESC')
                        ->get();  
        $regmeses     = regMesesModel::select('MES_ID','MES_DESC')->get();      
        $regdias      = regDiasModel::select('DIA_ID','DIA_DESC')->get();                          
        $regdirdhs = regRegionesModel::join('PE_CAT_RUBROS','PE_CAT_RUBROS.RUBRO_ID', '=', 
                                                               'SIEVAD_DIRECTORIO_DHS.RUBRO_ID')
                        ->select('SIEVAD_DIRECTORIO_DHS.SERVICIO_ID','SIEVAD_DIRECTORIO_DHS.SERVICIO_DESC',
                                 'PE_CAT_RUBROS.RUBRO_DESC')
                        ->orderBy('SIEVAD_DIRECTORIO_DHS.SERVICIO_DESC','ASC')
                        ->orderBy('PE_CAT_RUBROS.RUBRO_DESC','ASC')
                        ->get();                                                                                    
        $regosc       = regOscModel::select('OSC_ID', 'OSC_DESC','OSC_STATUS')
                        ->get();                                                        
        $regDhs    = regDhsModel::select('PERIODO_ID','FOLIO','OSC_ID','PRIMER_APELLIDO',
                        'SEGUNDO_APELLIDO','NOMBRES','NOMBRE_COMPLETO','CURP','FECHA_NACIMIENTO',
                        'FECHA_NACIMIENTO2','SEXO',
                        'RFC','ID_OFICIAL','DOMICILIO','COLONIA','CP','ENTRE_CALLE','Y_CALLE','OTRA_REFERENCIA',
                        'TELEFONO','CELULAR','E_MAIL','ENTIDAD_NAC_ID','ENTIDAD_FED_ID','MUNICIPIO_ID',
                        'LOCALIDAD_ID','LOCALIDAD','EDO_CIVIL_ID','GRADO_ESTUDIOS_ID','FECHA_INGRESO','FECHA_INGRESO2',
                        'MOTIVO_ING','INTEG_FAM','SERVICIO_ID','CUOTA_RECUP','QUIEN_CANALIZO',
                        'PERIODO_ID1','MES_ID1','DIA_ID1','PERIODO_ID2','MES_ID2','DIA_ID2',
                        'STATUS_1','STATUS_2','FECHA_REG','IP','LOGIN','FECHA_M','IP_M','LOGIN_M')
                        ->orderBy('PERIODO_ID','asc')
                        ->orderBy('OSC_ID','asc')
                        ->get();                               
        if($regDhs->count() <= 0){
            toastr()->error('No existen beneficiarios.','Uppss!',['positionClass' => 'toast-bottom-right']);
            return redirect()->route('verDhs');
        }
        $pdf = PDF::loadView('sicinar.pdf.DhsPdf', compact('nombre','usuario','regentidades','regmunicipio','regosc','regperiodos','regDhs','regdirdhs','regmeses','regdias'));
        //$options = new Options();
        //$options->set('defaultFont', 'Courier');
        //$pdf->set_option('defaultFont', 'Courier');
        $pdf->setPaper('A4', 'landscape');      
        //$pdf->set('defaultFont', 'Courier');          
        //$pdf->setPaper('A4','portrait');

        // Output the generated PDF to Browser
        return $pdf->stream('DhsBeneficiarios');
    }

    // Gráfica por estado
    public function actionDhsxEdo(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');               

        $regtotxedo=regDhsModel::join('PE_CAT_ENTIDADES_FED','PE_CAT_ENTIDADES_FED.ENTIDADFEDERATIVA_ID','=',
                                                                'PE_METADATO_Dhs.ENTIDAD_FED_ID')
                    ->selectRaw('COUNT(*) AS TOTALXEDO')
                    ->get();
        $regDhs =regDhsModel::join('PE_CAT_ENTIDADES_FED','PE_CAT_ENTIDADES_FED.ENTIDADFEDERATIVA_ID','=',
                                                                'PE_METADATO_Dhs.ENTIDAD_FED_ID')
                      ->selectRaw('PE_METADATO_Dhs.ENTIDAD_FED_ID, 
                                   PE_CAT_ENTIDADES_FED.ENTIDADFEDERATIVA_DESC AS ESTADO, COUNT(*) AS TOTAL')
                      ->groupBy('PE_METADATO_Dhs.ENTIDAD_FED_ID','PE_CAT_ENTIDADES_FED.ENTIDADFEDERATIVA_DESC')
                      ->orderBy('PE_METADATO_Dhs.ENTIDAD_FED_ID','asc')
                      ->get();
        //dd($procesos);
        return view('sicinar.numeralia.Dhsxedo',compact('regDhs','regtotxedo','nombre','usuario','rango'));
    }

    
    // Gráfica por municipio
    public function actionDhsxMpio(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip');  
        $arbol_id     = session()->get('arbol_id');  
        $depen_id     = session()->get('depen_id');                    

        $regtotxmpio=regDhsModel::join('PE_CAT_MUNICIPIOS_SEDESEM',
                                     [['PE_CAT_MUNICIPIOS_SEDESEM.ENTIDADFEDERATIVAID','=',15],
                                      ['PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIOID','=','PE_METADATO_Dhs.MUNICIPIO_ID']
                                      ])
                         ->selectRaw('COUNT(*) AS TOTALXMPIO')
                               ->get();
        $regDhs=regDhsModel::join('PE_CAT_MUNICIPIOS_SEDESEM',
                                      [['PE_CAT_MUNICIPIOS_SEDESEM.ENTIDADFEDERATIVAID','=',15],
                                       ['PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIOID','=','PE_METADATO_Dhs.MUNICIPIO_ID']
                                      ])
                      ->selectRaw('PE_METADATO_Dhs.MUNICIPIO_ID, PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIONOMBRE AS MUNICIPIO,COUNT(*) AS TOTAL')
                        ->groupBy('PE_METADATO_Dhs.MUNICIPIO_ID', 'PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIONOMBRE')
                        ->orderBy('PE_METADATO_Dhs.MUNICIPIO_ID','asc')
                        ->get();
        //dd($procesos);
        return view('sicinar.numeralia.Dhsxmpio',compact('regDhs','regtotxmpio','nombre','usuario','rango'));
    }

    // Gráfica por Servicio
    public function actionDhsxServicio(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');               

        $regtotales=regDhsModel::join('SIEVAD_DIRECTORIO_DHS','SIEVAD_DIRECTORIO_DHS.SERVICIO_ID',  '=',
                                                            'PE_METADATO_Dhs.SERVICIO_ID')
                    ->selectRaw('COUNT(*) AS TOTAL')
                    ->get();
        $regDhs =regDhsModel::join('SIEVAD_DIRECTORIO_DHS','SIEVAD_DIRECTORIO_DHS.SERVICIO_ID','=',
                                                            'PE_METADATO_Dhs.SERVICIO_ID')
                    ->selectRaw('PE_METADATO_Dhs.SERVICIO_ID, 
                                 SIEVAD_DIRECTORIO_DHS.SERVICIO_DESC AS SERVICIO, COUNT(*) AS TOTAL')
                    ->groupBy('PE_METADATO_Dhs.SERVICIO_ID','SIEVAD_DIRECTORIO_DHS.SERVICIO_DESC')
                    ->orderBy('PE_METADATO_Dhs.SERVICIO_ID','asc')
                    ->get();
        //dd($regDhs);
        return view('sicinar.numeralia.Dhsxservicio',compact('nombre','usuario','rango','regDhs','regtotales'));
    }

    // Gráfica x sexo
    public function actionDhsxSexo(){
        $nombre       = session()->get('userlog');
        $pass         = session()->get('passlog');
        if($nombre == NULL AND $pass == NULL){
            return view('sicinar.login.expirada');
        }
        $usuario      = session()->get('usuario');
        $rango        = session()->get('rango');
        $ip           = session()->get('ip'); 
        $arbol_id     = session()->get('arbol_id');  
        $depen_id     = session()->get('depen_id');                     

        // http://www.chartjs.org/docs/#bar-chart
        $regtotal =regDhsModel::selectRaw('COUNT(*) AS TOTAL')
                   ->get();
        $regDhs=regDhsModel::selectRaw('SEXO, COUNT(*) AS TOTAL')
                   ->groupBy('SEXO')
                   ->orderBy('SEXO','asc')
                   ->get();
        //dd($procesos);
        return view('sicinar.numeralia.Dhsxsexo',compact('regtotal','regDhs','nombre','usuario','rango'));
    }   

    // Gráfica x edad
    public function actionDhsxedad(){
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
        $regtotal =regDhsModel::selectRaw('COUNT(*) AS TOTAL')
                   ->get();
        //$regDhs=regDhsModel::selectRaw('EXTRACT(YEAR FROM SYSDATE) - TO_NUMBER(SUBSTR(FECHA_NACIMIENTO2,7,4)) EDAD,
        //                                      COUNT(1) AS TOTAL')
        //           ->groupBy('EXTRACT(YEAR FROM SYSDATE) - TO_NUMBER(SUBSTR(FECHA_NACIMIENTO2,7,4))')
        $regDhs=regDhsModel::select('PERIODO_ID2')
                   ->selectRaw('EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2 EDAD,
                                COUNT(1) AS TOTAL')
                   ->groupBy('PERIODO_ID2')                   
                   ->orderBy('TOTAL','asc')
                   ->get();
        //dd($procesos);
        return view('sicinar.numeralia.Dhsxedad',compact('regtotal','regDhs','nombre','usuario','rango'));
    }   

    // Gráfica x rango de edad
    public function actionDhsxRangoedad(){
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
        $regtotal =regDhsModel::selectRaw('COUNT(*) AS TOTAL')
                   ->get();
        $regDhs=regDhsModel::select('PERIODO_ID')
                   ->selectRaw('SUM(CASE WHEN (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) <= 5                               THEN 1 ELSE 0 END) EMENOSDE5')  
                   ->selectRaw('SUM(CASE WHEN (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) >= 6 AND (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) <=10 THEN 1 ELSE 0 END) E06A10')
                   ->selectRaw('SUM(CASE WHEN (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) >=11 AND (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) <=17 THEN 1 ELSE 0 END) E11A17')
                   ->selectRaw('SUM(CASE WHEN (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) >=18 AND (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) <=30 THEN 1 ELSE 0 END) E18A30')
                   ->selectRaw('SUM(CASE WHEN (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) >=31 AND (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) <=60 THEN 1 ELSE 0 END) E31A60')
                   ->selectRaw('SUM(CASE WHEN (EXTRACT(YEAR FROM SYSDATE) - PERIODO_ID2) >=61                                                    THEN 1 ELSE 0 END) E61YMAS')
                    ->selectRaw('COUNT(*) AS TOTAL')
                    ->groupBy('PERIODO_ID')
                    ->orderBy('PERIODO_ID','asc')
                    ->get();
        //dd($procesos);
        return view('sicinar.numeralia.Dhsxrangoedad',compact('regtotal','regDhs','nombre','usuario','rango'));
    }        

}
