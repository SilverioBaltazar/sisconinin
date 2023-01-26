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
            <b style="text-align:center; vertical-align: middle; color:green;font-size:11px;">
            UNIDAD DE INFORMACIÓN, PLANEACIÓN, PROGRAMACIÓN Y EVALUACIÓN DE LA SECRETARÍA DE DESARROLLO SOCIAL 
            </b><br>                    
            <b style="text-align:center; vertical-align: middle; color:green;font-size:12px;">
            REPORTE CONCENTRADO MENSUAL DE METAS - ACTIVIDADES &nbsp;&nbsp;&nbsp;{{$periodo_id}}
            </b>      
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
            <tr>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
                <td style="border:0;"></td>
            </tr>                 
        </table>

        <!-- ::::::::::::::::::::::: titulos ::::::::::::::::::::::::: -->
        <table class="table table-sm" align="center">
        <thead>        
            <tr>
                <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">    </th>
                <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">    </th>
                <th style="background-color:darkgreen;color:white; text-align:right;vertical-align: middle;font-size:11px;">TOT.</th>

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
            </tr>                                
            <tr>
                <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">#             </th>
                <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">UNIDAD ADMINISTRATIVA U ORGAMISNO AUXILIAR</th>
                <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">ACT'S</th>

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
            </tr>

        </thead>

        <tbody>
                                    <?php
                                    
                                    $stap_02  = 0;
                                    $stac_02  = 0;
                                    $stot_p02 = 0;
                                    $ganual_p = 0;
                                    $ganual_s = 0;
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
                                    $row = 1;
                                    ?>
                                    @while( $row <= $i )
                                        <?php
                                        
                                        //*************** A - Calcular % anual *********//
                                        $ganual_p  = 0;
                                        if ((float)$data[$row][54] > 0 && (float)$data[$row][52] > 0)
                                               $ganual_p  = ($data[$row][54]/$data[$row][52])*100;  
                                        
                                        //******* A - Calcular semaforo anual ************//
                                        $ganual_s  = 0;
                                        if ((float)$ganual_p > 0 && (float)$ganual_p < 50)
                                             $ganual_s = 1;
                                        else
                                            if ((float)$ganual_p >= 50 && (float)$ganual_p < 70)
                                                $ganual_s = 2;
                                            else
                                                if ((float)$ganual_p >= 70 && (float)$ganual_p < 90)
                                                    $ganual_s = 3;
                                                else
                                                    if ((float)$ganual_p >= 90 && (float)$ganual_p <= 110)
                                                        $ganual_s = 4;
                                                    else
                                                      if ((float)$ganual_p > 110 )
                                                         $ganual_s = 5;
                                        
                                        //***** B - Calcular % mensual ************//
                                        $gmes_p01  = 0;
                                        if ((float)$data[$row][15] > 0 && (float)$data[$row][3] > 0)
                                           $gmes_p01  = ($data[$row][15]/$data[$row][3])*100;    
                                        $gmes_p02  = 0;
                                        if ((float)$data[$row][16] > 0 && (float)$data[$row][4] > 0)
                                           $gmes_p02  = ($data[$row][16]/$data[$row][4])*100;   
                                        $gmes_p03  = 0;
                                        if ((float)$data[$row][17] > 0 && (float)$data[$row][5] > 0)
                                           $gmes_p03  = ($data[$row][17]/$data[$row][5])*100;   
                                        $gmes_p04  = 0;
                                        if ((float)$data[$row][18] > 0 && (float)$data[$row][6] > 0)
                                           $gmes_p04  = ($data[$row][18]/$data[$row][6])*100;   
                                        $gmes_p05  = 0;
                                        if ((float)$data[$row][19] > 0 && (float)$data[$row][7] > 0)
                                           $gmes_p05  = ($data[$row][19]/$data[$row][7])*100;   
                                        $gmes_p06 = 0;
                                        if ((float)$data[$row][20] > 0 && (float)$data[$row][8] > 0)
                                           $gmes_p06  = ($data[$row][20]/$data[$row][8])*100;   
                                        $gmes_p07  = 0;
                                        if ((float)$data[$row][21] > 0 && (float)$data[$row][9] > 0)
                                           $gmes_p07  = ($data[$row][21]/$data[$row][9])*100;   
                                        $gmes_p08  = 0;
                                        if ((float)$data[$row][22] > 0 && (float)$data[$row][10] > 0)
                                           $gmes_p08  = ($data[$row][22]/$data[$row][10])*100;   
                                        $gmes_p09  = 0;
                                        if ((float)$data[$row][23] > 0 && (float)$data[$row][11] > 0)
                                           $gmes_p09  = ($data[$row][23]/$data[$row][11])*100;   
                                        $gmes_p10  = 0;
                                        if ((float)$data[$row][24] > 0 && (float)$data[$row][12] > 0)
                                           $gmes_p10  = ($data[$row][24]/$data[$row][12])*100;   
                                        $gmes_p11  = 0;
                                        if ((float)$data[$row][25] > 0 && (float)$data[$row][13] > 0)
                                           $gmes_p11  = ($data[$row][25]/$data[$row][13])*100;   
                                        $gmes_p12  = 0;
                                        if ((float)$data[$row][26] > 0 && (float)$data[$row][14] > 0)
                                           $gmes_p12  = ($data[$row][26]/$data[$row][14])*100;   


                                        //*******  C - Calcular semaforos mensuales ***************//
                                        $gmes_s01  = 0;
                                        if ((float)$gmes_p01 > 0 && (float)$gmes_p01 < 50)
                                             $gmes_s01 = 1;
                                        else
                                            if ((float)$gmes_p01 >= 50 && (float)$gmes_p01 < 70)
                                                $gmes_s01 = 2;
                                            else
                                                if ((float)$gmes_p01 >= 70 && (float)$gmes_p01 < 90)
                                                    $gmes_s01 = 3;
                                                else
                                                    if ((float)$gmes_p01 >= 90 && (float)$gmes_p01 <= 110)
                                                        $gmes_s01 = 4;
                                                    else
                                                      if ((float)$gmes_p01 > 110 )
                                                         $gmes_s01 = 5;

                                        $gmes_s02  = 0;
                                        if ((float)$gmes_p02 > 0 && (float)$gmes_p02 < 50)
                                             $gmes_s02 = 1;
                                        else
                                            if ((float)$gmes_p02 >= 50 && (float)$gmes_p02 < 70)
                                                $gmes_s02 = 2;
                                            else
                                                if ((float)$gmes_p02 >= 70 && (float)$gmes_p02 < 90)
                                                    $gmes_s02 = 3;
                                                else
                                                    if ((float)$gmes_p02 >= 90 && (float)$gmes_p02 <= 110)
                                                        $gmes_s02 = 4;
                                                    else
                                                      if ((float)$gmes_p02 > 110 )
                                                         $gmes_s02 = 5;

                                        $gmes_s03  = 0;
                                        if ((float)$gmes_p03 > 0 && (float)$gmes_p03 < 50)
                                             $gmes_s03 = 1;
                                        else
                                            if ((float)$gmes_p03 >= 50 && (float)$gmes_p03 < 70)
                                                $gmes_s03 = 2;
                                            else
                                                if ((float)$gmes_p03 >= 70 && (float)$gmes_p03 < 90)
                                                    $gmes_s03 = 3;
                                                else
                                                    if ((float)$gmes_p03 >= 90 && (float)$gmes_p03 <= 110)
                                                        $gmes_s03 = 4;
                                                    else
                                                      if ((float)$gmes_p03 > 110 )
                                                         $gmes_s03 = 5;

                                        $gmes_s04  = 0;
                                        if ((float)$gmes_p04 > 0 && (float)$gmes_p04 < 50)
                                             $gmes_s04 = 1;
                                        else
                                            if ((float)$gmes_p04 >= 50 && (float)$gmes_p04 < 70)
                                                $gmes_s04 = 2;
                                            else
                                                if ((float)$gmes_p04 >= 70 && (float)$gmes_p04 < 90)
                                                   $gmes_s04 = 3;
                                                else
                                                    if ((float)$gmes_p04 >= 90 && (float)$gmes_p04 <= 110)
                                                        $gmes_s04 = 4;
                                                    else
                                                      if ((float)$gmes_p04 > 110 )
                                                         $gmes_s04 = 5;

                                        $gmes_s05  = 0;
                                        if ((float)$gmes_p05 > 0 && (float)$gmes_p05 < 50)
                                             $gmes_s05 = 1;
                                        else
                                            if ((float)$gmes_p05 >= 50 && (float)$gmes_p05 < 70)
                                                $gmes_s05 = 2;
                                            else
                                                if ((float)$gmes_p05 >= 70 && (float)$gmes_p05 < 90)
                                                    $gmes_s05 = 3;
                                                else
                                                    if ((float)$gmes_p05 >= 90 && (float)$gmes_p05 <= 110)
                                                        $gmes_s05 = 4;
                                                    else
                                                      if ((float)$gmes_p05 > 110 )
                                                         $gmes_s05 = 5;

                                        $gmes_s06  = 0;
                                        if ((float)$gmes_p06 > 0 && (float)$gmes_p06 < 50)
                                             $gmes_s06 = 1;
                                        else
                                            if ((float)$gmes_p06 >= 50 && (float)$gmes_p06 < 70)
                                                $gmes_s06 = 2;
                                            else
                                                if ((float)$gmes_p06 >= 70 && (float)$gmes_p06 < 90)
                                                    $gmes_s06 = 3;
                                                else
                                                    if ((float)$gmes_p06 >= 90 && (float)$gmes_p06 <= 110)
                                                        $gmes_s06 = 4;
                                                    else
                                                      if ((float)$gmes_p06 > 110 )
                                                         $gmes_s06 = 5;

                                        $gmes_s07  = 0;
                                        if ((float)$gmes_p07 > 0 && (float)$gmes_p07 < 50)
                                             $gmes_s07 = 1;
                                        else
                                            if ((float)$gmes_p07 >= 50 && (float)$gmes_p07 < 70)
                                                $gmes_s07 = 2;
                                            else
                                                if ((float)$gmes_p07 >= 70 && (float)$gmes_p07 < 90)
                                                    $gmes_s07 = 3;
                                                else
                                                    if ((float)$gmes_p07 >= 90 && (float)$gmes_p07 <= 110)
                                                        $gmes_s07 = 4;
                                                    else
                                                      if ((float)$gmes_p07 > 110 )
                                                         $gmes_s07 = 5;

                                        $gmes_s08  = 0;
                                        if ((float)$gmes_p08 > 0 && (float)$gmes_p08 < 50)
                                             $gmes_s08 = 1;
                                        else
                                            if ((float)$gmes_p08 >= 50 && (float)$gmes_p08 < 70)
                                                $gmes_s08 = 2;
                                            else
                                                if ((float)$gmes_p08 >= 70 && (float)$gmes_p08 < 90)
                                                    $gmes_s08 = 3;
                                                else
                                                    if ((float)$gmes_p08 >= 90 && (float)$gmes_p08 <= 110)
                                                        $gmes_s08 = 4;
                                                    else
                                                      if ((float)$gmes_p08 > 110 )
                                                         $gmes_s08 = 5;

                                        $gmes_s09  = 0;
                                        if ((float)$gmes_p09 > 0 && (float)$gmes_p09 < 50)
                                             $gmes_s09 = 1;
                                        else
                                            if ((float)$gmes_p09 >= 50 && (float)$gmes_p09 < 70)
                                                $gmes_s09 = 2;
                                            else
                                                if ((float)$gmes_p09 >= 70 && (float)$gmes_p09 < 90)
                                                    $gmes_s09 = 3;
                                                else
                                                    if ((float)$gmes_p09 >= 90 && (float)$gmes_p09 <= 110)
                                                        $gmes_s09 = 4;
                                                    else
                                                      if ((float)$gmes_p09 > 110 )
                                                         $gmes_s09 = 5;

                                        $gmes_s10  = 0;
                                        if ((float)$gmes_p10 > 0 && (float)$gmes_p10 < 50)
                                             $gmes_s10 = 1;
                                        else
                                            if ((float)$gmes_p10 >= 50 && (float)$gmes_p10 < 70)
                                                $gmes_s10 = 2;
                                            else
                                                if ((float)$gmes_p10 >= 70 && (float)$gmes_p10 < 90)
                                                    $gmes_s10 = 3;
                                                else
                                                    if ((float)$gmes_p10 >= 90 && (float)$gmes_p10 <= 110)
                                                        $gmes_s10 = 4;
                                                    else
                                                        if ((float)$gmes_p10 > 110 )
                                                           $gmes_s10 = 5;

                                        $gmes_s11  = 0;
                                        if ((float)$gmes_p11 > 0 && (float)$gmes_p11 < 50)
                                             $gmes_s11 = 1;
                                        else
                                            if ((float)$gmes_p11 >= 50 && (float)$gmes_p11 < 70)
                                                $gmes_s11 = 2;
                                            else
                                                if ((float)$gmes_p11 >= 70 && (float)$gmes_p11 < 90)
                                                    $gmes_s11 = 3;
                                                else
                                                    if ((float)$gmes_p11 >= 90 && (float)$gmes_p11 <= 110)
                                                        $gmes_s11 = 4;
                                                    else
                                                        if ((float)$gmes_p11 > 110 )
                                                           $gmes_s11 = 5;

                                        $gmes_s12  = 0;
                                        if ((float)$gmes_p12 > 0 && (float)$gmes_p12 < 50)
                                             $gmes_s12 = 1;
                                        else
                                            if ((float)$gmes_p12 >= 50 && (float)$gmes_p12 < 70)
                                                $gmes_s12 = 2;
                                            else
                                                if ((float)$gmes_p12 >= 70 && (float)$gmes_p12 < 90)
                                                    $gmes_s12 = 3;
                                                else
                                                    if ((float)$gmes_p12 >= 90 && (float)$gmes_p12 <= 110)
                                                        $gmes_s12 = 4;
                                                    else
                                                        if ((float)$gmes_p12 > 110 )
                                                           $gmes_s12 = 5;

                                        //***************************************************//
                                        //***** C - Calcular % acumulado mensual ************//
                                        //***************************************************//
                                        $gacum_p01  = 0;
                                        if ((float)$data[$row][39] > 0 && (float)$data[$row][27] > 0)
                                           $gacum_p01  = ($data[$row][39]/$data[$row][27])*100;    
                                        $gacum_p02  = 0;
                                        if ((float)$data[$row][40] > 0 && (float)$data[$row][28] > 0)
                                           $gacum_p02  = ($data[$row][40]/$data[$row][28])*100;   
                                        $gacum_p03  = 0;
                                        if ((float)$data[$row][41] > 0 && (float)$data[$row][29] > 0)
                                           $gacum_p03  = ($data[$row][41]/$data[$row][29])*100;   
                                        $gacum_p04  = 0;
                                        if ((float)$data[$row][42] > 0 && (float)$data[$row][30] > 0)
                                           $gacum_p04  = ($data[$row][42]/$data[$row][30])*100;   
                                        $gacum_p05  = 0;
                                        if ((float)$data[$row][43] > 0 && (float)$data[$row][31] > 0)
                                           $gacum_p05  = ($data[$row][43]/$data[$row][31])*100;   
                                        $gacum_p06 = 0;
                                        if ((float)$data[$row][44] > 0 && (float)$data[$row][32] > 0)
                                           $gacum_p06  = ($data[$row][44]/$data[$row][32])*100;   
                                        $gacum_p07  = 0;
                                        if ((float)$data[$row][45] > 0 && (float)$data[$row][33] > 0)
                                           $gacum_p07  = ($data[$row][45]/$data[$row][33])*100;   
                                        $gacum_p08  = 0;
                                        if ((float)$data[$row][46] > 0 && (float)$data[$row][34] > 0)
                                           $gacum_p08  = ($data[$row][46]/$data[$row][34])*100;   
                                        $gacum_p09  = 0;
                                        if ((float)$data[$row][47] > 0 && (float)$data[$row][35] > 0)
                                           $gacum_p09  = ($data[$row][47]/$data[$row][35])*100;   
                                        $gacum_p10  = 0;
                                        if ((float)$data[$row][48] > 0 && (float)$data[$row][36] > 0)
                                           $gacum_p10  = ($data[$row][48]/$data[$row][36])*100;   
                                        $gacum_p11  = 0;
                                        if ((float)$data[$row][49] > 0 && (float)$data[$row][37] > 0)
                                           $gacum_p11  = ($data[$row][49]/$data[$row][37])*100;   
                                        $gacum_p12  = 0;
                                        if ((float)$data[$row][50] > 0 && (float)$data[$row][38] > 0)
                                           $gacum_p12  = ($data[$row][50]/$data[$row][38])*100;   

                                        //*******  C - Calcular semáforos del acumulado mensual ***************//
                                        $gacum_s01  = 0;
                                        if ((float)$gacum_p01 > 0 && (float)$gacum_p01 < 50)
                                             $gacum_s01 = 1;
                                        else
                                            if ((float)$gacum_p01 >= 50 && (float)$gacum_p01 < 70)
                                                $gacum_s01 = 2;
                                            else
                                                if ((float)$gacum_p01 >= 70 && (float)$gacum_p01 < 90)
                                                    $gacum_s01 = 3;
                                                else
                                                    if ((float)$gacum_p01 >= 90 && (float)$gacum_p01 <= 110)
                                                        $gacum_s01 = 4;
                                                    else
                                                      if ((float)$gacum_p01 > 110 )
                                                         $gacum_s01 = 5;

                                        $gacum_s02  = 0;
                                        if ((float)$gacum_p02 > 0 && (float)$gacum_p02 < 50)
                                             $gacum_s02 = 1;
                                        else
                                            if ((float)$gacum_p02 >= 50 && (float)$gacum_p02 < 70)
                                                $gacum_s02 = 2;
                                            else
                                                if ((float)$gacum_p02 >= 70 && (float)$gacum_p02 < 90)
                                                    $gacum_s02 = 3;
                                                else
                                                    if ((float)$gacum_p02 >= 90 && (float)$gacum_p02 <= 110)
                                                        $gacum_s02 = 4;
                                                    else
                                                      if ((float)$gacum_p02 > 110 )
                                                         $gacum_s02 = 5;

                                        $gacum_s03  = 0;
                                        if ((float)$gacum_p03 > 0 && (float)$gacum_p03 < 50)
                                             $gacum_s03 = 1;
                                        else
                                            if ((float)$gacum_p03 >= 50 && (float)$gacum_p03 < 70)
                                                $gacum_s03 = 2;
                                            else
                                                if ((float)$gacum_p03 >= 70 && (float)$gacum_p03 < 90)
                                                    $gacum_s03 = 3;
                                                else
                                                    if ((float)$gacum_p03 >= 90 && (float)$gacum_p03 <= 110)
                                                        $gacum_s03 = 4;
                                                    else
                                                      if ((float)$gacum_p03 > 110 )
                                                         $gacum_s03 = 5;

                                        $gacum_s04  = 0;
                                        if ((float)$gacum_p04 > 0 && (float)$gacum_p04 < 50)
                                             $gacum_s04 = 1;
                                        else
                                            if ((float)$gacum_p04 >= 50 && (float)$gacum_p04 < 70)
                                                $gacum_s04 = 2;
                                            else
                                                if ((float)$gacum_p04 >= 70 && (float)$gacum_p04 < 90)
                                                   $gacum_s04 = 3;
                                                else
                                                    if ((float)$gacum_p04 >= 90 && (float)$gacum_p04 <= 110)
                                                        $gacum_s04 = 4;
                                                    else
                                                      if ((float)$gacum_p04 > 110 )
                                                         $gacum_s04 = 5;

                                        $gacum_s05  = 0;
                                        if ((float)$gacum_p05 > 0 && (float)$gacum_p05 < 50)
                                             $gacum_s05 = 1;
                                        else
                                            if ((float)$gacum_p05 >= 50 && (float)$gacum_p05 < 70)
                                                $gacum_s05 = 2;
                                            else
                                                if ((float)$gacum_p05 >= 70 && (float)$gacum_p05 < 90)
                                                    $gacum_s05 = 3;
                                                else
                                                    if ((float)$gacum_p05 >= 90 && (float)$gacum_p05 <= 110)
                                                        $gacum_s05 = 4;
                                                    else
                                                      if ((float)$gacum_p05 > 110 )
                                                         $gacum_s05 = 5;

                                        $gacum_s06  = 0;
                                        if ((float)$gacum_p06 > 0 && (float)$gacum_p06 < 50)
                                             $gacum_s06 = 1;
                                        else
                                            if ((float)$gacum_p06 >= 50 && (float)$gacum_p06 < 70)
                                                $gacum_s06 = 2;
                                            else
                                                if ((float)$gacum_p06 >= 70 && (float)$gacum_p06 < 90)
                                                    $gacum_s06 = 3;
                                                else
                                                    if ((float)$gacum_p06 >= 90 && (float)$gacum_p06 <= 110)
                                                        $gacum_s06 = 4;
                                                    else
                                                      if ((float)$gacum_p06 > 110 )
                                                         $gacum_s06 = 5;

                                        $gacum_s07  = 0;
                                        if ((float)$gacum_p07 > 0 && (float)$gacum_p07 < 50)
                                             $gacum_s07 = 1;
                                        else
                                            if ((float)$gacum_p07 >= 50 && (float)$gacum_p07 < 70)
                                                $gacum_s07 = 2;
                                            else
                                                if ((float)$gacum_p07 >= 70 && (float)$gacum_p07 < 90)
                                                    $gacum_s07 = 3;
                                                else
                                                    if ((float)$gacum_p07 >= 90 && (float)$gacum_p07 <= 110)
                                                        $gacum_s07 = 4;
                                                    else
                                                      if ((float)$gacum_p07 > 110 )
                                                         $gacum_s07 = 5;

                                        $gacum_s08  = 0;
                                        if ((float)$gacum_p08 > 0 && (float)$gacum_p08 < 50)
                                             $gacum_s08 = 1;
                                        else
                                            if ((float)$gacum_p08 >= 50 && (float)$gacum_p08 < 70)
                                                $gacum_s08 = 2;
                                            else
                                                if ((float)$gacum_p08 >= 70 && (float)$gacum_p08 < 90)
                                                    $gacum_s08 = 3;
                                                else
                                                    if ((float)$gacum_p08 >= 90 && (float)$gacum_p08 <= 110)
                                                        $gacum_s08 = 4;
                                                    else
                                                      if ((float)$gacum_p08 > 110 )
                                                         $gacum_s08 = 5;

                                        $gacum_s09  = 0;
                                        if ((float)$gacum_p09 > 0 && (float)$gacum_p09 < 50)
                                             $gacum_s09 = 1;
                                        else
                                            if ((float)$gacum_p09 >= 50 && (float)$gacum_p09 < 70)
                                                $gacum_s09 = 2;
                                            else
                                                if ((float)$gacum_p09 >= 70 && (float)$gacum_p09 < 90)
                                                    $gacum_s09 = 3;
                                                else
                                                    if ((float)$gacum_p09 >= 90 && (float)$gacum_p09 <= 110)
                                                        $gacum_s09 = 4;
                                                    else
                                                      if ((float)$gacum_p09 > 110 )
                                                         $gacum_s09 = 5;

                                        $gacum_s10  = 0;
                                        if ((float)$gacum_p10 > 0 && (float)$gacum_p10 < 50)
                                             $gacum_s10 = 1;
                                        else
                                            if ((float)$gacum_p10 >= 50 && (float)$gacum_p10 < 70)
                                                $gacum_s10 = 2;
                                            else
                                                if ((float)$gacum_p10 >= 70 && (float)$gacum_p10 < 90)
                                                    $gacum_s10 = 3;
                                                else
                                                    if ((float)$gacum_p10 >= 90 && (float)$gacum_p10 <= 110)
                                                        $gacum_s10 = 4;
                                                    else
                                                        if ((float)$gacum_p10 > 110 )
                                                           $gacum_s10 = 5;

                                        $gacum_s11  = 0;
                                        if ((float)$gacum_p11 > 0 && (float)$gacum_p11 < 50)
                                             $gacum_s11 = 1;
                                        else
                                            if ((float)$gacum_p11 >= 50 && (float)$gacum_p11 < 70)
                                                $gacum_s11 = 2;
                                            else
                                                if ((float)$gacum_p11 >= 70 && (float)$gacum_p11 < 90)
                                                    $gacum_s11 = 3;
                                                else
                                                    if ((float)$gacum_p11 >= 90 && (float)$gacum_p11 <= 110)
                                                        $gacum_s11 = 4;
                                                    else
                                                        if ((float)$gacum_p11 > 110 )
                                                           $gacum_s11 = 5;

                                        $gacum_s12  = 0;
                                        if ((float)$gacum_p12 > 0 && (float)$gacum_p12 < 50)
                                             $gacum_s12 = 1;
                                        else
                                            if ((float)$gacum_p12 >= 50 && (float)$gacum_p12 < 70)
                                                $gacum_s12 = 2;
                                            else
                                                if ((float)$gacum_p12 >= 70 && (float)$gacum_p12 < 90)
                                                    $gacum_s12 = 3;
                                                else
                                                    if ((float)$gacum_p12 >= 90 && (float)$gacum_p12 <= 110)
                                                        $gacum_s12 = 4;
                                                    else
                                                        if ((float)$gacum_p12 > 110 )
                                                           $gacum_s12 = 5;                                     

                                        //*********************************************************//
                                        //**************** Subtotales *****************************//
                                        //*********************************************************//

                                        //**** Subtotal A- Acumulado anual ************************//
                                        $stap_02  = (float)$stap_02 + (float)$data[$row][52];
                                        $stac_02  = (float)$stac_02 + (float)$data[$row][54];

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
                                        $smp_01 = (float)$smp_01 + (float)$data[$row][3];
                                        $smp_02 = (float)$smp_02 + (float)$data[$row][4];
                                        $smp_03 = (float)$smp_03 + (float)$data[$row][5];
                                        $smp_04 = (float)$smp_04 + (float)$data[$row][6];
                                        $smp_05 = (float)$smp_05 + (float)$data[$row][7];
                                        $smp_06 = (float)$smp_06 + (float)$data[$row][8];
                                        $smp_07 = (float)$smp_07 + (float)$data[$row][9];
                                        $smp_08 = (float)$smp_08 + (float)$data[$row][10];
                                        $smp_09 = (float)$smp_09 + (float)$data[$row][11];
                                        $smp_10 = (float)$smp_10 + (float)$data[$row][12];
                                        $smp_11 = (float)$smp_11 + (float)$data[$row][13];
                                        $smp_12 = (float)$smp_12 + (float)$data[$row][14]; 

                                        //*** Subtotales B - Acumulado mensual real **************//
                                        $smc_01 = (float)$smc_01 + (float)$data[$row][15];
                                        $smc_02 = (float)$smc_02 + (float)$data[$row][16];
                                        $smc_03 = (float)$smc_03 + (float)$data[$row][17];
                                        $smc_04 = (float)$smc_04 + (float)$data[$row][18];
                                        $smc_05 = (float)$smc_05 + (float)$data[$row][19];
                                        $smc_06 = (float)$smc_06 + (float)$data[$row][20];
                                        $smc_07 = (float)$smc_07 + (float)$data[$row][21];
                                        $smc_08 = (float)$smc_08 + (float)$data[$row][22];
                                        $smc_09 = (float)$smc_09 + (float)$data[$row][23];
                                        $smc_10 = (float)$smc_10 + (float)$data[$row][24];
                                        $smc_11 = (float)$smc_11 + (float)$data[$row][25];
                                        $smc_12 = (float)$smc_12 + (float)$data[$row][26];               
             
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
                                        $sacump_01 = (float)$sacump_01+(float)$data[$row][27];
                                        $sacump_02 = (float)$sacump_02+(float)$data[$row][28];
                                        $sacump_03 = (float)$sacump_03+(float)$data[$row][29];
                                        $sacump_04 = (float)$sacump_04+(float)$data[$row][30];
                                        $sacump_05 = (float)$sacump_05+(float)$data[$row][31];
                                        $sacump_06 = (float)$sacump_06+(float)$data[$row][32];
                                        $sacump_07 = (float)$sacump_07+(float)$data[$row][33];
                                        $sacump_08 = (float)$sacump_08+(float)$data[$row][34];
                                        $sacump_09 = (float)$sacump_09+(float)$data[$row][35];
                                        $sacump_10 = (float)$sacump_10+(float)$data[$row][36];
                                        $sacump_11 = (float)$sacump_11+(float)$data[$row][37];
                                        $sacump_12 = (float)$sacump_10+(float)$data[$row][38]; 
                                        //*** Subtotales C - Acumulado mensual real **************//
                                        $sacumc_01 = (float)$sacumc_01+(float)$data[$row][39];
                                        $sacumc_02 = (float)$sacumc_02+(float)$data[$row][40];
                                        $sacumc_03 = (float)$sacumc_03+(float)$data[$row][41];
                                        $sacumc_04 = (float)$sacumc_04+(float)$data[$row][42];
                                        $sacumc_05 = (float)$sacumc_05+(float)$data[$row][43];
                                        $sacumc_06 = (float)$sacumc_06+(float)$data[$row][44];
                                        $sacumc_07 = (float)$sacumc_07+(float)$data[$row][45];
                                        $sacumc_08 = (float)$sacumc_08+(float)$data[$row][46];
                                        $sacumc_09 = (float)$sacumc_09+(float)$data[$row][47];
                                        $sacumc_10 = (float)$sacumc_10+(float)$data[$row][48];
                                        $sacumc_11 = (float)$sacumc_11+(float)$data[$row][49];
                                        $sacumc_12 = (float)$sacumc_12+(float)$data[$row][50]; 

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
                                        //*** Subtotal C - Calcular semaforos mensuales acumulados ***//
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

                                        <tr>
                                            <td style="text-align:left; vertical-align: middle;font-size:10px;">{{$row}}</td>
                                            <td style="text-align:left; vertical-align: middle;font-size:10px;">{{$data[$row][1].' '.trim($data[$row][2])}} </td>
                                            <td style="text-align:right;vertical-align: middle;font-size:10px;">{{number_format($data[$row][55],0)}}        </td>

                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][52],0)}}</td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][54],0)}}</td>

                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($ganual_p,2)}}    </td>
                                            <td style="text-align:center;">  
                                            @switch($ganual_s)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][3],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][15],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p01,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s01)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][4],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][16],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p02,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s02)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][5],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][17],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p03,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s03)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][6],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][18],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p04,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s04)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][7],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][19],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p05,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s05)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][8],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][20],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p06,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s06)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][9],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][21],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p07,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s07)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][10],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][22],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p08,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s08)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][11],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][23],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p09,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s09)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][12],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][24],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p10,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s10)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][13],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][25],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p11,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s11)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][14],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][26],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gmes_p12,2)}}    </td>
                                                <td style="text-align:center;">  
                                                @switch($gmes_s12)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][27],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][39],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p01,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s01)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][28],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][40],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p02,2)}}</td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s02)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][29],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][41],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p03,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s03)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][30],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][42],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p04,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s04)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][31],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][43],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p05,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s05)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][32],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][44],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p06,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s06)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][33],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][45],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p07,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s07)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][34],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][46],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p08,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s08)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][35],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][47],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p09,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s09)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][36],0)}} </td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][48],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p10,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s10)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][37],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][49],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p11,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s11)
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
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][38],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($data[$row][50],0)}}</td>
                                                <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($gacum_p12,2)}} </td>
                                                <td style="text-align:center;">  
                                                @switch($gacum_s12)
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
                                        </tr>
                                        <?php
                                        $row = $row + 1;
                                        ?>
                                    @endwhile
                                    
                                    <tr>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;">TOTALES </td>

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
                                            @break                                                                          

                                        @case('7')
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacump_07,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacumc_07,0)}}  </td>
                                            <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($sacum_p07,2)}}</td>                                            <td style="text-align:center;">  
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
                                             SEMAFORO <br>
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
       
            <!-- ::::::::::::::::::::::: titulos ::::::::::::::::::::::::: -->
            <table class="table table-sm" align="center">
            <tr>
                <td style="border:0;text-align:center;font-size:10px;">
                Elaboró<br><br> ______________________________<br>
                </td>
                <td style="border:0;text-align:center;font-size:10px;">
                Autorizó<br><br> ______________________________<br>
                </td>                
            </tr>
            <tr>
                <td style="border:0;text-align:left;  font-size:10px;">  </td>
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
                </td>
                <td align="right">
                    <img src = "https://api.qrserver.com/v1/create-qr-code/?data=http://ds.sedesem.edomex.gob.mx:8040/&size=100x100" alt="" title="" align="right" border="0"/>
                </td>
            </tr>             
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
