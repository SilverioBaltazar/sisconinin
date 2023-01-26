@extends('sicinar.principal')

@section('title','Grafica por unidad admon. ')

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
      <h1>
        Graficas
        <small>Por Dependencia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
        
        <li><a href="#">Graficas</a></li>
        <li class="active">Por dependencia </li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
              <table id="tabla1" class="table table-striped table-bordered table-sm">
                  <thead style="color: brown;" class="justify">
                      <tr>
                          <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;"> </th>
                          <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;"> </th>
                          <th style="background-color:darkgreen;color:white; text-align:right;vertical-align: middle;font-size:11px;"> </th>

                          <th colspan="4" style="background-color:darkgreen; color:white; text-align:center;vertical-align:middle; font-size:11px;">ANUAL </th>
                      </tr>
                      <tr>
                          <th style="text-align:left;  font-size:10px;">ID.           </th>
                          <th style="text-align:left;  font-size:10px;">UNIDAD ADMON. U ORGANISMO AUXILIAR    </th>
                          <th style="text-align:center;font-size:10px;">ACCIONES<br>METAS </th>
                          <th style="text-align:center;font-size:10px;">PROGRAMADO </th>
                          <th style="text-align:center;font-size:10px;">REAL       </th>
                          <th style="text-align:center;font-size:10px;">%          </th>
                          <th style="text-align:center;font-size:10px;">SMF        </th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php
                    $i = 0;
                    $acum =0;
                    $maxi =0;
                    $mini =0;
                    $prom =0;
                    
                    $ganual_p = 0;
                    $ganual_s = 0;
                    $sanual_p = 0;
                    $sanual_s = 0;         

                    $stap_02  = 0;
                    $stac_02  = 0;

                    $gacum_p  = 0;
                    $gacum_c  = 0;

                    $sacump   = 0;
                    $sacumc   = 0;                    
                    $sacum_p  = 0;
                    $sacum_s  = 0;                    

                    ?>
                    @foreach($regprogdanual as $pa)
                        <?php
                        $i    = (float)$i + 1;
                        $acum = (float)$acum + (float)$pa->nactiv;
                        //*************** A - Calcular % anual *********//
                        $ganual_p  = 0;
                        if ((float)$pa->gtac_02 > 0 && (float)$pa->gtap_02 > 0)
                            $ganual_p  = ($pa->gtac_02/$pa->gtap_02)*100;  
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


                        //*********************************************************//
                        //**************** Subtotales A ***************************//
                        //*********************************************************//
                        //**** Subtotal A- Acumulado anual ************************//
                        $stap_02  = (float)$stap_02 + (float)$pa->gtap_02;
                        $stac_02  = (float)$stac_02 + (float)$pa->gtac_02;
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

                        //******* Calcular minimo ************//
                        if ( (float)$mini == 0 )
                            $mini = $pa->nactiv;
                        else
                            if ( (float)$mini > (float)$pa->nactiv )
                                  $mini = $pa->nactiv;
                        //******* Calcular maximos ************//       
                        if ( (float)$maxi == 0 )
                            $maxi = $pa->nactiv;
                        else
                            if ( (float)$maxi < (float)$pa->nactiv )
                                $maxi = $pa->nactiv;                                  
                        ?>
                        <tr>
                            <td style="color:darkgreen;font-size:10px;">{{$pa->depen_id2}}        </td>
                            <td style="color:darkgreen;font-size:10px;">{{Trim($pa->depen_desc)}} </td>
                            <td style="color:darkgreen;text-align:center;font-size:10px;">{{number_format($pa->nactiv,0)}}</td>

                            <td style="color:darkgreen;text-align:center;font-size:10px;">{{number_format($pa->gtap_02,0)}}</td>
                            <td style="color:darkgreen;text-align:center;font-size:10px;">{{number_format($pa->gtac_02,0)}}</td>
                            <td style="color:darkgreen;text-align:center;font-size:10px;">{{number_format($ganual_p   ,2)}}</td>
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
                        </tr>
                    @endforeach 
                    <?php
                    //********* calcular promedio//
                    if ( (float)$acum > 0 )
                        $prom = (float)$acum/(float)$i;                 
                    ?>
                    <tr>
                        <td></td>
                        <td style="color:green;"><b>TOTAL</b></td>                         
                        <td style="color:green; text-align:center;font-size:10px;"><b>{{number_format($acum,0)}} </b></td>                      

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
                    </tr>
                    <tr>
                        <td></td>
                        <td style="color:green;"><b>MÍNIMO DE ACCIONES/METAS</b></td>                         
                        <td style="color:green; text-align:center;font-size:10px;"><b>{{number_format($mini,0)}} </b></td>                      
                    </tr>
                    <tr>
                        <td></td>
                        <td style="color:green;"><b>MÁXIMO DE ACCIONES/METAS</b></td>                         
                        <td style="color:green; text-align:center;font-size:10px;"><b>{{number_format($maxi,0)}} </b></td>                      
                    </tr>
                    <tr>
                        <td></td>
                        <td style="color:green;"><b>PROMEDIO DE ACCIONES/METAS POR UNIDAD ADMON.</b></td>                         
                        <td style="color:green; text-align:center;font-size:10px;"><b>{{number_format($prom,0)}} </b></td>                      
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>


      <!-- Grafica de pie en 3D
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title" style="text-align:center;">Numeralia </h3> 
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="box-body">
                  <camvas id="piechart_3d" style="width: 900px; height: 500px;"></camvas>
                </div>
              </div> 
            </div>
          </div>
        </div>
      <div>
      -->

      <!-- Grafica de barras 2D-->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box box-success">
              <!-- <div class="box-header with-border"> -->
                <!--<h3 class="box-title" style="text-align:center;">Gráfica por Clase de empleado 2D </h3> -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="box-body">
                  <camvas id="tot_x_unidad" style="width: 900px; height: 500px;"></camvas>
                </div>
              <!-- </div> -->
            </div>
          </div>
        </div>

      <!-- Grafica de curva-->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box box-success">
              <!-- <div class="box-header with-border"> -->
                <!--<h3 class="box-title" style="text-align:center;">Gráfica por Clase de empleado 2D </h3> -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="box-body">
                  <camvas id="curve_chart" style="width: 900px; height: 500px;"></camvas>
                </div>
              <!-- </div> -->
            </div>
          </div>
        </div>        

        <!-- Grafica de dona 
        Making a donut chart
        https://developers.google.com/chart/interactive/docs/gallery/piechart#donut
        
        <div class="col-md-6">
          <div class="box">
            <div class="box box-danger">
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
        
                <div class="box-body">
                  <camvas id="donutchart" style="width: 900px; height: 500px;"></camvas>
                </div>
              
            </div>
          </div>
        </div>        
        -->
      </div>      

    </section>
  </div>
@endsection

@section('request')
  <script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
  
  <!-- Grafica de pay, barras y otras
    https://google-developers.appspot.com/chart/interactive/docs/gallery/piechart
    https://www.youtube.com/watch?v=Y83fxTpNSsY
  -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endsection

@section('javascrpt')

  
  <!-- Grafica de pie (pay) 2D Google/chart 
  <script type="text/javascript">
      // https://www.youtube.com/watch?v=Y83fxTpNSsY ejemplo de grafica de pay google
      google.charts.load("current", {packages:["corechart"]}); 
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Servicio', 'Total'],
            @foreach($regprogdanual as $padron)
                ['{{$padron->depen_id2.' '.substr(trim($padron->depen_desc),0,100)}}', {{$padron->nactiv}} ],
            @endforeach
            //['Work',     11],
            //['Eat',      2],
            //['Commute',  2],
            //['Watch TV', 2],
            //['Sleep',    7]
        ]);

        var options = {
          title: 'Gráfica de PAY. Unidad admon u organismo auxiliar',
          //chart: { title: 'Gráfica de Pay',
          //         subtitle: 'IAPS por Clase de empleado' },          
          is3D: true,
          width:1100,                  // Ancho de la pantalla horizontal
          height:800,                  // Alto de la pantall '75%',          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
  </script>
  -->

    <!-- Grafica de barras 2D Google/chart -->
  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Unidad administrativa u organismo auxiliar', 'Actividades'],
          @foreach($regprogdanual as $padron)
             ['{{$padron->depen_id2.' '.substr(trim($padron->depen_desc),0,80)}}', {{$padron->nactiv}} ],
          @endforeach          
        ]);

        var options = {
          //Boolean - Whether we should show a stroke on each segment
          //segmentShowStroke    : true,
          //String - The colour of each segment stroke
          //segmentStrokeColor   : '#fff',
          //Number - The width of each segment stroke
          //segmentStrokeWidth   : 2,
          //Number - The percentage of the chart that we cut out of the middle
          //percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          //animationSteps       : 100,  
                 
          title: 'Por Unidad administrativa',
          width:1100,                 // Ancho de la pantalla horizontal
          height:800,                 // Alto de la pantalla '75%',
          colors: ['green'],          // Naranja
          //backgroundColor:'#fdc', 
          stroke:'red',
          highlight: 'blue',
          legend: { position: 'none' },
          chart: { title: 'Gráfica de barras (2D). ACTIVIDADES/METAS',
                   subtitle: 'Por Unidad Administrativa U Organismo Auxiliar' },
          bars: 'horizontal', // Required for Material Bar Charts.
          //bars: 'vertical', // Required for Material Bar Charts.
          //chartArea:{left:20, top:0, width:'50%', height:'75%', backgroundColor:'#fdc', stroke:'green'},
          axes: {
            x: {
              0: { side: 'top', label: 'Actividades/metas'} // Top x-axis.
              //1: { side: 'top', label: 'Total de IAPS'} // Top x-axis.
              //distance: {label: 'Total'}, // Bottom x-axis.
              //brightness: {side: 'top', label: 'Total de IAPS'} // Top x-axis.
            }
          },
          annotations: {
            textStyle: {
            fontName: 'Times-Roman',
            fontSize: 14,
            bold: true,
            italic: true,
            // The color of the text.
            color: '#871b47',
            // The color of the text outline.
            auraColor: '#d799ae',
            // The transparency of the text.
            opacity: 0.8
            }
          },
          backgroundColor: { fill:  '#666' },
          //bar: { groupWidth: "90%" }
          bar: { groupWidth: "50%" }
        };

        var chart = new google.charts.Bar(document.getElementById('tot_x_unidad'));
        chart.draw(data, options);
      };
  </script>  

  
  <!-- Grafica de dona 
  Making a donut chart
  https://developers.google.com/chart/interactive/docs/gallery/piechart#donut
  -->
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['servicio', 'Total'],
          @foreach($regprogdanual as $padron)
             ['{{$padron->depen_id2.' '.substr(trim($padron->depen_desc),0,100)}}', {{$padron->nactiv}} ],
          @endforeach            
          //['Work',     11],
          //['Eat',      2],
          //['Commute',  2],
          //['Watch TV', 2],
          //['Sleep',    7]
        ]);

        var options = {
          title: 'Gráfica por dependencia',
          pieHole: 0.4,
          width: 700,                   // Ancho de la pantalla horizontal
          height: 500,                  // Alto de la pantall '75%',
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
  </script>  

  <!-- Grafica de Curva 
  https://developers.google.com/chart/interactive/docs/gallery/linechart
  -->
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Unidad', 'Programado', 'Real'],
          @foreach($regprogdanual as $padron)
              ['{{$padron->depen_id2.' '.substr(trim($padron->depen_desc),0,80)}}',{{$padron->gtap_02}},{{$padron->gtac_02}} ],
          @endforeach                      
          //['2004',  1000,      400],
          //['2005',  1170,      460],
          //['2006',  660,       1120],
          //['2007',  1030,      540]
          ]);

        var options = {
          title: 'Gráfica de curva. PROGRAMACIÓN ANUAL',
          subtitle: 'Por Unidad Administrativa',
          curveType: 'function',
          legend: { position: 'bottom' },
          width: 1100,                   // Ancho de la pantalla horizontal
          height: 500,                  // Alto de la pantalla '75%',
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>
@endsection
