@extends('sicinar.principal')

@section('title','Estadística de padrón de beneficiarios por servicio')

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
        <small>Por tipo de proyecto</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
        
        <li><a href="#">Graficas</a></li>
        <li class="active">Por tipo de proyecto </li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
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
                          <th rowspan="2" style="text-align:left;  font-size:10px;">ID.             </th>
                          <th rowspan="2" style="text-align:left;  font-size:10px;">TIPO DE PROYECTO</th>
                          <th rowspan="2" style="text-align:center;font-size:10px;">TOTAL           </th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php
                    $i = 0;
                    ?>
                    @foreach($regprogeanual as $pa)
                          <?php
                          $i = (float)$i + (float)$pa->total;
                          ?>
                          <tr>
                              <td style="color:darkgreen;font-size:10px;">{{$pa->taccion_id}}        </td>
                              <td style="color:darkgreen;font-size:10px;">{{Trim($pa->taccion_desc)}} </td>
                              <td style="color:darkgreen;text-align:center;font-size:10px;">{{number_format($pa->total,0)}}</td>
                          </tr>
                      @endforeach                  
                      <tr>
                          <td></td>
                          <td style="color:green;"><b>TOTAL</b></td>                         
                          <td style="color:green; text-align:center;font-size:10px;"><b>{{number_format($i,0)}} </b></td>                      
                      </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>


      <!-- Grafica de pie en 3D -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title" style="text-align:center;">Gráfica de Pay </h3> 
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

      <!-- Grafica de curva
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box box-success">
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <div class="box-body">
                  <camvas id="curve_chart" style="width: 900px; height: 500px;"></camvas>
                </div>
            </div>
          </div>
        </div>        
        -->

        <!-- Grafica de dona 
        Making a donut chart
        https://developers.google.com/chart/interactive/docs/gallery/piechart#donut
        -->
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

  
  <!-- Grafica de pie (pay) 2D Google/chart -->
  <script type="text/javascript">
      // https://www.youtube.com/watch?v=Y83fxTpNSsY ejemplo de grafica de pay google
      google.charts.load("current", {packages:["corechart"]}); 
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tipo', 'Total'],
            @foreach($regprogeanual as $pa)
                ['{{$pa->taccion_desc}}', {{$pa->total}} ],
            @endforeach
            //['Work',     11],
            //['Eat',      2],
            //['Commute',  2],
            //['Watch TV', 2],
            //['Sleep',    7]
        ]);

        var options = {
          title: 'Por tipo de proyecto',
          //chart: { title: 'Gráfica de Pay',
          //         subtitle: 'IAPS por Clase de empleado' },          
          is3D: true,
          width:800,                  // Ancho de la pantalla horizontal
          height:500,                  // Alto de la pantall '75%',          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
  </script>
  

    <!-- Grafica de barras 2D Google/chart -->
  <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Tipo de proyecto', 'Total'],
          @foreach($regprogeanual as $pa)
             ['{{$pa->taccion_desc}}', {{$pa->total}} ],
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
          //width:1100,                 // Ancho de la pantalla horizontal
          //height:800,                 // Alto de la pantalla '75%',
          width:500,                 // Ancho de la pantalla horizontal
          height:300,                 // Alto de la pantalla '75%',          
          colors: ['green'],          // Naranja
          //backgroundColor:'#fdc', 
          stroke:'red',
          highlight: 'blue',
          legend: { position: 'none' },
          chart: { title: 'Gráfica de barras (2D). ',
                   subtitle: 'Por Tipo de proyecto' },
          bars: 'horizontal', // Required for Material Bar Charts.
          //bars: 'vertical', // Required for Material Bar Charts.
          //chartArea:{left:20, top:0, width:'50%', height:'75%', backgroundColor:'#fdc', stroke:'green'},
          axes: {
            x: {
              0: { side: 'top', label: 'Total de proyectos'} // Top x-axis.
              //1: { side: 'top', label: 'Total de IAPS'} // Top x-axis.
              //distance: {label: 'Total'}, // Bottom x-axis.
              //brightness: {side: 'top', label: 'Total de IAPS'} // Top x-axis.
            }
          },
          annotations: {
            textStyle: {
            fontName: 'Times-Roman',
            fontSize: 18,
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
          ['Tipo', 'Total'],
          @foreach($regprogeanual as $pa)
             ['{{$pa->taccion_desc}}', {{$pa->total}} ],
          @endforeach            
          //['Work',     11],
          //['Eat',      2],
          //['Commute',  2],
          //['Watch TV', 2],
          //['Sleep',    7]
        ]);

        var options = {
          title: 'Gráfica de dona por Tipo de proyecto',
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
  
  <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Unidad', 'Programado', 'Real'],
          @foreach($regprogeanual as $pa)
              ['{{trim($pa->taccion_desc)}}',{{$pa->gtap_02}},{{$pa->gtac_02}} ],
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
          width: 900,                   // Ancho de la pantalla horizontal
          height: 500,                  // Alto de la pantall '75%',
        };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        chart.draw(data, options);
      }
    </script>
    -->
@endsection
