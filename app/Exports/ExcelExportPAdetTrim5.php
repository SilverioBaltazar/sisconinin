<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\regProgdAnualModel;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExportPAdetTrim4 implements FromCollection, /*FromQuery,*/ WithHeadings
{

    //use Exportable;

    //********** Parámetros de filtro del query *******************//
    //private $periodo;
    //private $mes;
    //private $depen;
    //private $tipo;
    private $folio;
 
    //public function __construct($regprogdanual, $periodo, $mes, $depen, $tipo)
    public function __construct($folio)
    {
        //$this->regprogdanual= $regprogdanual;
        //$this->periodo      = $periodo;
        //$this->mes          = $mes;
        //$this->depen        = $depen;
        //
        $this->folio          = $folio;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'PERIODO_ID',
            'UNID_EJEC_ID',
            'UNID_EJECUTORA',            
            'UNID_OP_ID',
            'EPPROG_ID',
            'EP_PROGRAMA',            
            'EPPROY_ID',
            'EP_PROYECTO',            
            'FOLIO',  
            'NO',
            'SPP',
            'IGOB',

            'ACCION_META',
            'OBJETIVO',
            'UMED_ID',
            'UNIDAD_MEDIDA',
            'META_ANUAL_PROG',
            'META_ANUAL_PROG',

            'ENE_PROG',
            'ENE_REAL',
            'ENE_%',
            'ENE_VALOR_SMF',           

            'FEB_PROG',
            'FEB_REAL',
            'FEB_%',
            'FEB_VALOR_SMF',

            'MAR_PROG',
            'MAR_REAL',
            'MAR_%',
            'MAR_VALOR_SMF',

            'TRIM1_PROG',
            'TRIM1_REAL',
            'TRIM1_%',     
            'TRIM1_VALOR_SMF',       

            'ABR_PROG',
            'ABR_REAL',
            'ABR_%',
            'ABR_VALOR_SMF',           

            'MAY_PROG',
            'MAY_REAL',
            'MAY_%',
            'MAY_VALOR_SMF',

            'JUN_PROG',
            'JUN_REAL',
            'JUN_%',
            'JUN_VALOR_SMF',

            'TRIM2_PROG',
            'TRIM2_REAL',
            'TRIM2_%',     
            'TRIM2_VALOR_SMF',       

            'JUL_PROG',
            'JUL_REAL',
            'JUL_%',
            'JUL_VALOR_SMF',           

            'AGO_PROG',
            'AGO_REAL',
            'AGO_%',
            'AGO_VALOR_SMF',

            'SEP_PROG',
            'SEP_REAL',
            'SEP_%',
            'SEP_VALOR_SMF',

            'TRIM3_PROG',
            'TRIM3_REAL',
            'TRIM3_%',     
            'TRIM3_VALOR_SMF', 

            'OCT_PROG',
            'OCT_REAL',
            'OCT_%',
            'OCT_VALOR_SMF',           

            'NOV_PROG',
            'NOV_REAL',
            'NOV_%',
            'NOV_VALOR_SMF',

            'DIC_PROG',
            'DIC_REAL',
            'DIC_%',
            'DIC_VALOR_SMF',

            'TRIM4_PROG',
            'TRIM4_REAL',
            'TRIM4_%',     
            'TRIM4_VALOR_SMF', 

            'ACUM_ANUAL_PROG',
            'ACUM_ANUAL_REAL',
            'ACUM_ANUAL_%',
            'ACUM_ANUAL_VALOR_SMF',

            'DESCRIP_OPERACIONAL',
            'RESPONSABLE',
            'RESP_CARGO',
            'ELABORO',
            'ELAB_CARGO',
            'AUTORIZO',
            'AUTO_CARGO',
            'COLOR_SMF_ENE',
            'COLOR_SMF_FEB',
            'COLOR_SMF_MAR',
            'COLOR_SMF_TRIM1',
            
            'COLOR_SMF_ABR',
            'COLOR_SMF_MAY',
            'COLOR_SMF_JUN',
            'COLOR_SMF_TRIM2',            
            
            'COLOR_SMF_JUL',
            'COLOR_SMF_AGO',
            'COLOR_SMF_SEP',
            'COLOR_SMF_TRIM3',             

            'COLOR_SMF_OCT',
            'COLOR_SMF_NOV',
            'COLOR_SMF_DIC',
            'COLOR_SMF_TRIM4',             

            'COLOR_SMF_ACUM_ANUAL'
        ];
    }

    public function collection()
    {
        $folio = $this->folio;
        //dd($folio); 
        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA','SIEVAD_CAT_UMEDIDA.UMED_ID','=','SIEVAD_DPA.UMED_ID')
                                 ->join('SIEVAD_CAT_DEPENDENCIAS','SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID' ,'=','SIEVAD_DPA.DEPEN_ID1')
                                 //->join('SIEVAD_CAT_DEPENDENCIAS AS DEP_OPE','DEP_OP.DEPEN_ID' ,'=','SIEVAD_DPA.DEPEN_ID2')
                                 ->join('SIEVAD_CAT_EP_PROGRAMA' ,'SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID','=','SIEVAD_DPA.EPPROG_ID')
                                 ->join('SIEVAD_CAT_EP_PROYECTO' ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID','=','SIEVAD_DPA.EPPROY_ID')      
                                 ->join('SIEVAD_EPA'             ,'SIEVAD_EPA.FOLIO'    ,'=','SIEVAD_DPA.FOLIO')
                               ->select(
                                        'SIEVAD_EPA.PERIODO_ID',
                                        'SIEVAD_EPA.DEPEN_ID1',
                                        'SIEVAD_CAT_DEPENDENCIAS.DEPEN_DESC', 
                                        'SIEVAD_EPA.DEPEN_ID2',
                                        'SIEVAD_EPA.EPPROG_ID',
                                        'SIEVAD_CAT_EP_PROGRAMA.EPPROG_DESC', 
                                        'SIEVAD_EPA.EPPROY_ID',
                                        'SIEVAD_CAT_EP_PROYECTO.EPPROY_DESC',
                                        'SIEVAD_EPA.FOLIO',  
                                        'SIEVAD_DPA.PARTIDA', 
                                        'SIEVAD_DPA.CIPREP_ID',
                                        'SIEVAD_DPA.LGOB_COD',
                                          
                                        'SIEVAD_DPA.ACTIVIDAD_DESC', 
                                        'SIEVAD_DPA.OBJETIVO_DESC',                                  
                                        'SIEVAD_DPA.UMED_ID', 
                                        'SIEVAD_CAT_UMEDIDA.UMED_DESC', 
                                        'SIEVAD_DPA.TOTP_01',
                                        'SIEVAD_DPA.TOTP_02',

                                        'SIEVAD_DPA.MESP_01', 
                                        'SIEVAD_DPA.MESC_01',
                                        'SIEVAD_DPA.MES_P01',
                                        'SIEVAD_DPA.SEMAF_01',

                                        'SIEVAD_DPA.MESP_02', 
                                        'SIEVAD_DPA.MESC_02',
                                        'SIEVAD_DPA.MES_P02',
                                        'SIEVAD_DPA.SEMAF_02',

                                        'SIEVAD_DPA.MESP_03', 
                                        'SIEVAD_DPA.MESC_03',
                                        'SIEVAD_DPA.MES_P03',
                                        'SIEVAD_DPA.SEMAF_03',

                                        'SIEVAD_DPA.TRIMP_01',
                                        'SIEVAD_DPA.TRIMC_01',
                                        'SIEVAD_DPA.TRIM_P01',
                                        'SIEVAD_DPA.SEMAFT_01',

                                        'SIEVAD_DPA.MESP_04', 
                                        'SIEVAD_DPA.MESC_04',
                                        'SIEVAD_DPA.MES_P04',
                                        'SIEVAD_DPA.SEMAF_04',

                                        'SIEVAD_DPA.MESP_05', 
                                        'SIEVAD_DPA.MESC_05',
                                        'SIEVAD_DPA.MES_P05',
                                        'SIEVAD_DPA.SEMAF_05',

                                        'SIEVAD_DPA.MESP_06', 
                                        'SIEVAD_DPA.MESC_06',
                                        'SIEVAD_DPA.MES_P06',
                                        'SIEVAD_DPA.SEMAF_06',

                                        'SIEVAD_DPA.TRIMP_02',
                                        'SIEVAD_DPA.TRIMC_02',
                                        'SIEVAD_DPA.TRIM_P02',
                                        'SIEVAD_DPA.SEMAFT_02',

                                        'SIEVAD_DPA.MESP_07', 
                                        'SIEVAD_DPA.MESC_07',
                                        'SIEVAD_DPA.MES_P07',
                                        'SIEVAD_DPA.SEMAF_07',

                                        'SIEVAD_DPA.MESP_08', 
                                        'SIEVAD_DPA.MESC_08',
                                        'SIEVAD_DPA.MES_P08',
                                        'SIEVAD_DPA.SEMAF_08',

                                        'SIEVAD_DPA.MESP_09', 
                                        'SIEVAD_DPA.MESC_09',
                                        'SIEVAD_DPA.MES_P09',
                                        'SIEVAD_DPA.SEMAF_09',

                                        'SIEVAD_DPA.TRIMP_03',
                                        'SIEVAD_DPA.TRIMC_03',
                                        'SIEVAD_DPA.TRIM_P03',
                                        'SIEVAD_DPA.SEMAFT_03',


                                        'SIEVAD_DPA.MESP_10', 
                                        'SIEVAD_DPA.MESC_10',
                                        'SIEVAD_DPA.MES_P10',
                                        'SIEVAD_DPA.SEMAF_10',

                                        'SIEVAD_DPA.MESP_11', 
                                        'SIEVAD_DPA.MESC_11',
                                        'SIEVAD_DPA.MES_P11',
                                        'SIEVAD_DPA.SEMAF_11',

                                        'SIEVAD_DPA.MESP_12', 
                                        'SIEVAD_DPA.MESC_12',
                                        'SIEVAD_DPA.MES_P12',
                                        'SIEVAD_DPA.SEMAF_12',

                                        'SIEVAD_DPA.TRIMP_04',
                                        'SIEVAD_DPA.TRIMC_04',
                                        'SIEVAD_DPA.TRIM_P04',
                                        'SIEVAD_DPA.SEMAFT_04',

                                        'SIEVAD_DPA.TOTC_01',
                                        'SIEVAD_DPA.TOTC_02',
                                        'SIEVAD_DPA.TOT_P01',
                                        'SIEVAD_DPA.SEMAFA_01',

                                        'SIEVAD_DPA.OPERACIONAL_DESC',
                                        'SIEVAD_EPA.RESPONSABLE',
                                        'SIEVAD_EPA.RESP_CARGO',
                                        'SIEVAD_EPA.ELABORO',
                                        'SIEVAD_EPA.ELAB_CARGO',                                        
                                        'SIEVAD_EPA.AUTORIZO',
                                        'SIEVAD_EPA.AUTO_CARGO'
                                       )
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_01 
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_ENE")  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_02 
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_FEB")                              
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_03
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_MAR")      
                            ->selectRaw("CASE SIEVAD_DPA.SEMAFT_01 
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_TRIM1")     
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_04
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_ABR")  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_05
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_MAY")                              
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_06
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_JUN")                                                  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAFT_02 
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_TRIM2")     

                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_07
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_JUL")  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_08
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_AGO")                              
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_09
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_SEP")                                                  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAFT_03 
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_TRIM3")     

                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_10
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_OCT")  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_11
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_NOV")                              
                            ->selectRaw("CASE SIEVAD_DPA.SEMAF_12
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_DIC")                                                  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAFT_04
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_TRIM4")  
                            ->selectRaw("CASE SIEVAD_DPA.SEMAFA_01 
                                              WHEN 1 THEN 'ROJO'
                                              WHEN 2 THEN 'NARANJA'
                                              WHEN 3 THEN 'AMARILLO'
                                              WHEN 4 THEN 'VERDE'                                              
                                              WHEN 5 THEN 'MORADO'
                                         END AS SF_REAL_ANUAL")                              
                             ->Where(   'SIEVAD_DPA.FOLIO','=',$folio)  
                             ->orderBy( 'SIEVAD_DPA.PERIODO_ID','ASC')                   
                             ->orderBy( 'SIEVAD_DPA.FOLIO'     ,'ASC')
                             ->orderBy( 'SIEVAD_DPA.PARTIDA'   ,'ASC')
                             ->get(); 
    //dd($regOscModel);                           
    }

}
