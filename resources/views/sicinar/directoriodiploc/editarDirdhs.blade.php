@extends('sicinar.principal')

@section('title','Directorio de Des.Hum.y Soc.')

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
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Menú
                <small> Diagnósticos</small>                
                <small> Directorio de Desarrollo Humano y Social - editar </small>           
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">

                        {!! Form::open(['route' => ['actualizardirdhs',$regdirdhs->dhs_id], 'method' => 'PUT', 'id' => 'actualizardirdhs', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">
                            <div class="row">    
                                <div class="col-xs-3 form-group">
                                    <label  style="color:green;">Subsecretaría </label><br>
                                    <td style="text-align:left; vertical-align: middle;">{{$regdirdhs->subsec_id.' '.Trim($regdirdhs->subsec_desc)}}</td>
                                </div> 
                                <div class="col-xs-2 form-group">
                                    <label  style="color:green;">Coord. regional </label><br>
                                    <td style="text-align:left; vertical-align: middle;">{{$regdirdhs->coord_id.' '.Trim($regdirdhs->coord_desc)}}</td>
                                </div> 
                                <div class="col-xs-2 form-group">
                                    <label  style="color:green;">Región </label><br>
                                    <td style="text-align:left; vertical-align: middle;">{{$regdirdhs->region_romano.' '.Trim($regdirdhs->region_desc)}}</td>
                                </div> 
                                <div class="col-xs-3 form-group">
                                    <input type="hidden" id="municipio_id" name="municipio_id" value="{{$regdirdhs->municipio_id}}">  
                                    <label  style="color:green;">Municipio </label><br>
                                    <td style="text-align:left; vertical-align: middle;">{{$regdirdhs->municipio_id.' '.Trim($regdirdhs->municipio_desc)}}</td>                                     
                                </div>                                                                                                 
                                <div class="col-xs-1 form-group">
                                    <input type="hidden" id="dhs_id" name="dhs_id" value="{{$regdirdhs->dhs_id}}">  
                                    <label  style="color:green;">Id. </label><br>{{$regdirdhs->dhs_id}}  
                                </div>    
                            </div>

                            <div class="row">
                                <div class="col-xs-4 form-group">
                                    <label >Cargo </label>
                                    <input type="text" class="form-control" name="cargo_desc" id="cargo_desc" placeholder="Cargo" value="{{Trim($regdirdhs->cargo_desc)}}" required>
                                </div>  
                            </div>

                            <div class="row">                                
                                <div class="col-xs-4 form-group">
                                    <label >Responsable </label>
                                    <input type="text" class="form-control" name="dhs_respon" id="dhs_respon" placeholder="Responsable" value="{{Trim($regdirdhs->dhs_respon)}}" required>
                                </div>
                            </div>

                            <div class="row">                                
                                <div class="col-xs-4 form-group">
                                    <label >Teléfono de oficina </label>
                                    <input type="text" class="form-control" name="dhs_telofic" id="dhs_telofic" placeholder="Telefono de oficina" value="{{Trim($regdirdhs->dhs_telofic)}}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-4 form-group">
                                    <label >Celular </label>
                                    <input type="number" min="0" max="9999999999" class="form-control" name="dhs_telefono" id="dhs_telefono" placeholder="Celular" value="{{$regdirdhs->dhs_telefono}}" required>
                                </div>        
                            </div>

                            <div class="row">
                                <div class="col-xs-4 form-group">
                                    <label >Correo electrónico</label>
                                    <input type="text" class="form-control" name="dhs_email" id="dhs_email" value="{{trim($regdirdhs->dhs_email)}}" placeholder="Correo electrónico" required>
                                </div>                           
                            </div>
                            <div class="row">
                                <div class="col-xs-8 form-group">
                                    <label >Domicilio (Calle, no.ext/int. y colonia) </label>
                                    <input type="text" class="form-control" name="dhs_dom" id="dhs_dom" value="{{trim($regdirdhs->dhs_dom)}}" placeholder="Domicilio donde vive" required>
                                </div>
                            </div>                            


                            <div class="row">                                
                                <div class="col-xs-12 form-group">
                                    <label >Observaciones (200 carácteres)</label>
                                    <textarea class="form-control" name="dhs_obs1" id="dhs_obs1" rows="2" cols="120" placeholder="Observaciones (200 carácteres)" required>{{Trim($regdirdhs->dhs_obs1)}}
                                    </textarea>
                                </div>                                
                            </div>

                            <div class="row">
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
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
    {!! JsValidator::formRequest('App\Http\Requests\dirdhsRequest','#actualizardirdhs') !!}
@endsection

@section('javascrpt')
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

