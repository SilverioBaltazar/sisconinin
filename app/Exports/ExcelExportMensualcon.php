<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\regProgdAnualModel;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExportMensualcon implements FromCollection, /*FromQuery,*/ WithHeadings
{

    //use Exportable;

    //********** Parámetros de filtro del query *******************//
    private $periodo_id;
    private $mes_id;
    private $depen_id;
    private $taccion_id;
 
    public function __construct($periodo_id, $mes_id, $depen_id, $taccion_id)
    {
        //$this->regprogdanual= $regprogdanual;
        $this->periodo_id   = $periodo_id;
        $this->mes_id       = $mes_id;
        $this->depen_id     = $depen_id;
        $this->taccion_id   = $taccion_id;
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
        switch($mes_id){
            case '1':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'ENE_PROG'       ,'ENE_REAL'       ,'ENE_%'     ,'ENE_SMF',           
		                'ENE_ACUM_PROG'  ,'ENE_ACUM_REAL'  ,'ENE_ACUM_%','ENE_ACUM_SMF'];            
                break;
                      
            case '2':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'FEB_PROG'       ,'FEB_REAL'       ,'FEB_%'     ,'FEB_SMF',           
		                'FEB_ACUM_PROG'  ,'FBE_ACUM_REAL'  ,'FEB_ACUM_%','FEB_ACUM_SMF'];              
                break;

            case '3':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'MAR_PROG'       ,'MAR_REAL'       ,'MAR_%'     ,'MAR_SMF',           
		                'MAR_ACUM_PROG'  ,'MAR_ACUM_REAL'  ,'MAR_ACUM_%','MAR_ACUM_SMF'];              
                break;

            case '4':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'ABR_PROG'       ,'ABR_REAL'       ,'ABR_%'     ,'ABR_SMF',           
		                'ABR_ACUM_PROG'  ,'ABR_ACUM_REAL'  ,'ABR_ACUM_%','ABR_ACUM_SMF'];              
                break;

            case '5':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'MAY_PROG'       ,'MAY_REAL'       ,'MAY_%'     ,'MAY_SMF',           
		                'MAY_ACUM_PROG'  ,'MAY_ACUM_REAL'  ,'MAY_ACUM_%','MAY_ACUM_SMF'];              
                break;

            case '6':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'JUN_PROG'       ,'JUN_REAL'       ,'JUN_%'     ,'JUN_SMF',           
		                'JUN_ACUM_PROG'  ,'JUN_ACUM_REAL'  ,'JUN_ACUM_%','JUN_SMF'];              
                break;

            case '7':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'JUL_PROG'       ,'JUL_REAL'       ,'JUL_%'     ,'JUL_SMF',           
		                'JUL_ACUM_PROG'  ,'JUL_ACUM_REAL'  ,'JUL_ACUM_%','JUL_SMF'];              
                break;  

            case '8':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'AGO_PROG'       ,'AGO_REAL'       ,'AGO_%'     ,'AGO_SMF',           
		                'AGO_ACUM_PROG'  ,'AGO_ACUM_REAL'  ,'AGO_ACUM_%','AGO_SMF'];              
                break; 

            case '9':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'SEP_PROG'       ,'SEP_REAL'       ,'SEP_%'     ,'SEP_SMF',           
		                'SEP_ACUM_PROG'  ,'SEP_ACUM_REAL'  ,'SEP_ACUM_%','SEP_SMF'];              
                break;                                             

            case '10':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'OCT_PROG'       ,'OCT_REAL'       ,'OCT_%'     ,'OCT_SMF',           
		                'OCT_ACUM_PROG'  ,'OCT_ACUM_REAL'  ,'OCT_ACUM_%','OCT_SMF'];              
                break;  

            case '11':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'NOV_PROG'       ,'NOV_REAL'       ,'NOV_%'     ,'NOV_SMF',           
		                'NOV_ACUM_PROG'  ,'NOV_ACUM_REAL'  ,'NOV_ACUM_%','NOV_SMF'];              
                break; 

            case '12':
		        return ['PERIODO_ID','UNID_ADMON_ID','UNID_ADMON',
		                'ANUAL_META_PROG','ANUAL_META_REAL','ANUAL_%'   ,'ANUAL_SMF',           
		                'DIC_PROG'       ,'DIC_REAL'       ,'DIC_%'     ,'DIC_SMF',           
		                'DIC_ACUM_PROG'  ,'DIC_ACUM_REAL'  ,'DIC_ACUM_%','DIC_SMF'];              
                break;
        }   // switch 
    }

    public function collection()
    {
        $periodo_id = $this->periodo_id;
        $mes_id     = $this->mes_id;
        $depen_id   = $this->depen_id;
        $taccion_id = $this->taccion_id;
        switch($mes_id){
            case '1':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
    											END
												ELSE NULL 
										 END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_01) AS GMP_01')
							->selectRaw('SUM(SIEVAD_DPA.MESC_01) AS GMC_01')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 ELSE 0 END AS GMES_P01')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S01")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_01) AS GACUMP_01')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_01) AS GACUMC_01')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 ELSE 0 END AS GACUM_P01')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S01") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
    											END
												ELSE NULL 
										 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_01) AS GMP_01')
								->selectRaw('SUM(SIEVAD_DPA.MESC_01) AS GMC_01')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 ELSE 0 END AS GMES_P01')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S01")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_01) AS GACUMP_01')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_01) AS GACUMC_01')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 ELSE 0 END AS GACUM_P01')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S01") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    											END
														ELSE NULL 
												 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_01) AS GMP_01')
										->selectRaw('SUM(SIEVAD_DPA.MESC_01) AS GMC_01')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 ELSE 0 END AS GMES_P01')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S01")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_01) AS GACUMP_01')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_01) AS GACUMC_01')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 ELSE 0 END AS GACUM_P01')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S01") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
														WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    											END
														ELSE NULL 
												 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_01) AS GMP_01')
										->selectRaw('SUM(SIEVAD_DPA.MESC_01) AS GMC_01')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 ELSE 0 END AS GMES_P01')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_01) > 0 And SUM(SIEVAD_DPA.MESC_01) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_01)/SUM(SIEVAD_DPA.MESP_01))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S01")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_01) AS GACUMP_01')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_01) AS GACUMC_01')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 ELSE 0 END AS GACUM_P01')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_01) > 0 And SUM(SIEVAD_DPA.ACUMC_01) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_01)/SUM(SIEVAD_DPA.ACUMP_01))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S01") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF          
                break;
                      
            case '2':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_02) AS GMP_02')
							->selectRaw('SUM(SIEVAD_DPA.MESC_02) AS GMC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 ELSE 0 END AS GMES_P02')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S02")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_02) AS GACUMP_02')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_02) AS GACUMC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 ELSE 0 END AS GACUM_P02')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S02") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_02) AS GMP_02')
								->selectRaw('SUM(SIEVAD_DPA.MESC_02) AS GMC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 ELSE 0 END AS GMES_P02')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S02")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_02) AS GACUMP_02')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_02) AS GACUMC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 ELSE 0 END AS GACUM_P02')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S02") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_02) AS GMP_02')
										->selectRaw('SUM(SIEVAD_DPA.MESC_02) AS GMC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 ELSE 0 END AS GMES_P02')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S02")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_02) AS GACUMP_02')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_02) AS GACUMC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 ELSE 0 END AS GACUM_P02')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S02") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_02) AS GMP_02')
										->selectRaw('SUM(SIEVAD_DPA.MESC_02) AS GMC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 ELSE 0 END AS GMES_P02')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_02) > 0 And SUM(SIEVAD_DPA.MESC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_02)/SUM(SIEVAD_DPA.MESP_02))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S02")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_02) AS GACUMP_02')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_02) AS GACUMC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 ELSE 0 END AS GACUM_P02')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_02) > 0 And SUM(SIEVAD_DPA.ACUMC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_02)/SUM(SIEVAD_DPA.ACUMP_02))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S02") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF            
                break;

            case '3':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_03) AS GMP_03')
							->selectRaw('SUM(SIEVAD_DPA.MESC_03) AS GMC_03')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 ELSE 0 END AS GMES_P03')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S03")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_03) AS GACUMP_03')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_03) AS GACUMC_03')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 ELSE 0 END AS GACUM_P03')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S03") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_03) AS GMP_03')
								->selectRaw('SUM(SIEVAD_DPA.MESC_03) AS GMC_03')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 ELSE 0 END AS GMES_P03')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S03")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_03) AS GACUMP_03')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_03) AS GACUMC_03')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 ELSE 0 END AS GACUM_P03')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S03") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_03) AS GMP_03')
										->selectRaw('SUM(SIEVAD_DPA.MESC_03) AS GMC_03')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 ELSE 0 END AS GMES_P03')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S03")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_03) AS GACUMP_03')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_03) AS GACUMC_03')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 ELSE 0 END AS GACUM_P03')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S03") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_03) AS GMP_03')
										->selectRaw('SUM(SIEVAD_DPA.MESC_03) AS GMC_03')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 ELSE 0 END AS GMES_P03')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_03) > 0 And SUM(SIEVAD_DPA.MESC_03) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_03)/SUM(SIEVAD_DPA.MESP_03))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S03")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_03) AS GACUMP_03')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_03) AS GACUMC_03')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 ELSE 0 END AS GACUM_P03')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_03) > 0 And SUM(SIEVAD_DPA.ACUMC_03) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_03)/SUM(SIEVAD_DPA.ACUMP_03))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S03") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                  
                break;

            case '4':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_04) AS GMP_04')
							->selectRaw('SUM(SIEVAD_DPA.MESC_04) AS GMC_04')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 ELSE 0 END AS GMES_P04')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S04")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_04) AS GACUMP_04')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_04) AS GACUMC_04')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 ELSE 0 END AS GACUM_P04')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S04") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_04) AS GMP_04')
								->selectRaw('SUM(SIEVAD_DPA.MESC_04) AS GMC_04')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 ELSE 0 END AS GMES_P04')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S04")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_04) AS GACUMP_04')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_04) AS GACUMC_04')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 ELSE 0 END AS GACUM_P04')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S04") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_04) AS GMP_04')
										->selectRaw('SUM(SIEVAD_DPA.MESC_04) AS GMC_04')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 ELSE 0 END AS GMES_P04')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S04")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_04) AS GACUMP_04')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_04) AS GACUMC_04')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 ELSE 0 END AS GACUM_P04')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S04") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_04) AS GMP_04')
										->selectRaw('SUM(SIEVAD_DPA.MESC_04) AS GMC_04')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 ELSE 0 END AS GMES_P04')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_04) > 0 And SUM(SIEVAD_DPA.MESC_04) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_04)/SUM(SIEVAD_DPA.MESP_04))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S04")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_04) AS GACUMP_04')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_04) AS GACUMC_04')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 ELSE 0 END AS GACUM_P04')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_04) > 0 And SUM(SIEVAD_DPA.ACUMC_04) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_04)/SUM(SIEVAD_DPA.ACUMP_04))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S04") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                    
                break;

            case '5':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_05) AS GMP_05')
							->selectRaw('SUM(SIEVAD_DPA.MESC_05) AS GMC_05')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 ELSE 0 END AS GMES_P05')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S05")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_05) AS GACUMP_05')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_05) AS GACUMC_05')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 ELSE 0 END AS GACUM_P05')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S05") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_05) AS GMP_05')
								->selectRaw('SUM(SIEVAD_DPA.MESC_05) AS GMC_05')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 ELSE 0 END AS GMES_P05')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S05")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_05) AS GACUMP_05')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_05) AS GACUMC_05')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 ELSE 0 END AS GACUM_P05')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S05") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_05) AS GMP_05')
										->selectRaw('SUM(SIEVAD_DPA.MESC_05) AS GMC_05')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 ELSE 0 END AS GMES_P05')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S05")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_05) AS GACUMP_05')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_05) AS GACUMC_05')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 ELSE 0 END AS GACUM_P05')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S05") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_05) AS GMP_05')
										->selectRaw('SUM(SIEVAD_DPA.MESC_05) AS GMC_05')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 ELSE 0 END AS GMES_P05')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_05) > 0 And SUM(SIEVAD_DPA.MESC_05) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_05)/SUM(SIEVAD_DPA.MESP_05))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S05")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_05) AS GACUMP_05')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_05) AS GACUMC_05')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 ELSE 0 END AS GACUM_P05')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_05) > 0 And SUM(SIEVAD_DPA.ACUMC_05) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_05)/SUM(SIEVAD_DPA.ACUMP_05))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S05") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF             
                break;                                                                         

            case '6':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_06) AS GMP_06')
							->selectRaw('SUM(SIEVAD_DPA.MESC_06) AS GMC_06')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 ELSE 0 END AS GMES_P06')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S06")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_06) AS GACUMP_06')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_06) AS GACUMC_06')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 ELSE 0 END AS GACUM_P06')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S06") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_06) AS GMP_06')
								->selectRaw('SUM(SIEVAD_DPA.MESC_06) AS GMC_06')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 ELSE 0 END AS GMES_P06')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S06")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_06) AS GACUMP_06')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_06) AS GACUMC_06')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 ELSE 0 END AS GACUM_P06')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S06") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_06) AS GMP_06')
										->selectRaw('SUM(SIEVAD_DPA.MESC_06) AS GMC_06')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 ELSE 0 END AS GMES_P06')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S06")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_06) AS GACUMP_06')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_06) AS GACUMC_06')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 ELSE 0 END AS GACUM_P06')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S06") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_06) AS GMP_06')
										->selectRaw('SUM(SIEVAD_DPA.MESC_06) AS GMC_06')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 ELSE 0 END AS GMES_P06')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_06) > 0 And SUM(SIEVAD_DPA.MESC_06) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_06)/SUM(SIEVAD_DPA.MESP_06))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S06")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_06) AS GACUMP_06')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_06) AS GACUMC_06')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 ELSE 0 END AS GACUM_P06')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_06) > 0 And SUM(SIEVAD_DPA.ACUMC_06) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_06)/SUM(SIEVAD_DPA.ACUMP_06))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S06") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                         
                break;                                                                         

            case '7':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_07) AS GMP_07')
							->selectRaw('SUM(SIEVAD_DPA.MESC_07) AS GMC_07')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 ELSE 0 END AS GMES_P07')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S07")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_07) AS GACUMP_07')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_07) AS GACUMC_07')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 ELSE 0 END AS GACUM_P07')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S07") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_07) AS GMP_07')
								->selectRaw('SUM(SIEVAD_DPA.MESC_07) AS GMC_07')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 ELSE 0 END AS GMES_P07')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S07")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_07) AS GACUMP_07')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_07) AS GACUMC_07')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 ELSE 0 END AS GACUM_P07')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S07") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_07) AS GMP_07')
										->selectRaw('SUM(SIEVAD_DPA.MESC_07) AS GMC_07')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 ELSE 0 END AS GMES_P07')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S07")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_07) AS GACUMP_07')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_07) AS GACUMC_07')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 ELSE 0 END AS GACUM_P07')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S07") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_07) AS GMP_07')
										->selectRaw('SUM(SIEVAD_DPA.MESC_07) AS GMC_07')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 ELSE 0 END AS GMES_P07')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_07) > 0 And SUM(SIEVAD_DPA.MESC_07) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_07)/SUM(SIEVAD_DPA.MESP_07))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S07")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_07) AS GACUMP_07')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_07) AS GACUMC_07')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 ELSE 0 END AS GACUM_P07')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_07) > 0 And SUM(SIEVAD_DPA.ACUMC_07) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_07)/SUM(SIEVAD_DPA.ACUMP_07))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S07") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                                
                break; 

            case '8':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_08) AS GMP_08')
							->selectRaw('SUM(SIEVAD_DPA.MESC_08) AS GMC_08')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 ELSE 0 END AS GMES_P08')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S08")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_08) AS GACUMP_08')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_08) AS GACUMC_08')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 ELSE 0 END AS GACUM_P08')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S08") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_08) AS GMP_08')
								->selectRaw('SUM(SIEVAD_DPA.MESC_08) AS GMC_08')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 ELSE 0 END AS GMES_P08')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S08")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_08) AS GACUMP_08')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_08) AS GACUMC_08')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 ELSE 0 END AS GACUM_P08')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S08") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_08) AS GMP_08')
										->selectRaw('SUM(SIEVAD_DPA.MESC_08) AS GMC_08')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 ELSE 0 END AS GMES_P08')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S08")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_08) AS GACUMP_08')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_08) AS GACUMC_08')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 ELSE 0 END AS GACUM_P08')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S08") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_08) AS GMP_08')
										->selectRaw('SUM(SIEVAD_DPA.MESC_08) AS GMC_08')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 ELSE 0 END AS GMES_P08')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_08) > 0 And SUM(SIEVAD_DPA.MESC_08) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_08)/SUM(SIEVAD_DPA.MESP_08))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S08")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_08) AS GACUMP_08')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_08) AS GACUMC_08')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 ELSE 0 END AS GACUM_P08')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_08) > 0 And SUM(SIEVAD_DPA.ACUMC_08) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_08)/SUM(SIEVAD_DPA.ACUMP_08))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S08") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                   
                break; 

            case '9':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_09) AS GMP_09')
							->selectRaw('SUM(SIEVAD_DPA.MESC_09) AS GMC_09')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 ELSE 0 END AS GMES_P09')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S09")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_09) AS GACUMP_09')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_09) AS GACUMC_09')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 ELSE 0 END AS GACUM_P09')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S09") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_09) AS GMP_09')
								->selectRaw('SUM(SIEVAD_DPA.MESC_09) AS GMC_09')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 ELSE 0 END AS GMES_P09')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S09")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_09) AS GACUMP_09')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_09) AS GACUMC_09')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 ELSE 0 END AS GACUM_P09')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S09") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_09) AS GMP_09')
										->selectRaw('SUM(SIEVAD_DPA.MESC_09) AS GMC_09')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 ELSE 0 END AS GMES_P09')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S09")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_09) AS GACUMP_09')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_09) AS GACUMC_09')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 ELSE 0 END AS GACUM_P09')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S09") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_09) AS GMP_09')
										->selectRaw('SUM(SIEVAD_DPA.MESC_09) AS GMC_09')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 ELSE 0 END AS GMES_P09')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_09) > 0 And SUM(SIEVAD_DPA.MESC_09) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_09)/SUM(SIEVAD_DPA.MESP_09))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S09")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_09) AS GACUMP_09')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_09) AS GACUMC_09')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 ELSE 0 END AS GACUM_P09')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_09) > 0 And SUM(SIEVAD_DPA.ACUMC_09) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_09)/SUM(SIEVAD_DPA.ACUMP_09))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S09") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                
                break;                                             

            case '10':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_10) AS GMP_10')
							->selectRaw('SUM(SIEVAD_DPA.MESC_10) AS GMC_10')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 ELSE 0 END AS GMES_P10')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S10")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_10) AS GACUMP_10')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_10) AS GACUMC_10')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 ELSE 0 END AS GACUM_P10')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S10") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_10) AS GMP_10')
								->selectRaw('SUM(SIEVAD_DPA.MESC_10) AS GMC_10')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 ELSE 0 END AS GMES_P10')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S10")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_10) AS GACUMP_10')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_10) AS GACUMC_10')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 ELSE 0 END AS GACUM_P10')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S10") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_10) AS GMP_10')
										->selectRaw('SUM(SIEVAD_DPA.MESC_10) AS GMC_10')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 ELSE 0 END AS GMES_P10')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S10")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_10) AS GACUMP_10')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_10) AS GACUMC_10')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 ELSE 0 END AS GACUM_P10')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S10") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_10) AS GMP_10')
										->selectRaw('SUM(SIEVAD_DPA.MESC_10) AS GMC_10')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 ELSE 0 END AS GMES_P10')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_10) > 0 And SUM(SIEVAD_DPA.MESC_10) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_10)/SUM(SIEVAD_DPA.MESP_10))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S10")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_10) AS GACUMP_10')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_10) AS GACUMC_10')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 ELSE 0 END AS GACUM_P10')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_10) > 0 And SUM(SIEVAD_DPA.ACUMC_10) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_10)/SUM(SIEVAD_DPA.ACUMP_10))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S10") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                   
                break;

            case '11':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_11) AS GMP_11')
							->selectRaw('SUM(SIEVAD_DPA.MESC_11) AS GMC_11')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 ELSE 0 END AS GMES_P11')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S11")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_11) AS GACUMP_11')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_11) AS GACUMC_11')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 ELSE 0 END AS GACUM_P11')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*110 < 111 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S11") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_11) AS GMP_11')
								->selectRaw('SUM(SIEVAD_DPA.MESC_11) AS GMC_11')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 ELSE 0 END AS GMES_P11')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S11")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_11) AS GACUMP_11')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_11) AS GACUMC_11')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 ELSE 0 END AS GACUM_P11')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S11") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_11) AS GMP_11')
										->selectRaw('SUM(SIEVAD_DPA.MESC_11) AS GMC_11')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 ELSE 0 END AS GMES_P11')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S11")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_11) AS GACUMP_11')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_11) AS GACUMC_11')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 ELSE 0 END AS GACUM_P11')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S11") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_11) AS GMP_11')
										->selectRaw('SUM(SIEVAD_DPA.MESC_11) AS GMC_11')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 ELSE 0 END AS GMES_P11')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_11) > 0 And SUM(SIEVAD_DPA.MESC_11) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_11)/SUM(SIEVAD_DPA.MESP_11))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S11")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_11) AS GACUMP_11')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_11) AS GACUMC_11')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 ELSE 0 END AS GACUM_P11')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_11) > 0 And SUM(SIEVAD_DPA.ACUMC_11) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_11)/SUM(SIEVAD_DPA.ACUMP_11))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S11") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF              
                break; 

            case '12':
                if($depen_id == '0' && $taccion_id == '0' ){                                 
                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
							->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
    										CASE
												WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
		    									WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
		    									END
												ELSE NULL 
											END AS GANUAL_S") 

                            ->selectRaw('SUM(SIEVAD_DPA.MESP_12) AS GMP_12')
							->selectRaw('SUM(SIEVAD_DPA.MESC_12) AS GMC_12')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 ELSE 0 END AS GMES_P12')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  70 THEN 'NARANJA'
    									  	    WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GMES_S12")  

                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_12) AS GACUMP_12')
							->selectRaw('SUM(SIEVAD_DPA.ACUMC_12) AS GACUMC_12')
							->selectRaw('CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 ELSE 0 END AS GACUM_P12')  
							->selectRaw("CASE 
										 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN 
    										CASE
    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 > 110 THEN 'MORADO' 
    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 < 110 THEN 'VERDE'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  90 THEN 'AMARILLO'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  70 THEN 'NARANJA'
    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  50 THEN 'ROJO'
    										END
											ELSE NULL 
										END AS GACUM_S12") 

                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')
                           ->get(); 

                }else{
                    if($depen_id == '0' && $taccion_id <> '0' ){   
	                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
	                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
	                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
	                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

	                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
								->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
	    											END
													ELSE NULL 
											 END AS GANUAL_S") 

	                            ->selectRaw('SUM(SIEVAD_DPA.MESP_12) AS GMP_12')
								->selectRaw('SUM(SIEVAD_DPA.MESC_12) AS GMC_12')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 ELSE 0 END AS GMES_P12')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  70 THEN 'NARANJA'
	    									  	    WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GMES_S12")  

	                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_12) AS GACUMP_12')
								->selectRaw('SUM(SIEVAD_DPA.ACUMC_12) AS GACUMC_12')
								->selectRaw('CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 ELSE 0 END AS GACUM_P12')  
								->selectRaw("CASE 
											 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN 
	    										CASE
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 > 110 THEN 'MORADO' 
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 < 110 THEN 'VERDE'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  90 THEN 'AMARILLO'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  70 THEN 'NARANJA'
	    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  50 THEN 'ROJO'
	    										END
												ELSE NULL 
											END AS GACUM_S12") 

	                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
	                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	
	                           ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                       'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                           ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                           ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
	                           ->get();                     	
                    }else{
                        if($depen_id <> '0' && $taccion_id == '0' ){   
		                    return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
		                    	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_12) AS GMP_12')
										->selectRaw('SUM(SIEVAD_DPA.MESC_12) AS GMC_12')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 ELSE 0 END AS GMES_P12')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S12")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_12) AS GACUMP_12')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_12) AS GACUMC_12')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 ELSE 0 END AS GACUM_P12')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S12") 

  	                               ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
		                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
	                               ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                           'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                               ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                               ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	       
		                           ->get();     
                        }else{
                            if($depen_id <> '0' && $taccion_id <> '0' ){   
                                return regProgdAnualModel::join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID','=',
                                	                                                      'SIEVAD_DPA.DEPEN_ID2')
			                                 ->join('SIEVAD_EPA'           ,'SIEVAD_EPA.FOLIO','=','SIEVAD_DPA.FOLIO')
			                               ->select('SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
			                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC') 

			                            ->selectRaw('SUM(SIEVAD_DPA.TOTP_02) AS GTAP_02')
										->selectRaw('SUM(SIEVAD_DPA.TOTC_02) AS GTAC_02')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 ELSE 0 END AS GANUAL_P')							
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.TOTP_02) > 0 And SUM(SIEVAD_DPA.TOTC_02) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=90 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=70 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >=50 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 >  0 AND (SUM(SIEVAD_DPA.TOTC_02)/SUM(SIEVAD_DPA.TOTP_02))*100 <  50 THEN 'ROJO'
			    											END
															ELSE NULL 
													 END AS GANUAL_S") 

			                            ->selectRaw('SUM(SIEVAD_DPA.MESP_12) AS GMP_12')
										->selectRaw('SUM(SIEVAD_DPA.MESC_12) AS GMC_12')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 ELSE 0 END AS GMES_P12')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.MESP_12) > 0 And SUM(SIEVAD_DPA.MESC_12) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=90 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=70 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >=50 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  70 THEN 'NARANJA'
			    									  	    WHEN (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 >  0 AND (SUM(SIEVAD_DPA.MESC_12)/SUM(SIEVAD_DPA.MESP_12))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GMES_S12")  

			                            ->selectRaw('SUM(SIEVAD_DPA.ACUMP_12) AS GACUMP_12')
										->selectRaw('SUM(SIEVAD_DPA.ACUMC_12) AS GACUMC_12')
										->selectRaw('CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 ELSE 0 END AS GACUM_P12')  
										->selectRaw("CASE 
													 WHEN SUM(SIEVAD_DPA.ACUMP_12) > 0 And SUM(SIEVAD_DPA.ACUMC_12) > 0 THEN 
			    										CASE
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 > 110 THEN 'MORADO' 
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=90 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 < 110 THEN 'VERDE'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=70 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  90 THEN 'AMARILLO'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >=50 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  70 THEN 'NARANJA'
			    											WHEN (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 >  0 AND (SUM(SIEVAD_DPA.ACUMC_12)/SUM(SIEVAD_DPA.ACUMP_12))*100 <  50 THEN 'ROJO'
			    										END
														ELSE NULL 
													END AS GACUM_S12") 

			                           ->Where(    'SIEVAD_DPA.PERIODO_ID','=',$periodo_id)
			                           ->Where(    'SIEVAD_DPA.DEPEN_ID2' ,'=',$depen_id)	                           
			                           ->Where(    'SIEVAD_DPA.TACCION_ID','=',$taccion_id)	 
	                                   ->groupBy(  'SIEVAD_DPA.PERIODO_ID','SIEVAD_DPA.DEPEN_ID2',
	                                               'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC')
	                                   ->orderBy(  'SIEVAD_DPA.PERIODO_ID','ASC')                   
	                                   ->orderBy(  'SIEVAD_DPA.DEPEN_ID2' ,'ASC')	         
			                           ->get();                                 	
                            }    // END IF
                        }    //END IF
                    }    //END IF
                }    // ENDIF                          
                break;
        } //swith

    //dd($regOscModel);                           
    }

}
