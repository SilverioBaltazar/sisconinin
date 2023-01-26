<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\regProgdAnualModel;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExportMensualdet implements FromCollection, /*FromQuery,*/ WithHeadings
{

    //use Exportable;

    //********** Parámetros de filtro del query *******************//
    private $periodo_id;
    private $mes_id;
    private $depen_id;
    private $taccion_id;
    private $control;
 
    public function __construct($periodo_id, $mes_id, $depen_id, $taccion_id, $control)
    {
        //$this->regprogdanual= $regprogdanual;
        $this->periodo_id   = $periodo_id;
        $this->mes_id       = $mes_id;
        $this->depen_id     = $depen_id;
        $this->taccion_id   = $taccion_id;
        $this->control      = $control;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        $periodo_id = $this->periodo_id;
        $mes_id     = $this->mes_id;
        $depen_id   = $this->depen_id;
        $taccion_id = $this->taccion_id;
        $control    = $this->control;
        if( $control == 'S' ){   
            switch($mes_id){
                case '1':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',           
    		                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','JUSTIFICACIÓN','ENE_ACUM_SMF'];            
                    break;
                          
                case '2':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',           
    		                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','JUSTIFICACIÓN','FEB_ACUM_SMF'];              
                    break;

                case '3':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',           
    		                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','JUSTIFICACIÓN','MAR_ACUM_SMF'];              
                    break;

                case '4':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',           
    		                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','JUSTIFICACIÓN','ABR_ACUM_SMF'];              
                    break;

                case '5':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',           
    		                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','JUSTIFICACIÓN','MAY_ACUM_SMF'];              
                    break;

                case '6':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',           
    		                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUSTIFICACIÓN','JUN_SMF'];              
                    break;

                case '7':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',           
    		                'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUSTIFICACIÓN','JUL_SMF']; 
                    break;  
                case '8':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',           
    		                'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','JUSTIFICACIÓN','AGO_SMF'];              
                    break; 
                case '9':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',           
    		                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','JUSTIFICACIÓN','SEP_SMF'];              
                    break;                                             
                case '10':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',           
    		                'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','JUSTIFICACIÓN','OCT_SMF']; 
                    break;  
                case '11':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'NOV_PROG'       ,'NOV_REAL'       ,'NOV_%'     ,'NOV_SMF',           
    		                'NOV_ACUM_PROG'  ,'NOV_ACUM_REAL'  ,'NOV_ACUM_%','JUSTIFICACIÓN','NOV_SMF']; 
                    break; 
                case '12':
    		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
    		                'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
    		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
    		                'DIC_PROG'       ,'DIC_REAL'       ,'DIC_%'     ,'DIC_SMF',           
    		                'DIC_ACUM_PROG'  ,'DIC_ACUM_REAL'  ,'DIC_ACUM_%','JUSTIFICACIÓN','DIC_SMF'];  
                    break;
            }   // switch 
        }else{
            switch($mes_id){
                case '1':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',           
                        'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF'];            
                    break;
                          
                case '2':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',           
                        'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF'];              
                    break;

                case '3':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',           
                        'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF'];              
                    break;

                case '4':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',           
                        'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF'];              
                    break;

                case '5':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',           
                        'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF'];              
                    break;

                case '6':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',           
                        'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_SMF'];              
                    break;

                case '7':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',           
                        'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_SMF'];              
                    break;  

                case '8':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',           
                        'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_SMF'];              
                    break; 

                case '9':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',           
                        'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_SMF'];              
                    break;                                             

                case '10':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',           
                        'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_SMF'];              
                    break;  

                case '11':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'NOV_PROG'       ,'NOV_REAL'       ,'NOV_%'     ,'NOV_SMF',           
                        'NOV_ACUM_PROG'  ,'NOV_ACUM_REAL'  ,'NOV_ACUM_%','NOV_SMF'];              
                    break; 

                case '12':
                return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
                        'FOLIO','NP','ACCION_META','UNIDAD_MEDIDA',
                        'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
                        'DIC_PROG'       ,'DIC_REAL'       ,'DIC_%'     ,'DIC_SMF',           
                        'DIC_ACUM_PROG'  ,'DIC_ACUM_REAL'  ,'DIC_ACUM_%','DIC_SMF'];              
                    break;
            }   // switch           
        }       // if ($control ....) 
    }

    public function collection()
    { 
        $periodo_id = $this->periodo_id;
        $mes_id     = $this->mes_id;
        $depen_id   = $this->depen_id;
        $taccion_id = $this->taccion_id;
        $control    = $this->control;

        if( $control == 'S' ){           
            switch($mes_id){
                case '1':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_01', 
                                            'SIEVAD_DPA.MESC_01',
                                            'SIEVAD_DPA.MES_P01',
                                            'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

                                            'SIEVAD_DPA.ACUMP_01', 
                                            'SIEVAD_DPA.ACUMC_01',
                                            'SIEVAD_DPA.ACUM_P01',
                                            'SIEVAD_DPA.OBS_01'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_01")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_01', 
    	                                        'SIEVAD_DPA.MESC_01',
    	                                        'SIEVAD_DPA.MES_P01',
    	                                        'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

    	                                        'SIEVAD_DPA.ACUMP_01', 
    	                                        'SIEVAD_DPA.ACUMC_01',
    	                                        'SIEVAD_DPA.ACUM_P01',
                                              'SIEVAD_DPA.OBS_01'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_01")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
    							 	                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_01', 
    		                                        'SIEVAD_DPA.MESC_01',
    		                                        'SIEVAD_DPA.MES_P01',
    		                                        'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

    		                                        'SIEVAD_DPA.ACUMP_01', 
    		                                        'SIEVAD_DPA.ACUMC_01',
    		                                        'SIEVAD_DPA.ACUM_P01',
                                                'SIEVAD_DPA.OBS_01'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_01")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    			                                        'SIEVAD_DPA.MESP_01', 
    			                                        'SIEVAD_DPA.MESC_01',
    			                                        'SIEVAD_DPA.MES_P01',
    			                                        'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

    			                                        'SIEVAD_DPA.ACUMP_01', 
    			                                        'SIEVAD_DPA.ACUMC_01',
    			                                        'SIEVAD_DPA.ACUM_P01',
                                                  'SIEVAD_DPA.OBS_01'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_01")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF          
                    break;
                          
                case '2':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
    								 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                            'SIEVAD_DPA.MESP_02', 
                                            'SIEVAD_DPA.MESC_02',
                                            'SIEVAD_DPA.MES_P02',
                                            'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

                                            'SIEVAD_DPA.ACUMP_02', 
                                            'SIEVAD_DPA.ACUMC_02',
                                            'SIEVAD_DPA.ACUM_P02',
                                            'SIEVAD_DPA.OBS_02'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_02")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_02') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    	                                        'SIEVAD_DPA.MESP_02', 
    	                                        'SIEVAD_DPA.MESC_02',
    	                                        'SIEVAD_DPA.MES_P02',
    	                                        'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

    	                                        'SIEVAD_DPA.ACUMP_02', 
    	                                        'SIEVAD_DPA.ACUMC_02',
    	                                        'SIEVAD_DPA.ACUM_P02',
                                              'SIEVAD_DPA.OBS_02'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_02")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_02') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','='            ,'SIEVAD_DPA.FOLIO')
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    		                                        'SIEVAD_DPA.MESP_02', 
    		                                        'SIEVAD_DPA.MESC_02',
    		                                        'SIEVAD_DPA.MES_P02',
    		                                        'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

    		                                        'SIEVAD_DPA.ACUMP_02', 
    		                                        'SIEVAD_DPA.ACUMC_02',
    		                                        'SIEVAD_DPA.ACUM_P02',
                                                'SIEVAD_DPA.OBS_02'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_02")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_02') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    			                                        'SIEVAD_DPA.MESP_02', 
    			                                        'SIEVAD_DPA.MESC_02',
    			                                        'SIEVAD_DPA.MES_P02',
    			                                        'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

    			                                        'SIEVAD_DPA.ACUMP_02', 
    			                                        'SIEVAD_DPA.ACUMC_02',
    			                                        'SIEVAD_DPA.ACUM_P02',
                                                  'SIEVAD_DPA.OBS_02'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_02")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF             
                    break;

                case '3':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_03', 
                                            'SIEVAD_DPA.MESC_03',
                                            'SIEVAD_DPA.MES_P03',
                                            'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

                                            'SIEVAD_DPA.ACUMP_03', 
                                            'SIEVAD_DPA.ACUMC_03',
                                            'SIEVAD_DPA.ACUM_P03',
                                            'SIEVAD_DPA.OBS_03'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_03")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

      	                                        'SIEVAD_DPA.MESP_03', 
      	                                        'SIEVAD_DPA.MESC_03',
      	                                        'SIEVAD_DPA.MES_P03',
      	                                        'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

      	                                        'SIEVAD_DPA.ACUMP_03', 
      	                                        'SIEVAD_DPA.ACUMC_03',
      	                                        'SIEVAD_DPA.ACUM_P03',
                                                'SIEVAD_DPA.OBS_03'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_03")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    		                                        'SIEVAD_DPA.MESP_03', 
    		                                        'SIEVAD_DPA.MESC_03',
    		                                        'SIEVAD_DPA.MES_P03',
    		                                        'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

    		                                        'SIEVAD_DPA.ACUMP_03', 
    		                                        'SIEVAD_DPA.ACUMC_03',
    		                                        'SIEVAD_DPA.ACUM_P03',
                                                'SIEVAD_DPA.OBS_03'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_03")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
    							                	 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    			                                        'SIEVAD_DPA.MESP_03', 
    			                                        'SIEVAD_DPA.MESC_03',
    			                                        'SIEVAD_DPA.MES_P03',
    			                                        'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

    			                                        'SIEVAD_DPA.ACUMP_03', 
    			                                        'SIEVAD_DPA.ACUMC_03',
    			                                        'SIEVAD_DPA.ACUM_P03',
                                                  'SIEVAD_DPA.OBS_03'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_03")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                     
                    break;

                case '4':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                            'SIEVAD_DPA.MESP_04', 
                                            'SIEVAD_DPA.MESC_04',
                                            'SIEVAD_DPA.MES_P04',
                                            'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

                                            'SIEVAD_DPA.ACUMP_04', 
                                            'SIEVAD_DPA.ACUMC_04',
                                            'SIEVAD_DPA.ACUM_P04',
                                            'SIEVAD_DPA.OBS_04'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_04")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    	                                        'SIEVAD_DPA.MESP_04', 
    	                                        'SIEVAD_DPA.MESC_04',
    	                                        'SIEVAD_DPA.MES_P04',
    	                                        'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

    	                                        'SIEVAD_DPA.ACUMP_04', 
    	                                        'SIEVAD_DPA.ACUMC_04',
    	                                        'SIEVAD_DPA.ACUM_P04',
                                              'SIEVAD_DPA.OBS_04'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_04")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
    								                 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    		                                        'SIEVAD_DPA.MESP_04', 
    		                                        'SIEVAD_DPA.MESC_04',
    		                                        'SIEVAD_DPA.MES_P04',
    		                                        'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

    		                                        'SIEVAD_DPA.ACUMP_04', 
    		                                        'SIEVAD_DPA.ACUMC_04',
    		                                        'SIEVAD_DPA.ACUM_P04',
                                                'SIEVAD_DPA.OBS_04'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_04")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
    							                	 ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 

    			                                        'SIEVAD_DPA.MESP_04', 
    			                                        'SIEVAD_DPA.MESC_04',
    			                                        'SIEVAD_DPA.MES_P04',
    			                                        'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

    			                                        'SIEVAD_DPA.ACUMP_04', 
    			                                        'SIEVAD_DPA.ACUMC_04',
    			                                        'SIEVAD_DPA.ACUM_P04',
                                                  'SIEVAD_DPA.OBS_04'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_04")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                     
                    break;

                case '5':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_05', 
                                            'SIEVAD_DPA.MESC_05',
                                            'SIEVAD_DPA.MES_P05',
                                            'SIEVAD_DPA.SEMAF_05',

                                            'SIEVAD_DPA.ACUMP_05', 
                                            'SIEVAD_DPA.ACUMC_05',
                                            'SIEVAD_DPA.ACUM_P05',
                                            'SIEVAD_DPA.OBS_05'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_05")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_05', 
    	                                        'SIEVAD_DPA.MESC_05',
    	                                        'SIEVAD_DPA.MES_P05',
    	                                        'SIEVAD_DPA.SEMAF_05',

    	                                        'SIEVAD_DPA.ACUMP_05', 
    	                                        'SIEVAD_DPA.ACUMC_05',
    	                                        'SIEVAD_DPA.ACUM_P05',
                                              'SIEVAD_DPA.OBS_05'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_05")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_05', 
    		                                        'SIEVAD_DPA.MESC_05',
    		                                        'SIEVAD_DPA.MES_P05',
    		                                        'SIEVAD_DPA.SEMAF_05',

    		                                        'SIEVAD_DPA.ACUMP_05', 
    		                                        'SIEVAD_DPA.ACUMC_05',
    		                                        'SIEVAD_DPA.ACUM_P05',
                                                'SIEVAD_DPA.OBS_05'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_05")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_05', 
    			                                        'SIEVAD_DPA.MESC_05',
    			                                        'SIEVAD_DPA.MES_P05',
    			                                        'SIEVAD_DPA.SEMAF_05',

    			                                        'SIEVAD_DPA.ACUMP_05', 
    			                                        'SIEVAD_DPA.ACUMC_05',
    			                                        'SIEVAD_DPA.ACUM_P05',
                                                  'SIEVAD_DPA.OBS_05'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_05")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                     

                    break;                                                                         

                case '6':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_06', 
                                            'SIEVAD_DPA.MESC_06',
                                            'SIEVAD_DPA.MES_P06',
                                            'SIEVAD_DPA.SEMAF_06',

                                            'SIEVAD_DPA.ACUMP_06', 
                                            'SIEVAD_DPA.ACUMC_06',
                                            'SIEVAD_DPA.ACUM_P06',
                                            'SIEVAD_DPA.OBS_06'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_06")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_06', 
    	                                        'SIEVAD_DPA.MESC_06',
    	                                        'SIEVAD_DPA.MES_P06',
    	                                        'SIEVAD_DPA.SEMAF_06',

    	                                        'SIEVAD_DPA.ACUMP_06', 
    	                                        'SIEVAD_DPA.ACUMC_06',
    	                                        'SIEVAD_DPA.ACUM_P06',
                                              'SIEVAD_DPA.OBS_06'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_06")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_06', 
    		                                        'SIEVAD_DPA.MESC_06',
    		                                        'SIEVAD_DPA.MES_P06',
    		                                        'SIEVAD_DPA.SEMAF_06',

    		                                        'SIEVAD_DPA.ACUMP_06', 
    		                                        'SIEVAD_DPA.ACUMC_06',
    		                                        'SIEVAD_DPA.ACUM_P06',
                                                'SIEVAD_DPA.OBS_06'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_06")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_06', 
    			                                        'SIEVAD_DPA.MESC_06',
    			                                        'SIEVAD_DPA.MES_P06',
    			                                        'SIEVAD_DPA.SEMAF_06',

    			                                        'SIEVAD_DPA.ACUMP_06', 
    			                                        'SIEVAD_DPA.ACUMC_06',
    			                                        'SIEVAD_DPA.ACUM_P06',
                                                  'SIEVAD_DPA.OBS_06'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_06")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                
                    break;                                                                         

                case '7':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_07', 
                                            'SIEVAD_DPA.MESC_07',
                                            'SIEVAD_DPA.MES_P07',
                                            'SIEVAD_DPA.SEMAF_07',

                                            'SIEVAD_DPA.ACUMP_07', 
                                            'SIEVAD_DPA.ACUMC_07',
                                            'SIEVAD_DPA.ACUM_P07',
                                            'SIEVAD_DPA.OBS_07'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_07")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_07', 
    	                                        'SIEVAD_DPA.MESC_07',
    	                                        'SIEVAD_DPA.MES_P07',
    	                                        'SIEVAD_DPA.SEMAF_07',

    	                                        'SIEVAD_DPA.ACUMP_07', 
    	                                        'SIEVAD_DPA.ACUMC_07',
    	                                        'SIEVAD_DPA.ACUM_P07',
                                              'SIEVAD_DPA.OBS_07'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_07")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_07', 
    		                                        'SIEVAD_DPA.MESC_07',
    		                                        'SIEVAD_DPA.MES_P07',
    		                                        'SIEVAD_DPA.SEMAF_07',

    		                                        'SIEVAD_DPA.ACUMP_07', 
    		                                        'SIEVAD_DPA.ACUMC_07',
    		                                        'SIEVAD_DPA.ACUM_P07',
                                                'SIEVAD_DPA.OBS_07'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_07")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_07', 
    			                                        'SIEVAD_DPA.MESC_07',
    			                                        'SIEVAD_DPA.MES_P07',
    			                                        'SIEVAD_DPA.SEMAF_07',

    			                                        'SIEVAD_DPA.ACUMP_07', 
    			                                        'SIEVAD_DPA.ACUMC_07',
    			                                        'SIEVAD_DPA.ACUM_P07',
                                                  'SIEVAD_DPA.OBS_07'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_07")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                
                    break; 

                case '8':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_08', 
                                            'SIEVAD_DPA.MESC_08',
                                            'SIEVAD_DPA.MES_P08',
                                            'SIEVAD_DPA.SEMAF_08',

                                            'SIEVAD_DPA.ACUMP_08', 
                                            'SIEVAD_DPA.ACUMC_08',
                                            'SIEVAD_DPA.ACUM_P08',
                                            'SIEVAD_DPA.OBS_08'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_08")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_08', 
    	                                        'SIEVAD_DPA.MESC_08',
    	                                        'SIEVAD_DPA.MES_P08',
    	                                        'SIEVAD_DPA.SEMAF_08',

    	                                        'SIEVAD_DPA.ACUMP_08', 
    	                                        'SIEVAD_DPA.ACUMC_08',
    	                                        'SIEVAD_DPA.ACUM_P08',
                                              'SIEVAD_DPA.OBS_08'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_08")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_08', 
    		                                        'SIEVAD_DPA.MESC_08',
    		                                        'SIEVAD_DPA.MES_P08',
    		                                        'SIEVAD_DPA.SEMAF_08',

    		                                        'SIEVAD_DPA.ACUMP_08', 
    		                                        'SIEVAD_DPA.ACUMC_08',
    		                                        'SIEVAD_DPA.ACUM_P08',
                                                'SIEVAD_DPA.OBS_08'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_08")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_08', 
    			                                        'SIEVAD_DPA.MESC_08',
    			                                        'SIEVAD_DPA.MES_P08',
    			                                        'SIEVAD_DPA.SEMAF_08',

    			                                        'SIEVAD_DPA.ACUMP_08', 
    			                                        'SIEVAD_DPA.ACUMC_08',
    			                                        'SIEVAD_DPA.ACUM_P08',
                                                  'SIEVAD_DPA.OBS_08'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_08")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                

                    break; 

                case '9':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_09', 
                                            'SIEVAD_DPA.MESC_09',
                                            'SIEVAD_DPA.MES_P09',
                                            'SIEVAD_DPA.SEMAF_09',

                                            'SIEVAD_DPA.ACUMP_09', 
                                            'SIEVAD_DPA.ACUMC_09',
                                            'SIEVAD_DPA.ACUM_P09',
                                            'SIEVAD_DPA.OBS_09'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_09")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_09', 
    	                                        'SIEVAD_DPA.MESC_09',
    	                                        'SIEVAD_DPA.MES_P09',
    	                                        'SIEVAD_DPA.SEMAF_09',

    	                                        'SIEVAD_DPA.ACUMP_09', 
    	                                        'SIEVAD_DPA.ACUMC_09',
    	                                        'SIEVAD_DPA.ACUM_P09',
                                              'SIEVAD_DPA.OBS_09'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_09")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_09', 
    		                                        'SIEVAD_DPA.MESC_09',
    		                                        'SIEVAD_DPA.MES_P09',
    		                                        'SIEVAD_DPA.SEMAF_09',

    		                                        'SIEVAD_DPA.ACUMP_09', 
    		                                        'SIEVAD_DPA.ACUMC_09',
    		                                        'SIEVAD_DPA.ACUM_P09',
                                                'SIEVAD_DPA.OBS_09'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_09")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_09', 
    			                                        'SIEVAD_DPA.MESC_09',
    			                                        'SIEVAD_DPA.MES_P09',
    			                                        'SIEVAD_DPA.SEMAF_09',

    			                                        'SIEVAD_DPA.ACUMP_09', 
    			                                        'SIEVAD_DPA.ACUMC_09',
    			                                        'SIEVAD_DPA.ACUM_P09',
                                                  'SIEVAD_DPA.OBS_09'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_09")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                        
                    break;                                             

                case '10':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_10', 
                                            'SIEVAD_DPA.MESC_10',
                                            'SIEVAD_DPA.MES_P10',
                                            'SIEVAD_DPA.SEMAF_10',

                                            'SIEVAD_DPA.ACUMP_10', 
                                            'SIEVAD_DPA.ACUMC_10',
                                            'SIEVAD_DPA.ACUM_P10',
                                            'SIEVAD_DPA.OBS_10'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_10")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_10', 
    	                                        'SIEVAD_DPA.MESC_10',
    	                                        'SIEVAD_DPA.MES_P10',
    	                                        'SIEVAD_DPA.SEMAF_10',

    	                                        'SIEVAD_DPA.ACUMP_10', 
    	                                        'SIEVAD_DPA.ACUMC_10',
    	                                        'SIEVAD_DPA.ACUM_P10',
                                              'SIEVAD_DPA.OBS_10'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_10")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_10', 
    		                                        'SIEVAD_DPA.MESC_10',
    		                                        'SIEVAD_DPA.MES_P10',
    		                                        'SIEVAD_DPA.SEMAF_10',

    		                                        'SIEVAD_DPA.ACUMP_10', 
    		                                        'SIEVAD_DPA.ACUMC_10',
    		                                        'SIEVAD_DPA.ACUM_P10',
                                                'SIEVAD_DPA.OBS_10'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_10")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_10', 
    			                                        'SIEVAD_DPA.MESC_10',
    			                                        'SIEVAD_DPA.MES_P10',
    			                                        'SIEVAD_DPA.SEMAF_10',

    			                                        'SIEVAD_DPA.ACUMP_10', 
    			                                        'SIEVAD_DPA.ACUMC_10',
    			                                        'SIEVAD_DPA.ACUM_P10',
                                                  'SIEVAD_DPA.OBS_10'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_10")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF   
                    break;

                case '11':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_11', 
                                            'SIEVAD_DPA.MESC_11',
                                            'SIEVAD_DPA.MES_P11',
                                            'SIEVAD_DPA.SEMAF_11',

                                            'SIEVAD_DPA.ACUMP_11', 
                                            'SIEVAD_DPA.ACUMC_11',
                                            'SIEVAD_DPA.ACUM_P11',
                                            'SIEVAD_DPA.OBS_11'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_11")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                        'SIEVAD_DPA.MESP_11', 
    	                                        'SIEVAD_DPA.MESC_11',
    	                                        'SIEVAD_DPA.MES_P11',
    	                                        'SIEVAD_DPA.SEMAF_11',

    	                                        'SIEVAD_DPA.ACUMP_11', 
    	                                        'SIEVAD_DPA.ACUMC_11',
    	                                        'SIEVAD_DPA.ACUM_P11',
                                              'SIEVAD_DPA.OBS_11'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_11")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_11', 
    		                                        'SIEVAD_DPA.MESC_11',
    		                                        'SIEVAD_DPA.MES_P11',
    		                                        'SIEVAD_DPA.SEMAF_11',

    		                                        'SIEVAD_DPA.ACUMP_11', 
    		                                        'SIEVAD_DPA.ACUMC_11',
    		                                        'SIEVAD_DPA.ACUM_P11',
                                                'SIEVAD_DPA.OBS_11'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_11")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                        	                                                ,'SIEVAD_DPA.UMED_ID')
            						 
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_11', 
    			                                        'SIEVAD_DPA.MESC_11',
    			                                        'SIEVAD_DPA.MES_P11',
    			                                        'SIEVAD_DPA.SEMAF_11',

    			                                        'SIEVAD_DPA.ACUMP_11', 
    			                                        'SIEVAD_DPA.ACUMC_11',
    			                                        'SIEVAD_DPA.ACUM_P11',
                                                  'SIEVAD_DPA.OBS_11'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_11")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF  
                    break; 

                case '12':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID'     ,'=',$mes_id)
                        			 ->join('SIEVAD_CAT_UMEDIDA'     ,'SIEVAD_CAT_UMEDIDA.UMED_ID'       ,'=','SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID' ,'=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID' ,'=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'      ,'=','SIEVAD_DPA.SEMAFA_01')      
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                 ,'=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_12', 
                                            'SIEVAD_DPA.MESC_12',
                                            'SIEVAD_DPA.MES_P12',
                                            'SIEVAD_DPA.SEMAF_12',

                                            'SIEVAD_DPA.ACUMP_12', 
                                            'SIEVAD_DPA.ACUMC_12',
                                            'SIEVAD_DPA.ACUM_P12',
                                            'SIEVAD_DPA.OBS_12'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_12")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
    	                    return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID','=',$mes_id)
    	                             ->join('SIEVAD_CAT_UMEDIDA'     ,'SIEVAD_CAT_UMEDIDA.UMED_ID'      ,'=','SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01')      
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    	                                          //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    	                                          'SIEVAD_DPA.MESP_12', 
    	                                          'SIEVAD_DPA.MESC_12',
    	                                          'SIEVAD_DPA.MES_P12',
    	                                          'SIEVAD_DPA.SEMAF_12',

    	                                          'SIEVAD_DPA.ACUMP_12', 
    	                                          'SIEVAD_DPA.ACUMC_12',
    	                                          'SIEVAD_DPA.ACUM_P12',
                                                'SIEVAD_DPA.OBS_12'
    	                                       )
    	                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
    	                                              WHEN 1 THEN 'ROJO'
    	                                              WHEN 2 THEN 'NARANJA'
    	                                              WHEN 3 THEN 'AMARILLO'
    	                                              WHEN 4 THEN 'VERDE'                                              
    	                                              WHEN 5 THEN 'MORADO'
    	                                        END AS SMF_12")     
    	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    	                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	                           
    	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    	                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    	                           ->get();                     	
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
    		                    return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID','=',$mes_id)
    		                         ->join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','=','SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    		                                        'SIEVAD_DPA.PERIODO_ID',
    		                                         
    		                                        'SIEVAD_DPA.DEPEN_ID2',
    		                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    		                                        'SIEVAD_DPA.EPPROY_ID',
    		                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    		                                        'SIEVAD_DPA.FOLIO',  
    		                                        'SIEVAD_DPA.PARTIDA',                                          
    		                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    		                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    		                                        'SIEVAD_DPA.TOTP_02',
    		                                        'SIEVAD_DPA.TOTC_02',
    		                                        'SIEVAD_DPA.TOT_P01',
    		                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    		                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    		                                        'SIEVAD_DPA.MESP_12', 
    		                                        'SIEVAD_DPA.MESC_12',
    		                                        'SIEVAD_DPA.MES_P12',
    		                                        'SIEVAD_DPA.SEMAF_12',

    		                                        'SIEVAD_DPA.ACUMP_12', 
    		                                        'SIEVAD_DPA.ACUMC_12',
    		                                        'SIEVAD_DPA.ACUM_P12',
                                                'SIEVAD_DPA.OBS_12'
    		                                       )
    		                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
    		                                              WHEN 1 THEN 'ROJO'
    		                                              WHEN 2 THEN 'NARANJA'
    		                                              WHEN 3 THEN 'AMARILLO'
    		                                              WHEN 4 THEN 'VERDE'                                              
    		                                              WHEN 5 THEN 'MORADO'
    		                                        END AS SMF_12")     
    		                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    		                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
    		                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    		                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    		                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    		                           ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
    			                    return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID','=',$mes_id)
    			                           ->join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','=','SIEVAD_DPA.UMED_ID')
            						             ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
    			                                        'SIEVAD_DPA.PERIODO_ID',
    			                                         
    			                                        'SIEVAD_DPA.DEPEN_ID2',
    			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
    			                                        'SIEVAD_DPA.EPPROY_ID',
    			                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
    			                                        'SIEVAD_DPA.FOLIO',  
    			                                        'SIEVAD_DPA.PARTIDA',                                          
    			                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
    			                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

    			                                        'SIEVAD_DPA.TOTP_02',
    			                                        'SIEVAD_DPA.TOTC_02',
    			                                        'SIEVAD_DPA.TOT_P01',
    			                                        'SIEVAD_CAT_COLORES.COLOR_COLOR', 
    			                                        //'SIEVAD_CAT_COLORES.COLOR_DESC', 

    			                                        'SIEVAD_DPA.MESP_12', 
    			                                        'SIEVAD_DPA.MESC_12',
    			                                        'SIEVAD_DPA.MES_P12',
    			                                        'SIEVAD_DPA.SEMAF_12',

    			                                        'SIEVAD_DPA.ACUMP_12', 
    			                                        'SIEVAD_DPA.ACUMC_12',
    			                                        'SIEVAD_DPA.ACUM_P12',
                                                  'SIEVAD_DPA.OBS_12'
    			                                       )
    			                           ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
    			                                              WHEN 1 THEN 'ROJO'
    			                                              WHEN 2 THEN 'NARANJA'
    			                                              WHEN 3 THEN 'AMARILLO'
    			                                              WHEN 4 THEN 'VERDE'                                              
    			                                              WHEN 5 THEN 'MORADO'
    			                                        END AS SMF_12")     
    			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
    			                           //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
    			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	  
    			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	  
    			                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
    			                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
    			                           ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
    			                           ->get();                                 	
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                                    
                    break;
            } //swith

    }else{       //*******************
        switch($mes_id){
                case '1':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                         
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_01', 
                                            'SIEVAD_DPA.MESC_01',
                                            'SIEVAD_DPA.MES_P01',
                                            'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

                                            'SIEVAD_DPA.ACUMP_01', 
                                            'SIEVAD_DPA.ACUMC_01',
                                            'SIEVAD_DPA.ACUM_P01'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_01")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_01', 
                                              'SIEVAD_DPA.MESC_01',
                                              'SIEVAD_DPA.MES_P01',
                                              'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

                                              'SIEVAD_DPA.ACUMP_01', 
                                              'SIEVAD_DPA.ACUMC_01',
                                              'SIEVAD_DPA.ACUM_P01'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_01")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_01', 
                                                'SIEVAD_DPA.MESC_01',
                                                'SIEVAD_DPA.MES_P01',
                                                'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

                                                'SIEVAD_DPA.ACUMP_01', 
                                                'SIEVAD_DPA.ACUMC_01',
                                                'SIEVAD_DPA.ACUM_P01'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_01")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                                  'SIEVAD_DPA.MESP_01', 
                                                  'SIEVAD_DPA.MESC_01',
                                                  'SIEVAD_DPA.MES_P01',
                                                  'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

                                                  'SIEVAD_DPA.ACUMP_01', 
                                                  'SIEVAD_DPA.ACUMC_01',
                                                  'SIEVAD_DPA.ACUM_P01'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S01 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_01")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF          
                    break;
                          
                case '2':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                            'SIEVAD_DPA.MESP_02', 
                                            'SIEVAD_DPA.MESC_02',
                                            'SIEVAD_DPA.MES_P02',
                                            'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

                                            'SIEVAD_DPA.ACUMP_02', 
                                            'SIEVAD_DPA.ACUMC_02',
                                            'SIEVAD_DPA.ACUM_P02'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_02")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_02') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                              'SIEVAD_DPA.MESP_02', 
                                              'SIEVAD_DPA.MESC_02',
                                              'SIEVAD_DPA.MES_P02',
                                              'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

                                              'SIEVAD_DPA.ACUMP_02', 
                                              'SIEVAD_DPA.ACUMC_02',
                                              'SIEVAD_DPA.ACUM_P02'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_02")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_02') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','='            ,'SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                                'SIEVAD_DPA.MESP_02', 
                                                'SIEVAD_DPA.MESC_02',
                                                'SIEVAD_DPA.MES_P02',
                                                'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

                                                'SIEVAD_DPA.ACUMP_02', 
                                                'SIEVAD_DPA.ACUMC_02',
                                                'SIEVAD_DPA.ACUM_P02'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_02")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_02'  ,'SIEVAD_CAT_COLORES_02.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_02')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_02') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                                  'SIEVAD_DPA.MESP_02', 
                                                  'SIEVAD_DPA.MESC_02',
                                                  'SIEVAD_DPA.MES_P02',
                                                  'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

                                                  'SIEVAD_DPA.ACUMP_02', 
                                                  'SIEVAD_DPA.ACUMC_02',
                                                  'SIEVAD_DPA.ACUM_P02'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S02 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_02")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF             
                    break;

                case '3':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_03', 
                                            'SIEVAD_DPA.MESC_03',
                                            'SIEVAD_DPA.MES_P03',
                                            'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

                                            'SIEVAD_DPA.ACUMP_03', 
                                            'SIEVAD_DPA.ACUMC_03',
                                            'SIEVAD_DPA.ACUM_P03'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_03")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                              'SIEVAD_DPA.MESP_03', 
                                              'SIEVAD_DPA.MESC_03',
                                              'SIEVAD_DPA.MES_P03',
                                              'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

                                              'SIEVAD_DPA.ACUMP_03', 
                                              'SIEVAD_DPA.ACUMC_03',
                                              'SIEVAD_DPA.ACUM_P03'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_03")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                                'SIEVAD_DPA.MESP_03', 
                                                'SIEVAD_DPA.MESC_03',
                                                'SIEVAD_DPA.MES_P03',
                                                'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

                                                'SIEVAD_DPA.ACUMP_03', 
                                                'SIEVAD_DPA.ACUMC_03',
                                                'SIEVAD_DPA.ACUM_P03'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_03")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_03'  ,'SIEVAD_CAT_COLORES_03.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_03')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_03') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                                  'SIEVAD_DPA.MESP_03', 
                                                  'SIEVAD_DPA.MESC_03',
                                                  'SIEVAD_DPA.MES_P03',
                                                  'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 

                                                  'SIEVAD_DPA.ACUMP_03', 
                                                  'SIEVAD_DPA.ACUMC_03',
                                                  'SIEVAD_DPA.ACUM_P03'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S03 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_03")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                     
                    break;

                case '4':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                            'SIEVAD_DPA.MESP_04', 
                                            'SIEVAD_DPA.MESC_04',
                                            'SIEVAD_DPA.MES_P04',
                                            'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

                                            'SIEVAD_DPA.ACUMP_04', 
                                            'SIEVAD_DPA.ACUMC_04',
                                            'SIEVAD_DPA.ACUM_P04'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_04")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                              'SIEVAD_DPA.MESP_04', 
                                              'SIEVAD_DPA.MESC_04',
                                              'SIEVAD_DPA.MES_P04',
                                              'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

                                              'SIEVAD_DPA.ACUMP_04', 
                                              'SIEVAD_DPA.ACUMC_04',
                                              'SIEVAD_DPA.ACUM_P04'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_04")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                                'SIEVAD_DPA.MESP_04', 
                                                'SIEVAD_DPA.MESC_04',
                                                'SIEVAD_DPA.MES_P04',
                                                'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

                                                'SIEVAD_DPA.ACUMP_04', 
                                                'SIEVAD_DPA.ACUMC_04',
                                                'SIEVAD_DPA.ACUM_P04'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_04")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_04'  ,'SIEVAD_CAT_COLORES_04.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_04')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_04') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 

                                                  'SIEVAD_DPA.MESP_04', 
                                                  'SIEVAD_DPA.MESC_04',
                                                  'SIEVAD_DPA.MES_P04',
                                                  'SIEVAD_CAT_COLORES_04.COLOR_COLOR AS MES_S04', 

                                                  'SIEVAD_DPA.ACUMP_04', 
                                                  'SIEVAD_DPA.ACUMC_04',
                                                  'SIEVAD_DPA.ACUM_P04'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S04 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_04")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                     
                    break;

                case '5':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_05', 
                                            'SIEVAD_DPA.MESC_05',
                                            'SIEVAD_DPA.MES_P05',
                                            'SIEVAD_DPA.SEMAF_05',

                                            'SIEVAD_DPA.ACUMP_05', 
                                            'SIEVAD_DPA.ACUMC_05',
                                            'SIEVAD_DPA.ACUM_P05'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_05")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_05', 
                                              'SIEVAD_DPA.MESC_05',
                                              'SIEVAD_DPA.MES_P05',
                                              'SIEVAD_DPA.SEMAF_05',

                                              'SIEVAD_DPA.ACUMP_05', 
                                              'SIEVAD_DPA.ACUMC_05',
                                              'SIEVAD_DPA.ACUM_P05'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_05")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_05', 
                                                'SIEVAD_DPA.MESC_05',
                                                'SIEVAD_DPA.MES_P05',
                                                'SIEVAD_DPA.SEMAF_05',

                                                'SIEVAD_DPA.ACUMP_05', 
                                                'SIEVAD_DPA.ACUMC_05',
                                                'SIEVAD_DPA.ACUM_P05'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_05")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_05', 
                                                  'SIEVAD_DPA.MESC_05',
                                                  'SIEVAD_DPA.MES_P05',
                                                  'SIEVAD_DPA.SEMAF_05',

                                                  'SIEVAD_DPA.ACUMP_05', 
                                                  'SIEVAD_DPA.ACUMC_05',
                                                  'SIEVAD_DPA.ACUM_P05'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S05 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_05")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                     

                    break;                                                                         

                case '6':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_06', 
                                            'SIEVAD_DPA.MESC_06',
                                            'SIEVAD_DPA.MES_P06',
                                            'SIEVAD_DPA.SEMAF_06',

                                            'SIEVAD_DPA.ACUMP_06', 
                                            'SIEVAD_DPA.ACUMC_06',
                                            'SIEVAD_DPA.ACUM_P06'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_06")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               ////->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_06', 
                                              'SIEVAD_DPA.MESC_06',
                                              'SIEVAD_DPA.MES_P06',
                                              'SIEVAD_DPA.SEMAF_06',

                                              'SIEVAD_DPA.ACUMP_06', 
                                              'SIEVAD_DPA.ACUMC_06',
                                              'SIEVAD_DPA.ACUM_P06'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_06")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_06', 
                                                'SIEVAD_DPA.MESC_06',
                                                'SIEVAD_DPA.MES_P06',
                                                'SIEVAD_DPA.SEMAF_06',

                                                'SIEVAD_DPA.ACUMP_06', 
                                                'SIEVAD_DPA.ACUMC_06',
                                                'SIEVAD_DPA.ACUM_P06'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_06")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_06', 
                                                  'SIEVAD_DPA.MESC_06',
                                                  'SIEVAD_DPA.MES_P06',
                                                  'SIEVAD_DPA.SEMAF_06',

                                                  'SIEVAD_DPA.ACUMP_06', 
                                                  'SIEVAD_DPA.ACUMC_06',
                                                  'SIEVAD_DPA.ACUM_P06'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S06 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_06")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                
                    break;                                                                         

                case '7':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_07', 
                                            'SIEVAD_DPA.MESC_07',
                                            'SIEVAD_DPA.MES_P07',
                                            'SIEVAD_DPA.SEMAF_07',

                                            'SIEVAD_DPA.ACUMP_07', 
                                            'SIEVAD_DPA.ACUMC_07',
                                            'SIEVAD_DPA.ACUM_P07'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_07")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_07', 
                                              'SIEVAD_DPA.MESC_07',
                                              'SIEVAD_DPA.MES_P07',
                                              'SIEVAD_DPA.SEMAF_07',

                                              'SIEVAD_DPA.ACUMP_07', 
                                              'SIEVAD_DPA.ACUMC_07',
                                              'SIEVAD_DPA.ACUM_P07'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_07")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_07', 
                                                'SIEVAD_DPA.MESC_07',
                                                'SIEVAD_DPA.MES_P07',
                                                'SIEVAD_DPA.SEMAF_07',

                                                'SIEVAD_DPA.ACUMP_07', 
                                                'SIEVAD_DPA.ACUMC_07',
                                                'SIEVAD_DPA.ACUM_P07'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_07")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_07', 
                                                  'SIEVAD_DPA.MESC_07',
                                                  'SIEVAD_DPA.MES_P07',
                                                  'SIEVAD_DPA.SEMAF_07',

                                                  'SIEVAD_DPA.ACUMP_07', 
                                                  'SIEVAD_DPA.ACUMC_07',
                                                  'SIEVAD_DPA.ACUM_P07'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S07 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_07")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                
                    break; 

                case '8':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_08', 
                                            'SIEVAD_DPA.MESC_08',
                                            'SIEVAD_DPA.MES_P08',
                                            'SIEVAD_DPA.SEMAF_08',

                                            'SIEVAD_DPA.ACUMP_08', 
                                            'SIEVAD_DPA.ACUMC_08',
                                            'SIEVAD_DPA.ACUM_P08'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_08")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_08', 
                                              'SIEVAD_DPA.MESC_08',
                                              'SIEVAD_DPA.MES_P08',
                                              'SIEVAD_DPA.SEMAF_08',

                                              'SIEVAD_DPA.ACUMP_08', 
                                              'SIEVAD_DPA.ACUMC_08',
                                              'SIEVAD_DPA.ACUM_P08'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_08")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                         
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_08', 
                                                'SIEVAD_DPA.MESC_08',
                                                'SIEVAD_DPA.MES_P08',
                                                'SIEVAD_DPA.SEMAF_08',

                                                'SIEVAD_DPA.ACUMP_08', 
                                                'SIEVAD_DPA.ACUMC_08',
                                                'SIEVAD_DPA.ACUM_P08'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_08")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                         
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_08', 
                                                  'SIEVAD_DPA.MESC_08',
                                                  'SIEVAD_DPA.MES_P08',
                                                  'SIEVAD_DPA.SEMAF_08',

                                                  'SIEVAD_DPA.ACUMP_08', 
                                                  'SIEVAD_DPA.ACUMC_08',
                                                  'SIEVAD_DPA.ACUM_P08'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S08 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_08")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                

                    break; 

                case '9':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                         
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_09', 
                                            'SIEVAD_DPA.MESC_09',
                                            'SIEVAD_DPA.MES_P09',
                                            'SIEVAD_DPA.SEMAF_09',

                                            'SIEVAD_DPA.ACUMP_09', 
                                            'SIEVAD_DPA.ACUMC_09',
                                            'SIEVAD_DPA.ACUM_P09'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_09")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                         
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_09', 
                                              'SIEVAD_DPA.MESC_09',
                                              'SIEVAD_DPA.MES_P09',
                                              'SIEVAD_DPA.SEMAF_09',

                                              'SIEVAD_DPA.ACUMP_09', 
                                              'SIEVAD_DPA.ACUMC_09',
                                              'SIEVAD_DPA.ACUM_P09'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_09")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                         
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_09', 
                                                'SIEVAD_DPA.MESC_09',
                                                'SIEVAD_DPA.MES_P09',
                                                'SIEVAD_DPA.SEMAF_09',

                                                'SIEVAD_DPA.ACUMP_09', 
                                                'SIEVAD_DPA.ACUMC_09',
                                                'SIEVAD_DPA.ACUM_P09'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_09")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_09', 
                                                  'SIEVAD_DPA.MESC_09',
                                                  'SIEVAD_DPA.MES_P09',
                                                  'SIEVAD_DPA.SEMAF_09',

                                                  'SIEVAD_DPA.ACUMP_09', 
                                                  'SIEVAD_DPA.ACUMC_09',
                                                  'SIEVAD_DPA.ACUM_P09'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S09 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_09")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                        
                    break;                                             

                case '10':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_10', 
                                            'SIEVAD_DPA.MESC_10',
                                            'SIEVAD_DPA.MES_P10',
                                            'SIEVAD_DPA.SEMAF_10',

                                            'SIEVAD_DPA.ACUMP_10', 
                                            'SIEVAD_DPA.ACUMC_10',
                                            'SIEVAD_DPA.ACUM_P10'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_10")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_10', 
                                              'SIEVAD_DPA.MESC_10',
                                              'SIEVAD_DPA.MES_P10',
                                              'SIEVAD_DPA.SEMAF_10',

                                              'SIEVAD_DPA.ACUMP_10', 
                                              'SIEVAD_DPA.ACUMC_10',
                                              'SIEVAD_DPA.ACUM_P10'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_10")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_10', 
                                                'SIEVAD_DPA.MESC_10',
                                                'SIEVAD_DPA.MES_P10',
                                                'SIEVAD_DPA.SEMAF_10',

                                                'SIEVAD_DPA.ACUMP_10', 
                                                'SIEVAD_DPA.ACUMC_10',
                                                'SIEVAD_DPA.ACUM_P10'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_10")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_10', 
                                                  'SIEVAD_DPA.MESC_10',
                                                  'SIEVAD_DPA.MES_P10',
                                                  'SIEVAD_DPA.SEMAF_10',

                                                  'SIEVAD_DPA.ACUMP_10', 
                                                  'SIEVAD_DPA.ACUMC_10',
                                                  'SIEVAD_DPA.ACUM_P10'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S10 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_10")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                        

                    break;

                case '11':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_11', 
                                            'SIEVAD_DPA.MESC_11',
                                            'SIEVAD_DPA.MES_P11',
                                            'SIEVAD_DPA.SEMAF_11',

                                            'SIEVAD_DPA.ACUMP_11', 
                                            'SIEVAD_DPA.ACUMC_11',
                                            'SIEVAD_DPA.ACUM_P11'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_11")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_11', 
                                              'SIEVAD_DPA.MESC_11',
                                              'SIEVAD_DPA.MES_P11',
                                              'SIEVAD_DPA.SEMAF_11',

                                              'SIEVAD_DPA.ACUMP_11', 
                                              'SIEVAD_DPA.ACUMC_11',
                                              'SIEVAD_DPA.ACUM_P11'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_11")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                 'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_11', 
                                                'SIEVAD_DPA.MESC_11',
                                                'SIEVAD_DPA.MES_P11',
                                                'SIEVAD_DPA.SEMAF_11',

                                                'SIEVAD_DPA.ACUMP_11', 
                                                'SIEVAD_DPA.ACUMC_11',
                                                'SIEVAD_DPA.ACUM_P11'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_11")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','='
                                                                          ,'SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_11', 
                                                  'SIEVAD_DPA.MESC_11',
                                                  'SIEVAD_DPA.MES_P11',
                                                  'SIEVAD_DPA.SEMAF_11',

                                                  'SIEVAD_DPA.ACUMP_11', 
                                                  'SIEVAD_DPA.ACUMC_11',
                                                  'SIEVAD_DPA.ACUM_P11'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S11 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_11")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                        

                    break; 

                case '12':
                    if($depen_id == '0' && $taccion_id == '0' ){                                 
                        return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID'     ,'=',$mes_id)
                               ->join('SIEVAD_CAT_UMEDIDA'     ,'SIEVAD_CAT_UMEDIDA.UMED_ID'       ,'=','SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID' ,'=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID' ,'=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'      ,'=','SIEVAD_DPA.SEMAFA_01')      
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                 ,'=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                   ->select(
                                            'SIEVAD_DPA.PERIODO_ID',
                                             
                                            'SIEVAD_DPA.DEPEN_ID2',
                                            'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                            'SIEVAD_DPA.EPPROY_ID',
                                            'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                            'SIEVAD_DPA.FOLIO',  
                                            'SIEVAD_DPA.PARTIDA',                                          
                                            'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                            'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                            'SIEVAD_DPA.TOTP_02',
                                            'SIEVAD_DPA.TOTC_02',
                                            'SIEVAD_DPA.TOT_P01',
                                            'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                            //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                            'SIEVAD_DPA.MESP_12', 
                                            'SIEVAD_DPA.MESC_12',
                                            'SIEVAD_DPA.MES_P12',
                                            'SIEVAD_DPA.SEMAF_12',

                                            'SIEVAD_DPA.ACUMP_12', 
                                            'SIEVAD_DPA.ACUMC_12',
                                            'SIEVAD_DPA.ACUM_P12'
                                           )
                               ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
                                                  WHEN 1 THEN 'ROJO'
                                                  WHEN 2 THEN 'NARANJA'
                                                  WHEN 3 THEN 'AMARILLO'
                                                  WHEN 4 THEN 'VERDE'                                              
                                                  WHEN 5 THEN 'MORADO'
                                            END AS SMF_12")     
                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                               //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                               ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                               ->get(); 

                    }else{
                        if($depen_id == '0' && $taccion_id <> '0' ){   
                          return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID','=',$mes_id)
                                   ->join('SIEVAD_CAT_UMEDIDA'     ,'SIEVAD_CAT_UMEDIDA.UMED_ID'      ,'=','SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID'     ,'=','SIEVAD_DPA.SEMAFA_01')      
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'                ,'=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                              //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                              'SIEVAD_DPA.MESP_12', 
                                              'SIEVAD_DPA.MESC_12',
                                              'SIEVAD_DPA.MES_P12',
                                              'SIEVAD_DPA.SEMAF_12',

                                              'SIEVAD_DPA.ACUMP_12', 
                                              'SIEVAD_DPA.ACUMC_12',
                                              'SIEVAD_DPA.ACUM_P12'
                                             )
                                 ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
                                                    WHEN 1 THEN 'ROJO'
                                                    WHEN 2 THEN 'NARANJA'
                                                    WHEN 3 THEN 'AMARILLO'
                                                    WHEN 4 THEN 'VERDE'                                              
                                                    WHEN 5 THEN 'MORADO'
                                              END AS SMF_12")     
                                 ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                 //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                 ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)                            
                                 ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                 ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                 ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                 ->get();                       
                        }else{
                            if($depen_id <> '0' && $taccion_id == '0' ){   
                            return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID','=',$mes_id)
                                 ->join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','=','SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                'SIEVAD_DPA.PERIODO_ID',
                                                 
                                                'SIEVAD_DPA.DEPEN_ID2',
                                                'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                'SIEVAD_DPA.EPPROY_ID',
                                                'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                'SIEVAD_DPA.FOLIO',  
                                                'SIEVAD_DPA.PARTIDA',                                          
                                                'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                'SIEVAD_DPA.TOTP_02',
                                                'SIEVAD_DPA.TOTC_02',
                                                'SIEVAD_DPA.TOT_P01',
                                                'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                'SIEVAD_DPA.MESP_12', 
                                                'SIEVAD_DPA.MESC_12',
                                                'SIEVAD_DPA.MES_P12',
                                                'SIEVAD_DPA.SEMAF_12',

                                                'SIEVAD_DPA.ACUMP_12', 
                                                'SIEVAD_DPA.ACUMC_12',
                                                'SIEVAD_DPA.ACUM_P12'
                                               )
                                   ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
                                                      WHEN 1 THEN 'ROJO'
                                                      WHEN 2 THEN 'NARANJA'
                                                      WHEN 3 THEN 'AMARILLO'
                                                      WHEN 4 THEN 'VERDE'                                              
                                                      WHEN 5 THEN 'MORADO'
                                                END AS SMF_12")     
                                   ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                   //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                   ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)                            
                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                   ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                   ->get();     
                            }else{
                                if($depen_id <> '0' && $taccion_id <> '0' ){   
                              return regProgdAnualModel::join('SIEVAD_CAT_MESES','SIEVAD_CAT_MESES.MES_ID','=',$mes_id)
                                     ->join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','=','SIEVAD_DPA.UMED_ID')
                                     ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=','SIEVAD_DPA.DEPEN_ID2')
                                     ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')  
                                     ->join('SIEVAD_CAT_COLORES_01'  ,'SIEVAD_CAT_COLORES_01.COLOR_ID'  ,'=','SIEVAD_DPA.SEMAF_01')
                                     ->join('SIEVAD_CAT_COLORES'     ,'SIEVAD_CAT_COLORES.COLOR_ID','=','SIEVAD_DPA.SEMAFA_01') 
                                     ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                                     //->join('SIEVAD_CAT_EP_PROGRAMA','SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')                                 
                                     ->select(
                                                  'SIEVAD_DPA.PERIODO_ID',
                                                   
                                                  'SIEVAD_DPA.DEPEN_ID2',
                                                  'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                                  'SIEVAD_DPA.EPPROY_ID',
                                                  'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                                  'SIEVAD_DPA.FOLIO',  
                                                  'SIEVAD_DPA.PARTIDA',                                          
                                                  'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                                  'SIEVAD_CAT_UMEDIDA.UMED_DESC', 

                                                  'SIEVAD_DPA.TOTP_02',
                                                  'SIEVAD_DPA.TOTC_02',
                                                  'SIEVAD_DPA.TOT_P01',
                                                  'SIEVAD_CAT_COLORES.COLOR_COLOR', 
                                                  //'SIEVAD_CAT_COLORES.COLOR_DESC', 

                                                  'SIEVAD_DPA.MESP_12', 
                                                  'SIEVAD_DPA.MESC_12',
                                                  'SIEVAD_DPA.MES_P12',
                                                  'SIEVAD_DPA.SEMAF_12',

                                                  'SIEVAD_DPA.ACUMP_12', 
                                                  'SIEVAD_DPA.ACUMC_12',
                                                  'SIEVAD_DPA.ACUM_P12'
                                                 )
                                     ->selectRaw("CASE SIEVAD_DPA.ACUM_S12 
                                                        WHEN 1 THEN 'ROJO'
                                                        WHEN 2 THEN 'NARANJA'
                                                        WHEN 3 THEN 'AMARILLO'
                                                        WHEN 4 THEN 'VERDE'                                              
                                                        WHEN 5 THEN 'MORADO'
                                                  END AS SMF_12")     
                                     ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                                     //->Where(    'SIEVAD_DPA.PERIODO_ID','=',$mes_id)
                                     ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)   
                                     ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)   
                                     ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                                     ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.FOLIO'     ,'ASC')
                                     ->orderBy(  'SIEVAD_DPA.PARTIDA'   ,'ASC')   
                                     ->get();                                   
                                }    // END IF
                            }    //END IF
                        }    //END IF
                    }    // ENDIF                                    
                    break;
            } //swith            
        }     // if ($control = **                    
    }

}
