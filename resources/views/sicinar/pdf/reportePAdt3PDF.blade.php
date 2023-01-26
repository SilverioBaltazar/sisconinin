@extends('sicinar.pdf.layout')

@section('content')
    <head>      
        <style>
        @page { margin-top: 30px; margin-bottom: 30px; margin-left: 50px; margin-right: 30px; } 
        body{color: #767676;background: #fff;font-family: 'Open Sans',sans-serif;font-size: 12px;}
        h1 {
        page-break-before: always;
        }

        #header { position: fixed; left: 0px; top: 0px; right: 0px; height: 375px; }
        #content{ 
                  left: 40px; top: 0px; margin-bottom: 0px; right: 40px;
                  border: solid 0px #000;
                  font: 1em arial, helvetica, sans-serif;
                  color: black; text-align:left;vertical-align: middle; width:1000px;}   
        #footer { position: fixed; left: 0px; bottom: -10px; right: 0px; height: 60px; text-align:right; font-size: 8px;}
        #footer .page:after { content: counter(page); }        
        </style>
    </head>
    <!--<h1 class="page-header">Listado de productos</h1>-->
    <body>
    <div id="header">
        <p style="border:0; font-family:'Arial, Helvetica, sans-serif'; font-size:11px; text-align:center;">
            <img src="{{ asset('images/Gobierno.png') }}" alt="EDOMEX" width="90px" height="55px" style="margin-right: 15px;" align="left"/>            
            &nbsp;&nbsp;INFORME DE AVANCE DEL PROGRAMA ANUAL (PA)
            <img src="{{ asset('images/Edomex.png') }}" alt="EDOMEX" width="80px" height="55px" style="margin-left: 15px;" align="right"/>
        </p>
    </div>

    <section id="content">
        <table class="table table-hover table-striped" align="center" width="100%"> 
            <tr>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
            </tr>            
            <tr>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
            </tr> 
            <tr>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
            </tr> 
            
            @foreach($regprogdanual as $encpa)
            <tr>
                <td style="border:0; text-align:left;font-size:10px;"  >
                    Programa: <b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{$encpa->epprog_id}}&nbsp;
                    @foreach($regepprog as $prog)
                        @if($prog->epprog_id == $encpa->epprog_id)
                            {{Trim($prog->epprog_desc)}}
                            @break
                        @endif
                    @endforeach 
                    </b><br>                    
                    Proyecto: <b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;{{$encpa->epproy_id}}&nbsp;
                    @foreach($regepproy as $proy)
                        @if($proy->epproy_id == $encpa->epproy_id)
                            {{Trim($proy->epproy_desc)}}
                            @break
                        @endif
                    @endforeach
                    </b><br>                    
                    Unidad responsable: <b>{{$encpa->depen_id1}}&nbsp;
                    @foreach($regdepen as $depen)
                        @if($depen->depen_id == $encpa->depen_id1)
                            {{Trim($depen->depen_desc)}}
                            @break
                        @endif
                    @endforeach
                    </b><br>                    
                    Unidad ejecutora: <b>
                    &nbsp;&nbsp;&nbsp;&nbsp;{{$encpa->depen_id2}}&nbsp;
                    @foreach($regdepen as $depen)
                        @if($depen->depen_id == $encpa->depen_id2)
                            {{Trim($depen->depen_desc)}}
                            @break
                        @endif
                    @endforeach
                    </b>              
                </td>
 
                <td style="border:0; text-align:left;font-size:10px;">
                    Fecha de entrega:<b>&nbsp;{{$encpa->fecha_entrega2}}</b>
                    <br>
                    Tipo: <b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    @foreach($regtipometa as $tipo)
                        @if($tipo->taccion_id == $encpa->taccion_id)
                            {{$tipo->taccion_desc}}
                            @break 
                        @endif
                    @endforeach
                    </b>
                    <br> 
                    Periodo fiscal:<b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{$encpa->periodo_id}}</b>
                    <br>
                    Folio:<b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;
                    {{$encpa->folio}}
                    </b><br>
                    Trimestre: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    {{$trim}}
                    </b>
                </td>
            </tr>
            @break
            @endforeach             
        </table>

        <!-- ::::::::::::::::::::::: titulos ::::::::::::::::::::::::: -->
        <table class="table table-sm" align="center">
        <thead>        
        <tr>
            <th style="background-color:darkgreen;text-align:left;">        </th>
            <th style="background-color:darkgreen;text-align:left;">        </th>
            <th style="background-color:darkgreen;text-align:left;"><b style="color:white;font-size:10px;">Unidad </b></th>
            <th style="background-color:darkgreen;text-align:left;"><b style="color:white;font-size:10px;">Meta   </b></th>
            <th colspan="3" style="background-color:darkgreen; text-align:center;"><b style="color:white;font-size:10px;">Julio     </b></th>
            <th colspan="3" style="background-color:darkgreen; text-align:center;"><b style="color:white;font-size:10px;">Agosto    </b></th>
            <th colspan="3" style="background-color:darkgreen; text-align:center;"><b style="color:white;font-size:10px;">Septiembre</b></th>
            <th colspan="4" style="background-color:darkorange;text-align:center;"><b style="color:white;font-size:10px;">Trimestre &nbsp;{{$trim}}</b></th>
            <th colspan="4" style="background-color:purple;    text-align:center;"><b style="color:white;font-size:10px;">Acum. al periodo</b></th>
        </tr>                                
        <tr>
            <th style="background-color:darkgreen;text-align:center;vertical-align: middle;"><b style="color:white;font-size:10px;">#</b>
            </th>
            <th style="background-color:darkgreen;text-align:center;vertical-align: middle;"><b style="color:white;font-size:10px;">Acción o meta</b>
            </th>
            <th style="background-color:darkgreen;text-align:left;" ><b style="color:white;font-size:10px;">Medida</b></th>  
            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">Anual </b></th>                         

            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">Prog. </b></th>  
            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">Real </b></th>  
            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">%     </b></th>  

            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">Prog. </b></th>  
            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">Real </b></th>  
            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">%     </b></th>  

            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">Prog. </b></th>  
            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">Real </b></th>  
            <th style="background-color:darkgreen;text-align:right;"><b style="color:white;font-size:10px;">%     </b></th>  

            <th style="background-color:darkorange;text-align:right;" ><b style="color:white;font-size:10px;">Prog. </b></th>  
            <th style="background-color:darkorange;text-align:right;" ><b style="color:white;font-size:10px;">Real </b></th>  
            <th style="background-color:darkorange;text-align:right;" ><b style="color:white;font-size:10px;">%     </b></th>  
            <th style="background-color:darkorange;text-align:center;"><b style="color:white;font-size:10px;">sf.   </b></th> 

            <th style="background-color:purple;text-align:right;" ><b style="color:white;font-size:10px;">Prog. </b></th>  
            <th style="background-color:purple;text-align:right;" ><b style="color:white;font-size:10px;">Real </b></th>  
            <th style="background-color:purple;text-align:right;" ><b style="color:white;font-size:10px;">%     </b></th>  
            <th style="background-color:purple;text-align:center;"><b style="color:white;font-size:10px;">sf.   </b></th>  
            </th>               
        </tr>
        </thead>

        <tbody>
            @foreach($regprogdanual as $detpa)
                <tr>
                    <td style="text-align:center; vertical-align: middle;font-size:8px;"><p align="justify">{{$detpa->partida}}        </p></td>
                    <td style="text-align:center; vertical-align: middle;font-size:7px;"><p align="justify">{{$detpa->actividad_desc}} </p></td>
                    <td style="text-align:justify;vertical-align: middle;font-size:7px;"><p align="justify">{{trim($detpa->umed_desc)}}</p></td>

                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->meta_programada,0)}}</td>                         

                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mesp_07,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mesc_07,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mes_p07,2)}}</td> 

                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mesp_08,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mesc_08,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mes_p08,2)}}</td>

                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mesp_09,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mesc_09,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->mes_p09,2)}}</td>

                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->trimp_03,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->trimc_03,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->trim_p03,2)}}</td>
                    <td style="text-align:center;vertical-align: middle;font-size:09px;">  
                    @switch($detpa->semaft_03)
                        @case('1')
                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="12px" height="12px" /> 
                            @break
                        @case('2')
                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="12px" height="12px" /> 
                            @break
                        @case('3')
                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="12px" height="12px" /> 
                            @break
                        @case('4')
                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="12px" height="12px" /> 
                            @break                                            
                        @case('5')
                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="12px" height="12px" /> 
                            @break                                                                          
						@case('0')  
						    @break
                        @default
                            @break
                    @endswitch
                    </td>                                                                                  

                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->totp_02,0)}} </td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->totc_02,0)}}</td>
                    <td style="text-align:right; vertical-align: middle;font-size:09px;">{{number_format($detpa->tot_p01,2)}} </td>
                    <td style="text-align:center;vertical-align: middle;font-size:09px;">  
                    @switch($detpa->semafa_01)
                        @case('1')
                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="12px" height="12px" /> 
                            @break
                        @case('2')
                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="12px" height="12px" /> 
                            @break
                        @case('3')
                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="12px" height="12px" /> 
                            @break
                        @case('4')
                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="12px" height="12px" /> 
                            @break                                            
                        @case('5')
                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="12px" height="12px" /> 
                            @break                                                                          
						@case('0')  
						    @break
                        @default
                            @break
                    @endswitch
                    </td>                                  
                </tr> 
            @endforeach
        </table>
       
        <!-- ::::::::::::::::::::::: titulos ::::::::::::::::::::::::: -->
        <table class="table table-sm" align="center">
            @foreach($regprogdanual as $encpa)
            <tr>
                <td style="border:0;text-align:center;font-size:10px;">
                Elaboró<br><br>
                ______________________________<br>
                <b>{{$encpa->responsable}}</b><br>
                <b>{{$encpa->resp_cargo}}</b>
                </td>
                <td style="border:0;text-align:center;font-size:10px;">
                Revisó<br><br>
                ______________________________<br>
                <b>{{$encpa->elaboro}}</b>    <br>
                <b>{{$encpa->elab_cargo}}</b>
                </td>
                <td style="border:0;text-align:center;font-size:10px;">
                Autorizó<br><br>
                ______________________________<br>
                <b>{{$encpa->autorizo}}</b><br>
                <b>{{$encpa->auto_cargo}}</b>
                </td>                
            </tr>
            <tr>
                <td style="border:0;text-align:left;  font-size:10px;">  </td>
                <td style="border:0;text-align:center;font-size:10px;">  </td>
                <td style="border:0;text-align:right ;font-size:10px;">
                Fecha de emisión:<b> Toluca de Lerdo, México a {{date('d')}} de {{strftime("%B")}} de {{date('Y')}} </b>
                </td>                 
            </tr>
            <tr>
                <td style="border:0;text-align:left;">  
                    <!-- 
                    insert your custom barcode setting your data in the GET parameter "data"  **** si funciona code128 ***
                    https://barcode.tec-it.com/es/Code128?data=ABC-abc-1234
                    <img src='https://barcode.tec-it.com/barcode.ashx?data=ABC-abc-1234&code=Code128&dpi=96&dataseparator=' alt=''/>

                    insert your custom barcode setting your data in the GET parameter "data"  **** si funciona code39 ***
                    https://barcode.tec-it.com/es/Code39?data=ABC-1234
                    <img src='https://barcode.tec-it.com/barcode.ashx?data=ABC-1234&code=Code39&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=&qunit=Mm&quiet=0' align="right"/>
                    -->
                    <img src='https://barcode.tec-it.com/barcode.ashx?data={{$encpa->folio}}&code=Code39&multiplebarcodes=false&translate-esc=false&unit=Fit&dpi=76&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=&qunit=Mm&quiet=0' align="left"/>
                </td>
                <td style="border:0;text-align:center;font-size:09px;">  </td>                
                <td align="right">
                    <img src = "https://api.qrserver.com/v1/create-qr-code/?data=http://187.216.191.89&size=100x100" alt="" title="" align="right" border="0"/>
                </td>
            </tr>             
            @break
            @endforeach            
        </table>
        </tbody>
    </section>

    <footer id="footer">
        <table class="table table-hover table-striped" align="center" width="100%">
            <tr>
                <td style="text-align:right;">
                    <b style="border:0; text-align:right; font-size:12px;">
                    Secretaría de Desarrollo Social
                    </b>
                    <br>
                    <b style="border:0; text-align:right;font-size: 9px;">
                    Unidad de Información, Planeación, Programación y Evaluación
                    </b>
                    <br>
                    <b style="border:0; text-align:right;font-size: 7px;">
                    Heriberto Enriquez No. 209, Col. Cuauhtémoc. C.P. 50130. Toluca, Estado de México. <br>
                    Tel.: 1 99 70 90. Correo electrónico: uippe.sedesem@edomex.gob.mx
                    </b>
                </td>
            </tr>
        </table>
    </footer>    
    </body>
@endsection

@section('javascrpt')
<!-- link de referencia de este ejmplo   http://www.ertomy.es/2018/07/generando-pdfs-con-laravel-5/ -->
<!-- si el PDF tiene varias páginas entonces hay que meter numeración de las paginas. 
     Para ello tendremos que poner el siguiente código en la plantilla: -->
<script type="text/php">
    $text = 'Página {PAGE_NUM} de {PAGE_COUNT}';
    $font = Font_Metrics::get_font("sans-serif");
    $pdf->page_text(493, 800, $text, $font, 7);
</script>
@endsection
