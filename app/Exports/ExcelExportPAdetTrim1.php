<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\regProgdAnualModel;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExportPAdetTrim1 implements FromCollection, /*FromQuery,*/ WithHeadings
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
            'ANUAL_META_PROG',
            'ANUAL_META_PROG',

            'ENE_PROG',
            'ENE_REAL',
            'ENE_%',
            'ENE_SMF',           

            'FEB_PROG',
            'FEB_REAL',
            'FEB_%',
            'FEB_SMF',

            'MAR_PROG',
            'MAR_REAL',
            'MAR_%',
            'MAR_SMF',

            'TRIM1_PROG',
            'TRIM1_REAL',
            'TRIM1_%',     
            'TRIM1_SMF',       

            'ANUAL_ACUM_PROG',
            'ANUAL_ACUM_REAL',
            'ANUAL_ACUM_%',
            'ANUAL_ACUM_SMF',

            'DESCRIP_OPERACIONAL',
            'RESPONSABLE',
            'RESP_CARGO',
            'ELABORO',
            'ELAB_CARGO',
            'AUTORIZO',
            'AUTO_CARGO'
        ];
    }

    public function collection()
    {
        $folio = $this->folio;
        //dd($folio); 
        return regProgdAnualModel::join('SIEVAD_CAT_UMEDIDA'       ,'SIEVAD_CAT_UMEDIDA.UMED_ID'        ,'=','SIEVAD_DPA.UMED_ID')
                                 ->join('SIEVAD_CAT_DEPENDENCIAS'  ,'SIEVAD_CAT_DEPENDENCIAS.DEPEN_ID'  ,'=','SIEVAD_DPA.DEPEN_ID1')
                                 ->join('SIEVAD_CAT_EP_PROGRAMA'   ,'SIEVAD_CAT_EP_PROGRAMA.EPPROG_ID'  ,'=','SIEVAD_DPA.EPPROG_ID')
                                 ->join('SIEVAD_CAT_EP_PROYECTO'   ,'SIEVAD_CAT_EP_PROYECTO.EPPROY_ID'  ,'=','SIEVAD_DPA.EPPROY_ID')      
                                 ->join('SIEVAD_CAT_COLORES_01'    ,'SIEVAD_CAT_COLORES_01.COLOR_ID'    ,'=','SIEVAD_DPA.SEMAF_01') 
                                 ->join('SIEVAD_CAT_COLORES_02'    ,'SIEVAD_CAT_COLORES_02.COLOR_ID'    ,'=','SIEVAD_DPA.SEMAF_02') 
                                 ->join('SIEVAD_CAT_COLORES_03'    ,'SIEVAD_CAT_COLORES_03.COLOR_ID'    ,'=','SIEVAD_DPA.SEMAF_03') 
                                 ->join('SIEVAD_CAT_COLORES_TRIM01','SIEVAD_CAT_COLORES_TRIM01.COLOR_ID','=','SIEVAD_DPA.SEMAFT_01') 
                                 ->join('SIEVAD_CAT_COLORES_ANUAL' ,'SIEVAD_CAT_COLORES_ANUAL.COLOR_ID' ,'=','SIEVAD_DPA.SEMAFA_01') 
                                 ->join('SIEVAD_EPA'               ,'SIEVAD_EPA.FOLIO'                  ,'=','SIEVAD_DPA.FOLIO')
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
                                        'SIEVAD_CAT_COLORES_01.COLOR_COLOR AS MES_S01', 

                                        'SIEVAD_DPA.MESP_02', 
                                        'SIEVAD_DPA.MESC_02',
                                        'SIEVAD_DPA.MES_P02',
										'SIEVAD_CAT_COLORES_02.COLOR_COLOR AS MES_S02', 

                                        'SIEVAD_DPA.MESP_03', 
                                        'SIEVAD_DPA.MESC_03',
                                        'SIEVAD_DPA.MES_P03',
                                        'SIEVAD_DPA.SEMAF_03',
                                        'SIEVAD_CAT_COLORES_03.COLOR_COLOR AS MES_S03', 
                                         
                                        'SIEVAD_DPA.TRIMP_01',
                                        'SIEVAD_DPA.TRIMC_01',
                                        'SIEVAD_DPA.TRIM_P01',
                                        'SIEVAD_CAT_COLORES_TRIM01.COLOR_COLOR AS TRIM_S01', 

                                        'SIEVAD_DPA.TOTP_02',
                                        'SIEVAD_DPA.TOTC_02',
                                        'SIEVAD_DPA.TOT_P01',
                                        'SIEVAD_DPA.SEMAFA_01',
                                        'SIEVAD_CAT_COLORES_ANUAL.COLOR_COLOR AS ANUAL_S', 

                                        'SIEVAD_DPA.OPERACIONAL_DESC',
                                        'SIEVAD_EPA.RESPONSABLE',
                                        'SIEVAD_EPA.RESP_CARGO',
                                        'SIEVAD_EPA.ELABORO',
                                        'SIEVAD_EPA.ELAB_CARGO',                                        
                                        'SIEVAD_EPA.AUTORIZO',
                                        'SIEVAD_EPA.AUTO_CARGO'
                                       )
                             ->Where(   'SIEVAD_DPA.FOLIO','=',$folio)  
                             ->orderBy( 'SIEVAD_DPA.PERIODO_ID','ASC')                   
                             ->orderBy( 'SIEVAD_DPA.FOLIO'     ,'ASC')
                             ->orderBy( 'SIEVAD_DPA.PARTIDA'   ,'ASC')
                             ->get(); 
    //dd($regOscModel);                           
    }

}
