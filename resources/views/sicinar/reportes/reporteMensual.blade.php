@extends('sicinar.principal')

@section('title','Reporte mensual')

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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Reportes 
                <small>Mensual </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
                <li><a href="#">Reportes  </a></li>
                <li><a href="#">Mensual   </a></li>         
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        
                        {!! Form::open(['route' => 'verreportemensual', 'method' => 'POST','id' => 'verreportemensual', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">

                            <div class="row">    
                                <div class="col-xs-2 form-group"> 
                                    <select class="form-control m-bot15" name="periodo_id" id="periodo_id" required>
                                        <option selected="true" disabled="disabled">Seleccionar periodo fiscal</option>
                                        @foreach($regperiodos as $periodo)
                                            <option value="{{$periodo->periodo_id}}">{{$periodo->periodo_desc}}</option>
                                        @endforeach
                                    </select>                                    
                                </div>    
                                <div class="col-xs-2 form-group">
                                    <select class="form-control m-bot15" name="mes_id" id="mes_id" required>
                                        <option selected="true" disabled="disabled">Seleccionar mes </option>
                                        @foreach($regmeses as $mes)
                                           <option value="{{$mes->mes_id}}">{{$mes->mes_desc}}</option>
                                        @endforeach
                                    </select>                                  
                                </div>                                    
                                <div class="col-xs-2 form-group">
                                    <select class="form-control m-bot15" name="taccion_id" id="taccion_id" required>
                                        <option selected="true" disabled="disabled">Seleccionar tipo de proyecto </option>
                                        <option value="0">TODOS   </option>
                                        @foreach($regtipometa as $tmeta)
                                           <option value="{{$tmeta->taccion_id}}">{{$tmeta->taccion_id.' '.Trim($tmeta->taccion_desc)}}</option>
                                        @endforeach
                                    </select>                                  
                                </div>                                    
                            </div>                            
                            <div class="row">    
                                <div class="col-xs-4 form-group"><b>Tipo de reporte:</b> &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="clase" id="clase"         value="D" style="margin-right:8px;">
                                    Detallado   &nbsp;&nbsp;&nbsp;&nbsp;                           
                                    <input type="radio" name="clase" id="clase" checked value="C" style="margin-right:8px;">
                                    Concentrado &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="clase" id="clase"         value="S" style="margin-right:8px;">
                                    Base de datos
                                </div>  

                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="col-xs-3 form-group"><b>Generar reporte a:</b> &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="tipo" id="tipo" checked value="P" style="margin-right:8px;">
                                    Pantalla &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="tipo" id="tipo"         value="E" style="margin-right:8px;">
                                    Excel    &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="tipo" id="tipo"         value="D" style="margin-right:8px;">
                                    PDF
                                </div>  
                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <div class="col-xs-3 form-group"><b>¿Se envia al organo de contol?</b> &nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="control" id="control"         value="S" style="margin-right:8px;">
                                    Si &nbsp;&nbsp;&nbsp;    
                                    <input type="radio" name="control" id="control" checked value="N" style="margin-right:8px;">
                                    No                                     
                                </div>  
                            </div>                            

                            <table id="tabla1" class="table table-hover table-striped" width="80%">
                                <tr>
                                    <th style="color:green;text-align:left; vertical-align: middle;">Seleccionar         </th>
                                    <th style="color:green;text-align:left; vertical-align: middle;">Id.                 </th>
                                    <th style="color:green;text-align:left; vertical-align: middle;">Unidad ejecutora    </th>
                                    <th style="color:green;text-align:right; vertical-align: middle;">Total<br>Actividades</th>
                                </tr>
                                @foreach($regprogeanual as $epa)
                                    <tr>
                                        <td style="color:yellow;font-size:11px;"> 
                                            <input type="checkbox" name="op[]"  id="op[]" value="{{$epa->depen_id2}}" placeholder="SI" checked="checked" required>
                                        </td>
                                        <td>
                                            <input type="hidden" id="depen_id[]" name="depen_id[]" value="{{$epa->depen_id2}}">  
                                            <b style="color: orange;font-size:11px;">{{$epa->depen_id2}}</b>
                                        </td>
                                        <td style="text-align:left;vertical-align:middle;color:gray;font-size:11px;">{{trim($epa->depen_desc)}}   </td>
                                        <td style="text-align:right; vertical-align:middle;font-size:11px;">{{number_format($epa->nactiv,0)}}</td>
                                    </tr>
                                @endforeach
                            </table>
                                
         
                            <div class="row">
                                <div class="col-md-12 offset-md-5">
                                    {!! Form::submit('Generar reporte',['class' => 'btn btn-danger btn-flat pull-right']) !!}
                                </div>                                
                            </div>                            

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('request')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\reportemensualfiltroRequest','#verreportemensual') !!}
@endsection
