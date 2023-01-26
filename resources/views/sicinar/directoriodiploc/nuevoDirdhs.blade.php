@extends('sicinar.principal')

@section('title','Nuevo directorio de promoción del desarrollo humano social')

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
    <meta charset="utf-8">
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Menú
                <small> Diagnósticos    </small>                
                <small> Directorio de Desarrollo Humano y Social - Nuevo </small>                
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        
                        {!! Form::open(['route' => 'altanuevodirdhs', 'method' => 'POST','id' => 'nuevodirdhs', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-6 form-group">
                                    <label >Municipio  </label>
                                    <select class="form-control m-bot15" name="municipio_id" id="municipio_id" required>
                                        <option selected="true" disabled="disabled">Seleccionar municipio </option>
                                        @foreach($regrelacion as $mun)
                                            <option value="{{$mun->municipio_id}}">{{$mun->municipio_id.' '.Trim($mun->municipio_desc).' Subsec. '.Trim($mun->subsec_desc)}}</option>
                                        @endforeach
                                    </select>                                    
                                </div>                                  
                            </div>

                            <div class="row">
                                <div class="col-xs-4 form-group">
                                    <label >Cargo </label>
                                    <input type="text" class="form-control" name="cargo_desc" id="cargo_desc" placeholder="Cargo" required>
                                </div>  
                            </div>

                            <div class="row">                                
                                <div class="col-xs-4 form-group">
                                    <label >Responsable </label>
                                    <input type="text" class="form-control" name="dhs_respon" id="dhs_respon" placeholder="Responsable" required>
                                </div>
                            </div>

                            <div class="row">                                
                                <div class="col-xs-4 form-group">
                                    <label >Teléfono de oficina </label>
                                    <input type="text" class="form-control" name="dhs_telofic" id="dhs_telofic" placeholder="Teléfono de oficina" required>
                                </div>       
                            </div>

                            <div class="row">                                                         
                                <div class="col-xs-4 form-group">
                                    <label >Celular </label>
                                    <input type="number" min="0" max="9999999999" class="form-control" name="dhs_telefono" id="dhs_telefono" placeholder="9999999999" required>
                                </div>       
                            </div>
                            <div class="row">                                
                                <div class="col-xs-4 form-group">
                                    <label >Correo electrónico </label>
                                    <input type="text" class="form-control" name="dhs_email" id="dhs_email" placeholder="Correo electrónico" required>
                                </div>
                            </div>

                            <div class="row">                                                    
                                <div class="col-xs-4 form-group">
                                    <label >Domicilio (Calle, no.ext/int., colonia)</label>
                                    <input type="text" class="form-control" name="dhs_dom" id="dhs_dom" placeholder="Domicilio" required>
                                </div>                                                                             
                            </div>


                            <div class="row">
                                <div class="col-md-12 offset-md-5">
                                    {!! Form::submit('Registrar',['class' => 'btn btn-success btn-flat pull-right']) !!}
                                    <a href="{{route('verdirdhs')}}" role="button" id="cancelar" class="btn btn-danger">Cancelar</a>
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
    {!! JsValidator::formRequest('App\Http\Requests\dirdhsRequest','#nuevodirdhs') !!}
@endsection

@section('javascript')
<script language="javascript">
        $(document).ready(function(){
            $("#entidad_fed_id").on('change', function(){
                var entidadfed = $(this).val();
                alert(entidadfed);
                if(entidadfed) {
                    $.ajax({
                        url: '/siinap-v2/public/control-interno/municipios/'+entidadfed,
                        type: "GET",
                        dataType: "json",
                        success:function(data){
                            $("#municipio_id").empty();
                            //var aux = data;
                            //alert(data.length);
                            var html_select = '<option value="">Seleccionar municipio....</option>';
                            for (var i=0; i<data.length ;++i)
                                html_select += '<option value="'+data[i].municipioid+'">'+data[i].municipionombre+'</option>';
                            $('#municipio_id').html(html_select);
                        }
                    });
                }else{
                    var html_select = '<option value="">Seleccionar municipio..............</option>';
                    $("#municipio_id").html(html_select);
                }
            });

        });
</script>

<script>
    function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key);
       letras = "1234567890";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }    

    function soloAlfa(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key);
       letras = "abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ.";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key);
       letras = "abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    function general(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key);
       letras = "abcdefghijklmnñopqrstuvwxyz ABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890,.;:-_<>!%()=?¡¿/*+";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    function soloAlfaSE(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key);
       letras = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }    
</script>

<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        startDate: '-29y',
        endDate: '-18y',
        startView: 2,
        maxViewMode: 2,
        clearBtn: true,        
        language: "es",
        autoclose: true
    });
</script>

@endsection