<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\regDirdhsModel;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportDirdhsExcel implements FromCollection, /*FromQuery,*/ WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'PERIODO',
            'ID',
            'SUBSEC_ID',
            'SUBSECRETARÍA',
            'COORD_ID',
            'COORDINACIÓN_REGIONAL',
            'REGION_ROMANO',
            'REGION',
            'MUNICIPIO_ID',
            'MUNICIPIO',
            'CARGO',
            'RESPONSABLE',            
            'TEL_OFICINA',
            'CELULAR',
            'E_MAIL',
            'DOMICILIO',
            'FECHA_REG'
        ];
    }

    public function collection()
    {
        $depen_id = session()->get('depen_id'); 
        //********* Validar rol de usuario **********************/
        if(session()->get('rango') !== '0'){                          
            //return regPadronModel::join('PE_CAT_MUNICIPIOS_SEDESEM','PE_CAT_MUNICIPIOS_SEDESEM.MUNICIPIOID','=',
            //                                                        'PE_METADATO_PADRON.MUNICIPIO_ID') 
            //                ->wherein('PE_CAT_MUNICIPIOS_SEDESEM.ENTIDADFEDERATIVAID',[9,15,22])
            return regDirdhsModel::select('PERIODO_ID','DHS_ID',
                                          'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ROMANO','REGION_DESC',
                                          'MUNICIPIO_ID','MUNICIPIO_DESC',
                                          //'CARGO_ID',
                                          'CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                                          //'DHS_FOTO1','DHS_FOTO2','DHS_OBS1','DHS_OBS2','DHS_STATUS1','DHS_STATUS2',
                                          'FECREG'      
                                         )
                                   ->orderBy('PERIODO_ID'  ,'ASC')
                                   ->orderBy('SUBSEC_ID'   ,'ASC')
                                   ->orderBy('COORD_ID'    ,'ASC')
                                   ->orderBy('REGION_ID'   ,'ASC')
                                   ->orderBy('MUNICIPIO_ID','ASC')
                                   ->orderBy('DHS_ID'      ,'ASC')
                                   ->get();                               
        }else{
            return regDirdhsModel::select('PERIODO_ID','DHS_ID',
                                          'SUBSEC_ID','SUBSEC_DESC','COORD_ID','COORD_DESC','REGION_ROMANO','REGION_DESC',
                                          'MUNICIPIO_ID','MUNICIPIO_DESC',
                                          'CARGO_DESC','DHS_RESPON','DHS_TELOFIC','DHS_TELEFONO','DHS_EMAIL','DHS_DOM',
                                          'FECREG'      
                                         )
                                   ->where(  'SUBSEC_ID'   ,$depen_id)            
                                   ->orderBy('PERIODO_ID'  ,'ASC')
                                   ->orderBy('SUBSEC_ID'   ,'ASC')
                                   ->orderBy('COORD_ID'    ,'ASC')
                                   ->orderBy('REGION_ID'   ,'ASC')
                                   ->orderBy('MUNICIPIO_ID','ASC')
                                   ->orderBy('DHS_ID'      ,'ASC')
                                   ->get();               
        }                            
    }
}
