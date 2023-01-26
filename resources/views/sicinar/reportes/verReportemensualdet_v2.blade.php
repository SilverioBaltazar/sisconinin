@extends('sicinar.principal')

@section('title','Ver reporte mensual detallado')

@section('links')
    <link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('nombre')
    {{$nombre}}
@endsection

@section('usuario')
    {{$usuario}}
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Reportes </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
                <li><a href="#">Reportes  </a></li>
                <li><a href="#">Mensual  </a></li>         
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                        <table id="tabla1" class="table table-hover table-striped">
                            <tr>
                                <td>
                                <b style="text-align:left; vertical-align: middle; color:green;font-size:11px;">
                                UNIDAD DE INFORMACIÓN, PLANEACIÓN, PROGRAMACIÓN Y EVALUACIÓN DE LA 
                                SECRETARÍA DE DESARROLLO SOCIAL 
                                </b><br>                    
                                <b style="text-align:left; vertical-align: middle; color:green;font-size:12px;">
                                REPORTE DETALLADO MENSUAL DE METAS - ACTIVIDADES &nbsp;&nbsp;&nbsp;{{$periodo_id}}
                                </b>              
                                </td>
                            </tr>
                        </table>

                        <div class="box-body">
                            <table id="tabla1" class="table table-hover table-striped">
                                <thead>
                                
                                    <tr>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">   </th>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">   </th>
                                        
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">   </th>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">   </th>
                                        <th style="background-color:darkgreen;color:white; text-align:right;vertical-align: middle;font-size:11px;">   </th>                                        

                                        <th colspan="4" style="background-color:darkgreen; color:white; text-align:center;vertical-align:middle; font-size:11px;">ANUAL</th>
                                        <th colspan="4" style="background-color:darkorange;color:white; text-align:center;vertical-align:middle; font-size:11px;">
                                        @foreach($regmeses as $mes)
                                             @if($mes->mes_id == $mes_id)
                                                 {{Trim($mes->mes_desc)}}
                                                 @break
                                             @endif
                                        @endforeach                                        
                                        </th>
                                        <th colspan="4" style="background-color:purple;    color:white;text-align:center;vertical-align:middle; font-size:11px;">ACUMULADO A 
                                        @foreach($regmeses as $mes)
                                             @if($mes->mes_id == $mes_id)
                                                 {{Trim($mes->mes_desc)}}
                                                 @break
                                             @endif
                                        @endforeach                                                 
                                        </th>
                                        @if($control === 'S')  
                                           <th style="background-color:yellow;color:black;text-align:center;vertical-align:middle;font-size:11px;"> </th>
                                        @endif
                                    </tr>                                
                                    <tr>
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">#             </th>
                                        
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">PROYECTO <br>PRESUPUESTARIO </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">FOL.</th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">NP   </th>
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">ACCCION Y/O META</th>

                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">PROG.  </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">REAL   </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">%      </th>
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">SMF    </th>

                                        <th style="background-color:darkorange;color:white;text-align:right;vertical-align: middle;font-size:11px;">PROG. </th>
                                        <th style="background-color:darkorange;color:white;text-align:right;vertical-align: middle;font-size:11px;">REAL  </th>
                                        <th style="background-color:darkorange;color:white;text-align:right;vertical-align: middle;font-size:11px;">%     </th>
                                        <th style="background-color:darkorange;color:white;text-align:left; vertical-align: middle;font-size:11px;">SMF   </th>

                                        <th style="background-color:purple;color:white;text-align:right;vertical-align: middle;font-size:11px;">PROG.    </th>
                                        <th style="background-color:purple;color:white;text-align:right;vertical-align: middle;font-size:11px;">REAL     </th>
                                        <th style="background-color:purple;color:white;text-align:right;vertical-align: middle;font-size:11px;">%        </th>
                                        <th style="background-color:purple;color:white;text-align:left; vertical-align: middle;font-size:11px;">SMF      </th>
                                        @if($control === 'S')  
                                            <th style="background-color:yellow;color:black;text-align:center;vertical-align:middle;font-size:11px;">JUSTIFIC.</th>
                                        @endif
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    <?php
                                    $j        = 0;
                                    $stap_02  = 0;
                                    $stac_02  = 0;
                                    $stot_p02 = 0;
                                    $sanual_p = 0;
                                    $sanual_s = 0;

                                    $smp_01 = 0;
                                    $smp_02 = 0;
                                    $smp_03 = 0;
                                    $smp_04 = 0;
                                    $smp_05 = 0;
                                    $smp_06 = 0;
                                    $smp_07 = 0;
                                    $smp_08 = 0;
                                    $smp_09 = 0;
                                    $smp_10 = 0;
                                    $smp_11 = 0;
                                    $smp_12 = 0; 

                                    $smc_01 = 0;
                                    $smc_02 = 0;
                                    $smc_03 = 0;
                                    $smc_04 = 0;
                                    $smc_05 = 0;
                                    $smc_06 = 0;
                                    $smc_07 = 0;
                                    $smc_08 = 0;
                                    $smc_09 = 0;
                                    $smc_10 = 0;
                                    $smc_11 = 0;
                                    $smc_12 = 0;                                     

                                    $smes_p01 = 0;
                                    $smes_p02 = 0;
                                    $smes_p03 = 0;
                                    $smes_p04 = 0;
                                    $smes_p05 = 0;
                                    $smes_p06 = 0;
                                    $smes_p07 = 0;
                                    $smes_p08 = 0;
                                    $smes_p09 = 0;
                                    $smes_p10 = 0;
                                    $smes_p11 = 0;
                                    $smes_p12 = 0;    

                                    $smes_s01 = 0;
                                    $smes_s02 = 0;
                                    $smes_s03 = 0;
                                    $smes_s04 = 0;
                                    $smes_s05 = 0;
                                    $smes_s06 = 0;
                                    $smes_s07 = 0;
                                    $smes_s08 = 0;
                                    $smes_s09 = 0;
                                    $smes_s10 = 0;
                                    $smes_s11 = 0;
                                    $smes_s12 = 0;                                    

                                    $sacump_01 = 0;
                                    $sacump_02 = 0;
                                    $sacump_03 = 0;
                                    $sacump_04 = 0;
                                    $sacump_05 = 0;
                                    $sacump_06 = 0;
                                    $sacump_07 = 0;
                                    $sacump_08 = 0;
                                    $sacump_09 = 0;
                                    $sacump_10 = 0;
                                    $sacump_11 = 0;
                                    $sacump_12 = 0;

                                    $sacumc_01 = 0;
                                    $sacumc_02 = 0;
                                    $sacumc_03 = 0;
                                    $sacumc_04 = 0;
                                    $sacumc_05 = 0;
                                    $sacumc_06 = 0;
                                    $sacumc_07 = 0;
                                    $sacumc_08 = 0;
                                    $sacumc_09 = 0;
                                    $sacumc_10 = 0;
                                    $sacumc_11 = 0;
                                    $sacumc_12 = 0;                                    

                                    $sacum_p01 = 0;
                                    $sacum_p02 = 0;
                                    $sacum_p03 = 0;
                                    $sacum_p04 = 0;
                                    $sacum_p05 = 0;
                                    $sacum_p06 = 0;
                                    $sacum_p07 = 0;
                                    $sacum_p08 = 0;
                                    $sacum_p09 = 0;
                                    $sacum_p10 = 0;
                                    $sacum_p11 = 0;
                                    $sacum_p12 = 0;

                                    $sacum_s01 = 0;
                                    $sacum_s02 = 0;
                                    $sacum_s03 = 0;
                                    $sacum_s04 = 0;
                                    $sacum_s05 = 0;
                                    $sacum_s06 = 0;
                                    $sacum_s07 = 0;
                                    $sacum_s08 = 0;
                                    $sacum_s09 = 0;
                                    $sacum_s10 = 0;
                                    $sacum_s11 = 0;
                                    $sacum_s12 = 0;

                                    $asemafa   = 0;
                                    $depen_aux ='';

                                    $row = 1;
                                    ?>
                                    @while( $row <= $i )

                                        <?php
                                        
                                        //*********************************************************//
                                        //**************** Subtotales *****************************//
                                        //*********************************************************//

                                        //**** Subtotal A- Acumulado anual ************************//
                                        $stap_02  = (float)$stap_02 + (float)$data[$row][71];
                                        $stac_02  = (float)$stac_02 + (float)$data[$row][73];
                                        //*************** Subtotales A - Calcular % anual *********//
                                        $sanual_p  = 0;
                                        if ((float)$stac_02 > 0 && (float)$stap_02 > 0)
                                           $sanual_p  = ($stac_02/$stap_02)*100;  
                                        //******* Subtotal A - Calcular semaforo anual ************//
                                        $sanual_s  = 0;
                                        if ((float)$sanual_p > 0 && (float)$sanual_p < 50)
                                             $sanual_s = 1;
                                        else
                                            if ((float)$sanual_p >= 50 && (float)$sanual_p < 70)
                                                $sanual_s = 2;
                                            else
                                                if ((float)$sanual_p >= 70 && (float)$sanual_p < 90)
                                                    $sanual_s = 3;
                                                else
                                                    if ((float)$sanual_p >= 90 && (float)$sanual_p <= 110)
                                                        $sanual_s = 4;
                                                    else
                                                      if ((float)$sanual_p > 110 )
                                                         $sanual_s = 5;

                                        //*********************************************************//
                                        //***** Subtotales B - Aumulado mensual programado ********//
                                        //*********************************************************//
                                        $smp_01 = (float)$smp_01 + (float)$data[$row][10];
                                        $smp_02 = (float)$smp_02 + (float)$data[$row][11];
                                        $smp_03 = (float)$smp_03 + (float)$data[$row][12];
                                        $smp_04 = (float)$smp_04 + (float)$data[$row][13];
                                        $smp_05 = (float)$smp_05 + (float)$data[$row][14];
                                        $smp_06 = (float)$smp_06 + (float)$data[$row][15];
                                        $smp_07 = (float)$smp_07 + (float)$data[$row][16];
                                        $smp_08 = (float)$smp_08 + (float)$data[$row][17];
                                        $smp_09 = (float)$smp_09 + (float)$data[$row][18];
                                        $smp_10 = (float)$smp_10 + (float)$data[$row][19];
                                        $smp_11 = (float)$smp_11 + (float)$data[$row][20];
                                        $smp_12 = (float)$smp_12 + (float)$data[$row][21]; 

                                        //*** Subtotales B - Acumulado mensual real **************//
                                        $smc_01 = (float)$smc_01 + (float)$data[$row][22];
                                        $smc_02 = (float)$smc_02 + (float)$data[$row][23];
                                        $smc_03 = (float)$smc_03 + (float)$data[$row][24];
                                        $smc_04 = (float)$smc_04 + (float)$data[$row][25];
                                        $smc_05 = (float)$smc_05 + (float)$data[$row][26];
                                        $smc_06 = (float)$smc_06 + (float)$data[$row][27];
                                        $smc_07 = (float)$smc_07 + (float)$data[$row][28];
                                        $smc_08 = (float)$smc_08 + (float)$data[$row][29];
                                        $smc_09 = (float)$smc_09 + (float)$data[$row][30];
                                        $smc_10 = (float)$smc_10 + (float)$data[$row][31];
                                        $smc_11 = (float)$smc_11 + (float)$data[$row][32];
                                        $smc_12 = (float)$smc_12 + (float)$data[$row][33]; 

                                        //***** Subtotales C - Calcular % mensual ************//
                                        $smes_p01  = 0;
                                        if ((float)$smc_01 > 0 && (float)$smp_01 > 0)
                                           $smes_p01  = ($smc_01/$smp_01)*100;    
                                        $smes_p02  = 0;
                                        if ((float)$smc_02 > 0 && (float)$smp_02 > 0)
                                           $smes_p02  = ($smc_02/$smp_02)*100;   
                                        $smes_p03  = 0;
                                        if ((float)$smc_03 > 0 && (float)$smp_03 > 0)
                                           $smes_p03  = ($smc_03/$smp_03)*100;   
                                        $smes_p04  = 0;
                                        if ((float)$smc_04 > 0 && (float)$smp_04 > 0)
                                           $smes_p04  = ($smc_04/$smp_04)*100;   
                                        $smes_p05  = 0;
                                        if ((float)$smc_05 > 0 && (float)$smp_05 > 0)
                                           $smes_p05  = ($smc_05/$smp_05)*100;   
                                        $smes_p06 = 0;
                                        if ((float)$smc_06 > 0 && (float)$smp_06 > 0)
                                           $smes_p06  = ($smc_06/$smp_06)*100;   
                                        $smes_p07  = 0;
                                        if ((float)$smc_07 > 0 && (float)$smp_07 > 0)
                                           $smes_p07  = ($smc_07/$smp_07)*100;   
                                        $smes_p08  = 0;
                                        if ((float)$smc_08 > 0 && (float)$smp_08 > 0)
                                           $smes_p08  = ($smc_08/$smp_08)*100;   
                                        $smes_p09  = 0;
                                        if ((float)$smc_09 > 0 && (float)$smp_09 > 0)
                                           $smes_p09  = ($smc_09/$smp_09)*100;   
                                        $smes_p10  = 0;
                                        if ((float)$smc_10 > 0 && (float)$smp_10 > 0)
                                           $smes_p10  = ($smc_10/$smp_10)*100;   
                                        $smes_p11  = 0;
                                        if ((float)$smc_11 > 0 && (float)$smp_11 > 0)
                                           $smes_p11  = ($smc_11/$smp_11)*100;   
                                        $smes_p12  = 0;
                                        if ((float)$smc_12 > 0 && (float)$smp_12 > 0)
                                           $smes_p12  = ($smc_12/$smp_12)*100;   

                                        //******* Subtotal C - Calcular semaforos mensuales ***************//
                                        $smes_s01  = 0;
                                        if ((float)$smes_p01 > 0 && (float)$smes_p01 < 50)
                                             $smes_s01 = 1;
                                        else
                                            if ((float)$smes_p01 >= 50 && (float)$smes_p01 < 70)
                                                $smes_s01 = 2;
                                            else
                                                if ((float)$smes_p01 >= 70 && (float)$smes_p01 < 90)
                                                    $smes_s01 = 3;
                                                else
                                                    if ((float)$smes_p01 >= 90 && (float)$smes_p01 <= 110)
                                                        $smes_s01 = 4;
                                                    else
                                                      if ((float)$smes_p01 > 110 )
                                                         $smes_s01 = 5;

                                        $smes_s02  = 0;
                                        if ((float)$smes_p02 > 0 && (float)$smes_p02 < 50)
                                             $smes_s02 = 1;
                                        else
                                            if ((float)$smes_p02 >= 50 && (float)$smes_p02 < 70)
                                                $smes_s02 = 2;
                                            else
                                                if ((float)$smes_p02 >= 70 && (float)$smes_p02 < 90)
                                                    $smes_s02 = 3;
                                                else
                                                    if ((float)$smes_p02 >= 90 && (float)$smes_p02 <= 110)
                                                        $smes_s02 = 4;
                                                    else
                                                      if ((float)$smes_p02 > 110 )
                                                         $smes_s02 = 5;

                                        $smes_s03  = 0;
                                        if ((float)$smes_p03 > 0 && (float)$smes_p03 < 50)
                                             $smes_s03 = 1;
                                        else
                                            if ((float)$smes_p03 >= 50 && (float)$smes_p03 < 70)
                                                $smes_s03 = 2;
                                            else
                                                if ((float)$smes_p03 >= 70 && (float)$smes_p03 < 90)
                                                    $smes_s03 = 3;
                                                else
                                                    if ((float)$smes_p03 >= 90 && (float)$smes_p03 <= 110)
                                                        $smes_s03 = 4;
                                                    else
                                                      if ((float)$smes_p03 > 110 )
                                                         $smes_s03 = 5;

                                        $smes_s04  = 0;
                                        if ((float)$smes_p04 > 0 && (float)$smes_p04 < 50)
                                             $smes_s04 = 1;
                                        else
                                            if ((float)$smes_p04 >= 50 && (float)$smes_p04 < 70)
                                                $smes_s04 = 2;
                                            else
                                                if ((float)$smes_p04 >= 70 && (float)$smes_p04 < 90)
                                                   $smes_s04 = 3;
                                                else
                                                    if ((float)$smes_p04 >= 90 && (float)$smes_p04 <= 110)
                                                        $smes_s04 = 4;
                                                    else
                                                      if ((float)$smes_p04 > 110 )
                                                         $smes_s04 = 5;

                                        $smes_s05  = 0;
                                        if ((float)$smes_p05 > 0 && (float)$smes_p05 < 50)
                                             $smes_s05 = 1;
                                        else
                                            if ((float)$smes_p05 >= 50 && (float)$smes_p05 < 70)
                                                $smes_s05 = 2;
                                            else
                                                if ((float)$smes_p05 >= 70 && (float)$smes_p05 < 90)
                                                    $smes_s05 = 3;
                                                else
                                                    if ((float)$smes_p05 >= 90 && (float)$smes_p05 <= 110)
                                                        $smes_s05 = 4;
                                                    else
                                                      if ((float)$smes_p05 > 110 )
                                                         $smes_s05 = 5;

                                        $smes_s06  = 0;
                                        if ((float)$smes_p06 > 0 && (float)$smes_p06 < 50)
                                             $smes_s06 = 1;
                                        else
                                            if ((float)$smes_p06 >= 50 && (float)$smes_p06 < 70)
                                                $smes_s06 = 2;
                                            else
                                                if ((float)$smes_p06 >= 70 && (float)$smes_p06 < 90)
                                                    $smes_s06 = 3;
                                                else
                                                    if ((float)$smes_p06 >= 90 && (float)$smes_p06 <= 110)
                                                        $smes_s06 = 4;
                                                    else
                                                      if ((float)$smes_p06 > 110 )
                                                         $smes_s06 = 5;

                                        $smes_s07  = 0;
                                        if ((float)$smes_p07 > 0 && (float)$smes_p07 < 50)
                                             $smes_s07 = 1;
                                        else
                                            if ((float)$smes_p07 >= 50 && (float)$smes_p07 < 70)
                                                $smes_s07 = 2;
                                            else
                                                if ((float)$smes_p07 >= 70 && (float)$smes_p07 < 90)
                                                    $smes_s07 = 3;
                                                else
                                                    if ((float)$smes_p07 >= 90 && (float)$smes_p07 <= 110)
                                                        $smes_s07 = 4;
                                                    else
                                                      if ((float)$smes_p07 > 110 )
                                                         $smes_s07 = 5;

                                        $smes_s08  = 0;
                                        if ((float)$smes_p08 > 0 && (float)$smes_p08 < 50)
                                             $smes_s08 = 1;
                                        else
                                            if ((float)$smes_p08 >= 50 && (float)$smes_p08 < 70)
                                                $smes_s08 = 2;
                                            else
                                                if ((float)$smes_p08 >= 70 && (float)$smes_p08 < 90)
                                                    $smes_s08 = 3;
                                                else
                                                    if ((float)$smes_p08 >= 90 && (float)$smes_p08 <= 110)
                                                        $smes_s08 = 4;
                                                    else
                                                      if ((float)$smes_p08 > 110 )
                                                         $smes_s08 = 5;

                                        $smes_s09  = 0;
                                        if ((float)$smes_p09 > 0 && (float)$smes_p09 < 50)
                                             $smes_s09 = 1;
                                        else
                                            if ((float)$smes_p09 >= 50 && (float)$smes_p09 < 70)
                                                $smes_s09 = 2;
                                            else
                                                if ((float)$smes_p09 >= 70 && (float)$smes_p09 < 90)
                                                    $smes_s09 = 3;
                                                else
                                                    if ((float)$smes_p09 >= 90 && (float)$smes_p09 <= 110)
                                                        $smes_s09 = 4;
                                                    else
                                                      if ((float)$smes_p09 > 110 )
                                                         $smes_s09 = 5;

                                        $smes_s10  = 0;
                                        if ((float)$smes_p10 > 0 && (float)$smes_p10 < 50)
                                             $smes_s10 = 1;
                                        else
                                            if ((float)$smes_p10 >= 50 && (float)$smes_p10 < 70)
                                                $smes_s10 = 2;
                                            else
                                                if ((float)$smes_p10 >= 70 && (float)$smes_p10 < 90)
                                                    $smes_s10 = 3;
                                                else
                                                    if ((float)$smes_p10 >= 90 && (float)$smes_p10 <= 110)
                                                        $smes_s10 = 4;
                                                    else
                                                        if ((float)$smes_p10 > 110 )
                                                           $smes_s10 = 5;

                                        $smes_s11  = 0;
                                        if ((float)$smes_p11 > 0 && (float)$smes_p11 < 50)
                                             $smes_s11 = 1;
                                        else
                                            if ((float)$smes_p11 >= 50 && (float)$smes_p11 < 70)
                                                $smes_s11 = 2;
                                            else
                                                if ((float)$smes_p11 >= 70 && (float)$smes_p11 < 90)
                                                    $smes_s11 = 3;
                                                else
                                                    if ((float)$smes_p11 >= 90 && (float)$smes_p11 <= 110)
                                                        $smes_s11 = 4;
                                                    else
                                                        if ((float)$smes_p11 > 110 )
                                                           $smes_s11 = 5;

                                        $smes_s12  = 0;
                                        if ((float)$smes_p12 > 0 && (float)$smes_p12 < 50)
                                             $smes_s12 = 1;
                                        else
                                            if ((float)$smes_p12 >= 50 && (float)$smes_p12 < 70)
                                                $smes_s12 = 2;
                                            else
                                                if ((float)$smes_p12 >= 70 && (float)$smes_p12 < 90)
                                                    $smes_s12 = 3;
                                                else
                                                    if ((float)$smes_p12 >= 90 && (float)$smes_p12 <= 110)
                                                        $smes_s12 = 4;
                                                    else
                                                        if ((float)$smes_p12 > 110 )
                                                           $smes_s12 = 5;

                                        //*********************************************************//
                                        //**** Subtotales C - Acumulado mensual programado ********//
                                        //*********************************************************//
                                        $sacump_01 = (float)$sacump_01+(float)$data[$row][76];
                                        $sacump_02 = (float)$sacump_02+(float)$data[$row][77];
                                        $sacump_03 = (float)$sacump_03+(float)$data[$row][78];
                                        $sacump_04 = (float)$sacump_04+(float)$data[$row][79];
                                        $sacump_05 = (float)$sacump_05+(float)$data[$row][80];
                                        $sacump_06 = (float)$sacump_06+(float)$data[$row][81];
                                        $sacump_07 = (float)$sacump_07+(float)$data[$row][82];
                                        $sacump_08 = (float)$sacump_08+(float)$data[$row][83];
                                        $sacump_09 = (float)$sacump_09+(float)$data[$row][84];
                                        $sacump_10 = (float)$sacump_10+(float)$data[$row][85];
                                        $sacump_11 = (float)$sacump_11+(float)$data[$row][86];
                                        $sacump_12 = (float)$sacump_10+(float)$data[$row][87]; 
                                        //*** Subtotales C - Acumulado mensual real **************//
                                        $sacumc_01 = (float)$sacumc_01+(float)$data[$row][88];
                                        $sacumc_02 = (float)$sacumc_02+(float)$data[$row][89];
                                        $sacumc_03 = (float)$sacumc_03+(float)$data[$row][90];
                                        $sacumc_04 = (float)$sacumc_04+(float)$data[$row][91];
                                        $sacumc_05 = (float)$sacumc_05+(float)$data[$row][92];
                                        $sacumc_06 = (float)$sacumc_06+(float)$data[$row][93];
                                        $sacumc_07 = (float)$sacumc_07+(float)$data[$row][94];
                                        $sacumc_08 = (float)$sacumc_08+(float)$data[$row][95];
                                        $sacumc_09 = (float)$sacumc_09+(float)$data[$row][96];
                                        $sacumc_10 = (float)$sacumc_10+(float)$data[$row][97];
                                        $sacumc_11 = (float)$sacumc_11+(float)$data[$row][98];
                                        $sacumc_12 = (float)$sacumc_12+(float)$data[$row][99];   

                                        //**** Subtotales C - Calcular % acumulado mensual ******//
                                        $sacum_p01  = 0;
                                        if ((float)$sacumc_01 > 0 && (float)$sacump_01 > 0)
                                           $sacum_p01  = ($sacumc_01/$sacump_01)*100;    
                                        $sacum_p02  = 0;
                                        if ((float)$sacumc_02 > 0 && (float)$sacump_02 > 0)
                                           $sacum_p02  = ($sacumc_02/$sacump_02)*100;   
                                        $sacum_p03  = 0;
                                        if ((float)$sacumc_03 > 0 && (float)$sacump_03 > 0)
                                           $sacum_p03  = ($sacumc_03/$sacump_03)*100;   
                                        $sacum_p04  = 0;
                                        if ((float)$sacumc_04 > 0 && (float)$sacump_04 > 0)
                                           $sacum_p04  = ($sacumc_04/$sacump_04)*100;   
                                        $sacum_p05  = 0;
                                        if ((float)$sacumc_05 > 0 && (float)$sacump_05 > 0)
                                           $sacum_p05  = ($sacumc_05/$sacump_05)*100;   
                                        $sacum_p06 = 0;
                                        if ((float)$sacumc_06 > 0 && (float)$sacump_06 > 0)
                                           $sacum_p06  = ($sacumc_06/$sacump_06)*100;   
                                        $sacum_p07  = 0;
                                        if ((float)$sacumc_07 > 0 && (float)$sacump_07 > 0)
                                           $sacum_p07  = ($sacumc_07/$sacump_07)*100;   
                                        $sacum_p08  = 0;
                                        if ((float)$sacumc_08 > 0 && (float)$sacump_08 > 0)
                                           $sacum_p08  = ($sacumc_08/$sacump_08)*100;   
                                        $sacum_p09  = 0;
                                        if ((float)$sacumc_09 > 0 && (float)$sacump_09 > 0)
                                           $sacum_p09  = ($sacumc_09/$sacump_09)*100;   
                                        $sacum_p10  = 0;
                                        if ((float)$sacumc_10 > 0 && (float)$sacump_10 > 0)
                                           $sacum_p10  = ($sacumc_10/$sacump_10)*100;   
                                        $sacum_p11  = 0;
                                        if ((float)$sacumc_11 > 0 && (float)$sacump_11 > 0)
                                           $sacum_p11  = ($sacumc_11/$sacump_11)*100;   
                                        $sacum_p12  = 0;
                                        if ((float)$sacumc_12 > 0 && (float)$sacump_12 > 0)
                                           $sacum_p12  = ($sacumc_12/$sacump_12)*100;        

                                        //*** Subtotal C - Calcular semáforos mensuales acumulados ***//
                                        $sacum_s01  = 0;
                                        if ((float)$sacum_p01 > 0 && (float)$sacum_p01 < 50)
                                             $sacum_s01 = 1;
                                        else
                                            if ((float)$sacum_p01 >= 50 && (float)$sacum_p01 < 70)
                                                $sacum_s01 = 2;
                                            else
                                                if ((float)$sacum_p01 >= 70 && (float)$sacum_p01 < 90)
                                                    $sacum_s01 = 3;
                                                else
                                                    if ((float)$sacum_p01 >= 90 && (float)$sacum_p01 <= 110)
                                                        $sacum_s01 = 4;
                                                    else
                                                      if ((float)$sacum_p01 > 110 )
                                                         $sacum_s01 = 5;
                                        $sacum_s02  = 0;
                                        if ((float)$sacum_p02 > 0 && (float)$sacum_p02 < 50)
                                             $sacum_s02 = 1;
                                        else
                                            if ((float)$sacum_p02 >= 50 && (float)$sacum_p02 < 70)
                                                $sacum_s02 = 2;
                                            else
                                                if ((float)$sacum_p02 >= 70 && (float)$sacum_p02 < 90)
                                                    $sacum_s02 = 3;
                                                else
                                                    if ((float)$sacum_p02 >= 90 && (float)$sacum_p02 <= 110)
                                                        $sacum_s02 = 4;
                                                    else
                                                      if ((float)$sacum_p02 > 110 )
                                                         $sacum_s02 = 5;
                                        $sacum_s03  = 0;
                                        if ((float)$sacum_p03 > 0 && (float)$sacum_p03 < 50)
                                             $sacum_s03 = 1;
                                        else
                                            if ((float)$sacum_p03 >= 50 && (float)$sacum_p03 < 70)
                                                $sacum_s03 = 2;
                                            else
                                                if ((float)$sacum_p03 >= 70 && (float)$sacum_p03 < 90)
                                                    $sacum_s03 = 3;
                                                else
                                                    if ((float)$sacum_p03 >= 90 && (float)$sacum_p03 <= 110)
                                                        $sacum_s03 = 4;
                                                    else
                                                      if ((float)$sacum_p03 > 110 )
                                                         $sacum_s03 = 5;
                                        $sacum_s04  = 0;
                                        if ((float)$sacum_p04 > 0 && (float)$sacum_p04 < 50)
                                             $sacum_s04 = 1;
                                        else
                                            if ((float)$sacum_p04 >= 50 && (float)$sacum_p04 < 70)
                                                $sacum_s04 = 2;
                                            else
                                                if ((float)$sacum_p04 >= 70 && (float)$sacum_p04 < 90)
                                                   $sacum_s04 = 3;
                                                else
                                                    if ((float)$sacum_p04 >= 90 && (float)$sacum_p04 <= 110)
                                                        $sacum_s04 = 4;
                                                    else
                                                      if ((float)$sacum_p04 > 110 )
                                                         $sacum_s04 = 5;
                                        $sacum_s05  = 0;
                                        if ((float)$sacum_p05 > 0 && (float)$sacum_p05 < 50)
                                             $sacum_s05 = 1;
                                        else
                                            if ((float)$sacum_p05 >= 50 && (float)$sacum_p05 < 70)
                                                $sacum_s05 = 2;
                                            else
                                                if ((float)$sacum_p05 >= 70 && (float)$sacum_p05 < 90)
                                                    $sacum_s05 = 3;
                                                else
                                                    if ((float)$sacum_p05 >= 90 && (float)$sacum_p05 <= 110)
                                                        $sacum_s05 = 4;
                                                    else
                                                      if ((float)$sacum_p05 > 110 )
                                                         $sacum_s05 = 5;
                                        $sacum_s06  = 0;
                                        if ((float)$sacum_p06 > 0 && (float)$sacum_p06 < 50)
                                             $sacum_s06 = 1;
                                        else
                                            if ((float)$sacum_p06 >= 50 && (float)$sacum_p06 < 70)
                                                $sacum_s06 = 2;
                                            else
                                                if ((float)$sacum_p06 >= 70 && (float)$sacum_p06 < 90)
                                                    $sacum_s06 = 3;
                                                else
                                                    if ((float)$sacum_p06 >= 90 && (float)$sacum_p06 <= 110)
                                                        $sacum_s06 = 4;
                                                    else
                                                      if ((float)$sacum_p06 > 110 )
                                                         $sacum_s06 = 5;
                                        $sacum_s07  = 0;
                                        if ((float)$sacum_p07 > 0 && (float)$sacum_p07 < 50)
                                             $sacum_s07 = 1;
                                        else
                                            if ((float)$sacum_p07 >= 50 && (float)$sacum_p07 < 70)
                                                $sacum_s07 = 2;
                                            else
                                                if ((float)$sacum_p07 >= 70 && (float)$sacum_p07 < 90)
                                                    $sacum_s07 = 3;
                                                else
                                                    if ((float)$sacum_p07 >= 90 && (float)$sacum_p07 <= 110)
                                                        $sacum_s07 = 4;
                                                    else
                                                      if ((float)$sacum_p07 > 110 )
                                                         $sacum_s07 = 5;
                                        $sacum_s08  = 0;
                                        if ((float)$sacum_p08 > 0 && (float)$sacum_p08 < 50)
                                             $sacum_s08 = 1;
                                        else
                                            if ((float)$sacum_p08 >= 50 && (float)$sacum_p08 < 70)
                                                $sacum_s08 = 2;
                                            else
                                                if ((float)$sacum_p08 >= 70 && (float)$sacum_p08 < 90)
                                                    $sacum_s08 = 3;
                                                else
                                                    if ((float)$sacum_p08 >= 90 && (float)$sacum_p08 <= 110)
                                                        $sacum_s08 = 4;
                                                    else
                                                      if ((float)$sacum_p08 > 110 )
                                                         $sacum_s08 = 5;
                                        $sacum_s09  = 0;
                                        if ((float)$sacum_p09 > 0 && (float)$sacum_p09 < 50)
                                             $sacum_s09 = 1;
                                        else
                                            if ((float)$sacum_p09 >= 50 && (float)$sacum_p09 < 70)
                                                $sacum_s09 = 2;
                                            else
                                                if ((float)$sacum_p09 >= 70 && (float)$sacum_p09 < 90)
                                                    $sacum_s09 = 3;
                                                else
                                                    if ((float)$sacum_p09 >= 90 && (float)$sacum_p09 <= 110)
                                                        $sacum_s09 = 4;
                                                    else
                                                      if ((float)$sacum_p09 > 110 )
                                                         $sacum_s09 = 5;
                                        $sacum_s10  = 0;
                                        if ((float)$sacum_p10 > 0 && (float)$sacum_p10 < 50)
                                             $sacum_s10 = 1;
                                        else
                                            if ((float)$sacum_p10 >= 50 && (float)$sacum_p10 < 70)
                                                $sacum_s10 = 2;
                                            else
                                                if ((float)$sacum_p10 >= 70 && (float)$sacum_p10 < 90)
                                                    $sacum_s10 = 3;
                                                else
                                                    if ((float)$sacum_p10 >= 90 && (float)$sacum_p10 <= 110)
                                                        $sacum_s10 = 4;
                                                    else
                                                        if ((float)$sacum_p10 > 110 )
                                                           $sacum_s10 = 5;
                                        $sacum_s11  = 0;
                                        if ((float)$sacum_p11 > 0 && (float)$sacum_p11 < 50)
                                             $sacum_s11 = 1;
                                        else
                                            if ((float)$sacum_p11 >= 50 && (float)$sacum_p11 < 70)
                                                $sacum_s11 = 2;
                                            else
                                                if ((float)$sacum_p11 >= 70 && (float)$sacum_p11 < 90)
                                                    $sacum_s11 = 3;
                                                else
                                                    if ((float)$sacum_p11 >= 90 && (float)$sacum_p11 <= 110)
                                                        $sacum_s11 = 4;
                                                    else
                                                        if ((float)$sacum_p11 > 110 )
                                                           $sacum_s11 = 5;
                                        $sacum_s12  = 0;
                                        if ((float)$sacum_p12 > 0 && (float)$sacum_p12 < 50)
                                             $sacum_s12 = 1;
                                        else
                                            if ((float)$sacum_p12 >= 50 && (float)$sacum_p12 < 70)
                                                $sacum_s12 = 2;
                                            else
                                                if ((float)$sacum_p12 >= 70 && (float)$sacum_p12 < 90)
                                                    $sacum_s12 = 3;
                                                else
                                                    if ((float)$sacum_p12 >= 90 && (float)$sacum_p12 <= 110)
                                                        $sacum_s12 = 4;
                                                    else
                                                        if ((float)$sacum_p12 > 110 )
                                                           $sacum_s12 = 5;
                                        ?>
                                        @if($depen_aux === $data[$row][1])  
                                        @else
                                            <?php  
                                            $depen_aux = $data[$row][1]; 
                                            $j = $j + 1;
                                            ?>
                                            <tr>
                                                <td style="background-color:#800000;color:white;text-align:left; vertical-align: middle;font-size:10px;">
                                                    <b>{{$j}}</b>
                                                </td>
                                                <td colspan="16" style="background-color:#800000;color:white;text-align:left; vertical-align: middle;font-size:10px;">
                                                    <b>{{$data[$row][1].' '.trim($data[$row][2])}} &nbsp;&nbsp; </b> 
                                                </td>
                                                @if($control === 'S')  
                                                   <td style="background-color:#800000;color:white;text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                                @endif
                                            </tr>
                                        @endif

                                        <tr>
                                            <td style="text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                            
                                            <td style="text-align:left; vertical-align: middle;font-size:10px;">{{$data[$row][8].' '.trim($data[$row][9])}} </td>
                                            <td style="text-align:right;vertical-align: middle;font-size:10px;">{{$data[$row][3]}}   </td>
                                            <td style="text-align:right;vertical-align: middle;font-size:10px;">{{$data[$row][4]}} </td>
                                            <td style="text-align:left; vertical-align: middle;font-size:09px;">{{trim($data[$row][5])}}</td>

                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][71],0)}}</td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][73],0)}}</td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][74],2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($data[$row][75])
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')
                                                
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>     

                                            @switch($mes_id)
                                            @case('1')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][10],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][22],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][34],2)}} </td>
                                                <td style="text-align:center;">
                                                @switch($data[$row][46])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break

                                            @case('2')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][11],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][23],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][35],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][47])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break

                                            @case('3')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][12],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][24],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][36],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][48])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break

                                            @case('4')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][13],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][25],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][37],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][49])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break
                                            @case('5')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][14],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][26],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][38],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][50])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break                                                                          

                                            @case('6')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][15],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][27],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][39],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][51])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break                                                                          

                                            @case('7')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][16],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][28],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][40],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][52])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('8')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][17],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][29],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][41],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][53])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('9')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][18],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][30],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][42],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][54])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break                                              

                                            @case('10')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][19],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][31],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][43],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][55])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('11')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][20],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][32],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][44],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][56])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('12')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][21],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][33],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][45],2)}}    </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][57])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  
                                            @endswitch
                                            

                                            @switch($mes_id)
                                            @case('1')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][76],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][88],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][100],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][112])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break

                                            @case('2')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][77],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][89],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][101],2)}}</td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][113])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break

                                            @case('3')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][78],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][90],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][102],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][114])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break

                                            @case('4')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][79],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][91],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][103],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][115])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break

                                            @case('5')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][80],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][92],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][104],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][116])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break                                                                          

                                            @case('6')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][81],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][93],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][105],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][117])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break                                                                          

                                            @case('7')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][82],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][94],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][106],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][118])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('8')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][83],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][95],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][107],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][119])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('9')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][84],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][96],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][108],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][120])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break                                              

                                            @case('10')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][85],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][97],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][109],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][121])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('11')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][86],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][98],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][110],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][122])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  

                                            @case('12')
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][87],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][99],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][111],2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($data[$row][123])
                                                @case('1')
                                                    <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('2')
                                                    <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('3')
                                                    <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break
                                                @case('4')
                                                    <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                            
                                                @case('5')
                                                    <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                    @break                                                                          
                                                @case('0')   
                                                    @break                                                                                                                      
                                                @default
                                                    @break
                                                @endswitch
                                                </td>                                               
                                                @break  
                                            @endswitch      
                                        
                                            @if($control === 'S')
                                                @switch($mes_id)                                            
                                                    @case('1')
                                                        @if($data[$row][46] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][124])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break
                                                    @case('2')
                                                        @if($data[$row][47] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][125])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break
                                                    @case('3')
                                                        @if($data[$row][48] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][126])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break
                                                    @case('4')
                                                        @if($data[$row][49] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][127])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break   
                                                    @case('5')
                                                        @if($data[$row][50] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][128])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break  
                                                    @case('6')
                                                        @if($data[$row][51] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][129])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break  
                                                    @case('7')
                                                        @if($data[$row][52] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][130])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break 
                                                    @case('8')
                                                        @if($data[$row][53] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][131])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break 
                                                    @case('9')
                                                        @if($data[$row][54] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][132])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break  
                                                    @case('10')
                                                        @if($data[$row][55] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][133])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break
                                                    @case('11')
                                                        @if($data[$row][56] != 4)
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][134])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break  
                                                    @case('12')
                                                        @if($data[$row][57] != 4) 
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;">{{Trim($data[$row][135])}} </td>
                                                        @else
                                                            <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>
                                                        @endif
                                                        @break  
                                                    @default
                                                       <td style="text-align:middle; vertical-align: middle;font-size:08px;"> </td>                                                                                    
                                                    @break                                              
                                                @endswitch                                                                    
                                            @endif      
                                        </tr>           

                                        <?php
                                        $row = $row + 1;
                                        ?>
                                    @endwhile

                                    
                                    <tr>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;">TOTAL  </td>

                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($stap_02,0)}} </td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($stac_02,0)}} </td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sanual_p,2)}}</td>
                                        <td style="text-align:center;">  
                                        @switch($sanual_s)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                            @break                                                                          
                                        @case('0')   
                                            @break                                                                                                                      
                                        @default
                                            @break
                                        @endswitch
                                        </td>     

                                        @switch($mes_id)
                                        @case('1')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_01,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_01,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p01,2)}}</td>
                                            <td style="text-align:center;">
                                            @switch($smes_s01)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break

                                        @case('2')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_02,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_02,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p02,2)}}</td>
                                            <td style="text-align:center;">
                                            @switch($smes_s02)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break

                                        @case('3')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_03,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_03,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p03,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s03)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break

                                        @case('4')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_04,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_04,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p04,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s04)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break

                                        @case('5')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_05,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_05,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p05,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s05)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break                                                                          

                                        @case('6')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_06,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_06,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p06,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s06)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break                                                                          

                                        @case('7')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_07,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_07,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p07,2)}}</td>                                            <td style="text-align:center;">  
                                            @switch($smes_s07)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break  

                                        @case('8')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_08,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_08,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p08,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s08)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break  

                                        @case('9')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_09,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_09,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p09,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s09)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break                                              

                                        @case('10')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_10,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_10,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p10,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s10)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break  

                                        @case('11')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_11,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_11,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p11,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s11)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break  

                                        @case('12')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smp_12,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smc_12,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($smes_p12,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($smes_s12)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            @break  
                                        @endswitch

                                        @switch($mes_id)
                                        @case('1')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_01,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_01,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p01,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s01)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td> 
                                            <td style="text-align:center;"> </td>                                              
                                            @break

                                        @case('2')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_02,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_02,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p02,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s02)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break

                                        @case('3')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_03,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_03,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p03,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s03)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break

                                        @case('4')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_04,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_04,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p04,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s04)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>     
                                            <td style="text-align:center;"> </td>               
                                            @break

                                        @case('5')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_05,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_05,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p05,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s05)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break                                                                          

                                        @case('6')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_06,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_06,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p06,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s06)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break                                                                          

                                        @case('7')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_07,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_07,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p07,2)}}</td>                                            
                                            <td style="text-align:center;">  
                                            @switch($sacum_s07)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break  

                                        @case('8')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_08,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_08,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p08,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s08)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break  

                                        @case('9')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_09,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_09,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p09,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s09)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break                                              

                                        @case('10')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_10,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_10,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p10,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s10)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                
                                            <td style="text-align:center;"> </td>               
                                            @break  

                                        @case('11')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_11,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_11,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p11,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s11)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>                                               
                                            <td style="text-align:center;"> </td>
                                            @break  

                                        @case('12')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_12,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_12,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p12,2)}}</td>
                                            <td style="text-align:center;">  
                                            @switch($sacum_s12)
                                            @case('1')
                                                <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('2')
                                                <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('3')
                                                <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break
                                            @case('4')
                                                <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                            
                                            @case('5')
                                                <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align: middle;"/> 
                                                @break                                                                          
                                            @case('0')   
                                                @break                                                                                                                      
                                            @default
                                                @break
                                            @endswitch
                                            </td>              
                                            <td style="text-align:center;"> </td>                                 
                                            @break  
                                        @endswitch
                                    </tr>
                                </tbody>
                            </table>

                            <table id="tabla1" class="table table-hover table-striped">
                                <tr>
                                    <td style="text-align:left; vertical-align: middle; color:green;font-size:10px;width:10px;">
                                        <label> 
                                             COLORIMETRIA   <br>
                                             5 DEFICIENTE   <br>
                                             4 EXCELENTE    <br>
                                             3 REGULAR      <br>
                                             2 PESIMO       <br>
                                             1 CRITICO  
                                        </label>
                                    </td>    
                                    <td style="text-align:left; vertical-align: middle; color:green;font-size:10px;width:10px;">
                                        <label> 
                                             RANGO %      <br>
                                             MAS DE 110.1 <br>
                                             90 - 110     <br>
                                             70 - 89.9    <br>
                                             50 - 69.9    <br>
                                             MENOS DE 49.9 
                                        </label>
                                    </td>                                              
                                    <td style="text-align:left; vertical-align: middle; color:green;font-size:10px;width:05px;">   
                                        <label> 
                                             COLOR DEL SEMÁFORO <br>
                                             <img src="{{ asset('images/semaforo_morado.jpg') }}"   width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align:middle;"/>MORADO<br>
                                             <img src="{{ asset('images/semaforo_verde.jpg') }}"    width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align:middle;"/>VERDE<br>
                                             <img src="{{ asset('images/semaforo_amarillo.jpg') }}" width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align:middle;"/>AMARILLO<br>
                                             <img src="{{ asset('images/semaforo_naranja.jpg') }}"  width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align:middle;"/>NARANJA<br>
                                             <img src="{{ asset('images/semaforo_rojo.jpg') }}"     width="15px" height="15px" style="text-align:center;margin-right: 15px;vertical-align:middle;"/>ROJO
                                        </label>
                                    </td>                      
                                    <td style="text-align:center; width:150px;"> </td>               
                                    <td style="text-align:right;  width:150px;"> </td>               
                                </tr>
                            </table>     
                            <table id="tabla1" class="table table-hover table-striped">
                                <tr>
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">
                                        <label>Elaboró <br><br>__________________________________</label>
                                    </td>
                                                                            
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">   
                                        <label>Autorizó <br><br>_________________________________</label>
                                    </td>                                     
                                </tr>
                            </table>                                                        

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('request')
@endsection

@section('javascrpt')
@endsection
