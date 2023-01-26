@extends('sicinar.principal')

@section('title','Reporte trimestral finanzas')

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
                <small>Trimestral Finanzas </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
                <li><a href="#">Reportes  </a></li>
                <li><a href="#">Trimestral finanzas  </a></li>         
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        
                        {!! Form::open(['route' => 'verreportepa', 'method' => 'POST','id' => 'verreportepa', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-2 form-group">
                                    <label >Folio </label>
                                    <input type="text" class="form-control" name="folio" id="folio" placeholder="folio" required>
                                </div>  
                            </div>       

                            <div class="row">    
                                <div class="col-xs-2 form-group">
                                    <select name="trim" id="trim" class="form-control">
                                    <option value="">Seleccionar trimestre  </option>
                                    <option value="1">1   </option>
                                    <option value="2">2   </option>
                                    <option value="3">3   </option>
                                    <option value="4">4   </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="col-xs-6 form-group">Tipo de reporte: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!--
                                    <input type="radio" name="clase" checked value="C" style="margin-right:8px;">
                                    Concentrado &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    -->
                                    <input type="radio" name="clase" checked value="D" style="margin-right:8px;">
                                    Detallado
                                </div>  
                            </div>               

                            <div class="row">    
                                <div class="col-xs-6 form-group">Generar reporte a: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="tipo" value="P" style="margin-right:8px;">
                                    Pantalla &nbsp;&nbsp;&nbsp;
                                    
                                    <input type="radio" name="tipo" checked value="E" style="margin-right:8px;">
                                    Excel &nbsp;&nbsp;&nbsp;
                                    
                                    <input type="radio" name="tipo" value="D" style="margin-right:8px;">PDF
                                    
                                </div>  
                            </div>
         
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
    {!! JsValidator::formRequest('App\Http\Requests\reportepafiltroRequest','#verreportepa') !!}
@endsection
