<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
//use Maatwebsite\Excel\Concerns\FromArray;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use Maatwebsite\Excel\Concerns\WithTitle;

//use App\regPeriodosModel;

// class ExcelExportProgramavisitas implements FromQuery,  WithHeadings   ojo jala con el query************
//class ExcelExportCobranzaFacturas implements FromCollection, /*FromQuery,*/ WithHeadings, WithTitle
//class ExcelExportCobranzaFacturas implements FromQuery, WithHeadings /*, WithTitle */
//class ExcelExportCobranzaFacturas implements FromArray 
class ExcelRepBitarendiDet implements FromCollection, WithHeadings
{

    use Exportable;

    //********** Parámetros de filtro del query *******************//
    //protected $regfactura;
    protected $periodo_id;
    protected $trim;
    protected $folio; 
    //protected $cliee;
 
    public function __construct($regprogdanual, $periodo_id, $trim, $folio)
    {
        $this->regprogdanual = $regprogdanual;
        $this->periodo_id= $periodo_id;
        $this->trim      = $trim;
        $this->folio     = $folio;
        //$this->empp    = $empp;
    }

    public function array(): array
    {
        return [
            $this->regprogdanual
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        $trim = $this->trim;
        // Selecciona el trimestre
        switch ($request->trim) {
            case '1':    //trim 1
                return ['PERIODO','FOLIO','MES',
            'QUINCENA',
            'UNIDAD_ADMINISTRATIVA_ID',        
            'UNIDAD_ADMINISTRATIVA',
            'RESGUARDATARIO',            
            'CODIGO',            
            'PLACAS',              
            'FOLIO_SICOCO',        
            'NO_SERVICIO',            
            'FECHA',        
            'SERVIDOR_PUBLICO',
            'DOTACIÓN_$',
            'R',
            '1/8',
            '1/4',
            '1/2',        
            '3/8', 
            'F', 
            'LUGAR_COMISION',
            'HR_SAL',
            'RH_REG',
            'KM_INICIAL',                       
            'KM_FINAL',
            'KMS',
            'COMP_SI',
            'COMP_PEND',
            'COMP_NO',
            'PDF',
            'ARC_PDF'                     
        ];

                break;
            case '2':    //trim 2            
                        return Excel::download(new ExcelExportPAdtrim($regprogdanual,$request->periodo_id, $request->trim, $request->folio, $request->tipog_id), 
                                              'PADetalladoTrimestral_'.date('d-m-Y').'.xlsx');
                break;
            case '3':    //trim 3
                        return Excel::download(new ExcelExportPAdtrim($regprogdanual,$request->periodo_id, $request->trim, $request->folio, $request->tipog_id), 
                                              'PADetalladoTrimestral_'.date('d-m-Y').'.xlsx');
                break;  
            case '4':    //trim 4
                        return Excel::download(new ExcelExportPAdtrim($regprogdanual,$request->periodo_id, $request->trim, $request->folio, $request->tipog_id), 
                                              'PADetalladoTrimestral_'.date('d-m-Y').'.xlsx');
                break;  
        }   // switch ($request->tipo) --- Termina tipo de reporte pantalla, excel o PDF          

    }


    public function collection()
    {
        //dd('reg:'.$this->regfactura, 'Periodo:'.$this->perr,'Mes:'.$this->mess,'Dia:'.$this->diaa,'Cliente:'.$this->cliee);
        //$arbol_id     = session()->get('arbol_id');  
        //$id           = session()->get('sfolio');   
        return $this->regprogdanual;
    }

    /**
     * @return string
     */
    //public function title(): string
    //{
    //    return 'Mes ' . $this->mess;
    //}

    public function query()
    {
        //return  regEfacturaModel::query()
        $regprogdanual = $this->regprogdanual;
        return regProgdAnualModel::query()
                                 ->get();                                                           
    }

    //public function query()
    //{
    //    return  regAgendaModel::query()
    //            ->where( ['PERIODO_ID'   => $this->periodo, 
    //                      'MES_ID'       => $this->mes,
    //                      'VISITA_TIPO1' => $this->tipo]);   
    //                        //->get();                                                           
    //}

}
