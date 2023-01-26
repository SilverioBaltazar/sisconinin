<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\regProgdAnualModel;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExportMensualbddet_v2 implements FromCollection, /*FromQuery,*/ WithHeadings
{

    //use Exportable;

    //********** Parámetros de filtro del query *******************//
    private $periodo_id;
    private $mes_id;
    private $depen_id;
    private $taccion_id;
    private $control;
    private $data;
    private $i;    
 
    public function __construct($periodo_id, $mes_id, $depen_id, $taccion_id, $control, $data, $i)
    {
        //$this->regprogdanual= $regprogdanual;
        $this->periodo_id   = $periodo_id;
        $this->mes_id       = $mes_id;
        $this->depen_id     = $depen_id;
        $this->taccion_id   = $taccion_id;
        $this->control      = $control;
        $this->data         = $data;
        $this->i            = $i;                
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
        $data       = $this->data;
        $i          = $this->i;  
        if( $control == 'S' ){   
		        switch($mes_id){ 
		            case '1':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

								'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN'];            
		                break;
		                      
		            case '2':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',              

				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'ENE_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',		 
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break;

		            case '3':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',		
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN'];              
		                break;

		            case '4':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',	
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',	 
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'OBJETIVO','JUSTIFICACIÓN'];              
		                break;

		            case '5':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',                  
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',
				                
				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN'];        
		                break;

		            case '6':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',
				                
				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',				                
				                
				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN'];              
		                break;

		            case '7':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',				                
				                'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_SMF',
				                'JUL_SOPORTE',
				                
				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
                                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',				                
                                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',                                

								'OBJETIVO','JUSTIFICACIÓN'];             
		                break;  

		            case '8':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
				                'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
				                'AGO_SOPORTE',
				                
				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
				                'JUL_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break; 

		            case '9':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',	
				                'SEP_SOPORTE',	

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',	
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
				                'AGO_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break;                                             

		            case '10':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',
				                'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_ACUM_SMF',	
				                'OCT_SOPORTE',			                

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',

				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
								'AGO_SOPORTE',
				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',						
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',
				                'SEP_SOPORTE',

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',				                

				                'OBJETIVO','JUSTIFICACIÓN'];  
		                break;  

		            case '11':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'NOV_PROG'       ,'NOV_REAL'       ,'NOV_%'     ,'NOV_SMF',
				                'NOV_ACUM_PROG'  ,'NOV_ACUM_REAL'  ,'NOV_ACUM_%','NOV_ACUM_SMF',
				                'NOV_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
								'AGO_SOPORTE',
				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',						
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',
				                'SEP_SOPORTE',

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',

								'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',
								'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_ACUM_SMF',				                
								'OCT_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN'];
		                break; 

		            case '12':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',    

				                'DIC_PROG'       ,'DIC_REAL'       ,'DIC_%'     ,'DIC_SMF',
				                'DIC_ACUM_PROG'  ,'DIC_ACUM_REAL'  ,'DIC_ACUM_%','DIC_ACUM_SMF',
				                'DIC_SOPORTE',

				                'TRIM4_PROG'     ,'TRIM4_REAL'     ,'TRIM4_%'     ,'TRIM4_SMF',				                

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
								'AGO_SOPORTE',
				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',						
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',
				                'SEP_SOPORTE',

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',

								'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',
								'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_ACUM_SMF',
								'OCT_SOPORTE',
				                'NOV_PROG'       ,'NOV_REAL'       ,'NOV_%'     ,'NOV_SMF',	
				                'NOV_ACUM_PROG'  ,'NOV_ACUM_REAL'  ,'NOV_ACUM_%','NOV_ACUM_SMF',					
				                'NOV_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break;
		        }   // switch 
        }else{
		        switch($mes_id){ 
		            case '1':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

								'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN'];            
		                break;
		                      
		            case '2':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',              

				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'ENE_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',		 
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break;

		            case '3':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',		
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN'];              
		                break;

		            case '4':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',	
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',	 
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'OBJETIVO','JUSTIFICACIÓN'];              
		                break;

		            case '5':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',                  
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',
				                
				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN'];        
		                break;

		            case '6':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',
				                
				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',				                
				                
				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN'];              
		                break;

		            case '7':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',				                
				                'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_SMF',
				                'JUL_SOPORTE',
				                
				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
                                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',				                
                                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',                                

								'OBJETIVO','JUSTIFICACIÓN'];             
		                break;  

		            case '8':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
				                'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
				                'AGO_SOPORTE',
				                
				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
				                'JUL_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break; 

		            case '9':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',	
				                'SEP_SOPORTE',	

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',	
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
				                'AGO_SOPORTE',

				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break;                                             

		            case '10':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',
				                'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_ACUM_SMF',	
				                'OCT_SOPORTE',			                

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',

				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
								'AGO_SOPORTE',
				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',						
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',
				                'SEP_SOPORTE',

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',				                

				                'OBJETIVO','JUSTIFICACIÓN'];  
		                break;  

		            case '11':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',   

				                'NOV_PROG'       ,'NOV_REAL'       ,'NOV_%'     ,'NOV_SMF',
				                'NOV_ACUM_PROG'  ,'NOV_ACUM_REAL'  ,'NOV_ACUM_%','NOV_ACUM_SMF',
				                'NOV_SOPORTE',

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
								'AGO_SOPORTE',
				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',						
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',
				                'SEP_SOPORTE',

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',

								'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',
								'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_ACUM_SMF',				                
								'OCT_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN'];
		                break; 

		            case '12':
				        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON','EPPROY_ID','EP_PROYECTO',
				                'FOLIO','NP','CLAVE','NO_IGOB','ACCION_META','UNIDAD_MEDIDA',
				                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',    

				                'DIC_PROG'       ,'DIC_REAL'       ,'DIC_%'     ,'DIC_SMF',
				                'DIC_ACUM_PROG'  ,'DIC_ACUM_REAL'  ,'DIC_ACUM_%','DIC_ACUM_SMF',
				                'DIC_SOPORTE',

				                'TRIM4_PROG'     ,'TRIM4_REAL'     ,'TRIM4_%'     ,'TRIM4_SMF',				                

				                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',
				                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF',
				                'ENE_SOPORTE',
				                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',
				                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF',
				                'FEB_SOPORTE',
				                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',
				                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF',
				                'MAR_SOPORTE',

				                'TRIM1_PROG'     ,'TRIM1_REAL'     ,'TRIM1_%'     ,'TRIM1_SMF',

				                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',
				                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF',
				                'ABR_SOPORTE',
				                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',
				                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF',
				                'MAY_SOPORTE',
				                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',
				                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_ACUM_SMF',
				                'JUN_SOPORTE',

				                'TRIM2_PROG'     ,'TRIM2_REAL'     ,'TRIM2_%'     ,'TRIM2_SMF',

								'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',
								'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_ACUM_SMF',								
								'JUL_SOPORTE',
								'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',
								'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_ACUM_SMF',
								'AGO_SOPORTE',
				                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',						
				                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_ACUM_SMF',
				                'SEP_SOPORTE',

				                'TRIM3_PROG'     ,'TRIM3_REAL'     ,'TRIM3_%'     ,'TRIM3_SMF',

								'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',
								'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_ACUM_SMF',
								'OCT_SOPORTE',
				                'NOV_PROG'       ,'NOV_REAL'       ,'NOV_%'     ,'NOV_SMF',	
				                'NOV_ACUM_PROG'  ,'NOV_ACUM_REAL'  ,'NOV_ACUM_%','NOV_ACUM_SMF',					
				                'NOV_SOPORTE',
				                'OBJETIVO','JUSTIFICACIÓN']; 
		                break;
		        }   // switch 
        }   // if( $control == 'S' ){
    }

    public function collection()
    {
        $periodo_id = $this->periodo_id;
        $mes_id     = $this->mes_id;
        $depen_id   = $this->depen_id;
        $taccion_id = $this->taccion_id;
        $control    = $this->control;
        $data       = $this->data;
        $i          = $this->i;        
        
        //Regresa el arreglo a exportar en excel  
        return collect($this->data);
    }

}
