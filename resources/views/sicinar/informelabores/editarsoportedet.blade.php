@extends('sicinar.principal')

@section('title','Editar soportes mensuales del PA')

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
                <small> Registro -     </small>                
                <small> Soportes - editar </small>           
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">

                        {!! Form::open(['route' => ['actualizarsoportedet',$regprogdanual->folio, $regprogdanual->partida, $mes], 'method' => 'PUT', 'id' => 'actualizarsoportedet', 'enctype' => 'multipart/form-data']) !!}
                        <div class="box-body">

                            <table id="tabla1" class="table table-hover table-striped">
                            @foreach($regprogeanual as $encpa)
                            <tr>
                                <td style="text-align:right; vertical-align: middle;"> </td>
                                <td style="text-align:right; vertical-align: middle;"> 
                                   
                                   
                                    <a href="{{route('verInformes')}}" role="button" id="cancelar" class="btn btn-success"><small>Regresar a informe de avances </small>
                                    </a>
                                   
                                </td>                                     
                            </tr>                                                   

                            <tr>
                                <td style="border:0; text-align:left;font-size:10px;" >
                                <input type="hidden" id="periodo_id"     name="periodo_id"     value="{{$encpa->periodo_id}}">  
                                <input type="hidden" id="fecha_entrega"  name="fecha_entrega"  value="{{$encpa->fecha_entrega}}">  
                                <input type="hidden" id="fecha_entrega2" name="fecha_entrega2" value="{{$encpa->fecha_entrega2}}">  
                                <input type="hidden" id="fecha_entrega3" name="fecha_entrega3" value="{{$encpa->fecha_entrega3}}">  
                                <input type="hidden" id="depen_id1"      name="depen_id1"      value="{{$encpa->depen_id1}}">                                  
                                <input type="hidden" id="depen_id2"      name="depen_id2"      value="{{$encpa->depen_id2}}">  
                                <input type="hidden" id="epproy_id"      name="epproy_id"      value="{{$encpa->epproy_id}}">        
                                <input type="hidden" id="epprog_id"      name="epprog_id"      value="{{$encpa->epprog_id}}">                                                            
                                <input type="hidden" id="folio"          name="folio"          value="{{$encpa->folio}}">  

                                Programa: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                @foreach($regepprog as $prog)
                                    @if($prog->epprog_id == $encpa->epprog_id)
                                        {{Trim($prog->epprog_desc)}}
                                        @break
                                    @endif
                                @endforeach
                                </b><br>                    
                                Proyecto: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                @foreach($regepproy as $proy)
                                    @if($proy->epproy_id == $encpa->epproy_id)
                                        {{Trim($proy->epproy_desc)}}
                                        @break
                                    @endif
                                @endforeach
                                </b><br>                    
                                Unidad responsable: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                @foreach($regdepen as $depen)
                                    @if($depen->depen_id == $encpa->depen_id1)
                                        {{Trim($depen->depen_desc)}}
                                        @break
                                    @endif
                                @endforeach
                                </b><br>                    
                                Unidad ejecutora: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                @foreach($regdepen as $depen)
                                    @if($depen->depen_id == $encpa->depen_id2)
                                        {{Trim($depen->depen_desc)}}
                                        @break
                                    @endif
                                @endforeach
                                </b>              
                                </td>

                                <td style="border:0; text-align:left;font-size:10px;">
                                Fecha de entrega:<b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                {{$encpa->fecha_entrega2}}
                                </b><br>
                                Tipo: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                @foreach($regtipometa as $tipo)
                                    @if($tipo->taccion_id == $encpa->taccion_id)
                                       {{$tipo->taccion_desc}}
                                       @break 
                                    @endif
                                @endforeach
                                </b>
                                <br>

                                Periodo fiscal:<b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$encpa->periodo_id}}</b><br>
                                Folio:<b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$encpa->folio}} --- mes:{{$mes}}</b><br>
                                <b></b>
                                </td>
                            </tr>
                            @endforeach         
                            </table>  
                            <table id="tabla1" class="table table-hover table-striped" >
                                <thead style="color: brown;" class="justify"> 
                                <tr>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">      </th>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">No.   </th>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">Id.   </th>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">      </th>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">      </th>
                                    <th colspan="12" style="text-align:center;vertical-align: middle;font-size:11px;">Metas / Avances / % / Semáforos</th>
                                </tr>                                

                                <tr>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">#                </th>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">IGOB             </th>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">SPP              </th>                                                                                
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">Acción o meta    </th>
                                    <th style="text-align:left;   vertical-align: middle;font-size:11px;">Unidad<br>Medida </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Ene              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Feb              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Mar              </th> 
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Abr              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">May              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Jun              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Jul              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Ago              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Sep              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Oct              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Nov              </th>
                                    <th style="text-align:center;  vertical-align: middle;font-size:11px;">Dic              </th>
                                </tr>
                                </thead>
                                <tr>
                                    <td style="text-align:left; vertical-align: middle;font-size:10px;">{{$regprogdanual->partida}}</td>
                                    <td style="text-align:left; vertical-align: middle;font-size:10px;">{{trim($regprogdanual->lgob_cod)}} </td>
                                    <td style="text-align:left; vertical-align: middle;font-size:10px;">{{trim($regprogdanual->ciprep_id)}}</td>
                                    <td style="text-align:left; vertical-align: middle;font-size:10px;">{{Trim($regprogdanual->actividad_desc)}}</td>
                                        
                                    <td style="text-align:left; vertical-align: middle;font-size:10px;">   
                                        @foreach($regumedida as $umedida)
                                            @if($umedida->umed_id == $regprogdanual->umed_id)
                                                {{$umedida->umed_desc}}
                                                @break                                        
                                            @endif
                                        @endforeach
                                    </td>                                                                            
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_01,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_02,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_03,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_04,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_05,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_06,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_07,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_08,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_09,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_10,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_11,0)}}</td>
                                    <td style="text-align:center; vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesp_12,0)}}</td>                                        
                                </tr>

                                <tr>
                                    <td style="color:#1a1c50;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                    <td style="color:#1a1c50;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                    <td style="color:#1a1c50;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                    <td style="color:#1a1c50;text-align:left; vertical-align: middle;font-size:9px;">Avances</td>
                                    <td style="color:#1a1c50;text-align:left; vertical-align: middle;font-size:9px;"></td>                                                                            
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_01,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_02,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_03,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_04,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_05,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_06,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_07,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_08,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_09,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_10,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_11,0)}}</td>
                                    <td style="color:#1a1c50;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mesc_12,0)}}</td>
                                </tr>                                    
                                <tr>
                                    <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                    <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                    <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                    <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;">%</td>
                                    <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>                                                                            
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p01,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p02,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p03,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p04,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p05,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p06,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p07,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p08,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p09,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p10,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p11,2)}}</td>
                                    <td style="color:purple;text-align:center;vertical-align: middle;font-size:10px;">{{number_format($regprogdanual->mes_p12,2)}}</td>
                                </tr>     
                                    <tr>
                                        <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                        <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                        <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>
                                        <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;">Semáforos</td>
                                        <td style="color:purple;text-align:left; vertical-align: middle;font-size:9px;"></td>   
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_01)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>  
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_02)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>  
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_03)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>  
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_04)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch 
                                        </td>  
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_05)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>  
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_06)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>    
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_07)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>    
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_08)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>    
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_09)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>    
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_10)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>    
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_11)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>    
                                        <td style="text-align:center;">  
                                        @switch($regprogdanual->semaf_12)
                                        @case('1')
                                            <img src="{{ asset('images/semaforo_rojo.jpg') }}"    width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('2')
                                            <img src="{{ asset('images/semaforo_naranja.jpg') }}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('3')
                                            <img src="{{ asset('images/semaforo_amarillo.jpg')}}" width="15px" height="15px" style="text-align:center;"/> 
                                            @break
                                        @case('4')
                                            <img src="{{ asset('images/semaforo_verde.jpg') }}"   width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                            
                                        @case('5')
                                            <img src="{{ asset('images/semaforo_morado.jpg') }}"  width="15px" height="15px" style="text-align:center;"/> 
                                            @break                                                                          
				                        @case('0')  
				                            @break
				                        @default
				                            @break 
                                        @endswitch
                                        </td>    
                                        <td style="color:purple;text-align:left; vertical-align: middle;font-size:10px;"> </td>
                                        <td style="text-align:center;"></td>
                                    </tr>                                                                    
                            </table>

                            @switch($mes)
                                @case('1')                            
                                    @if (!empty($regprogdanual->soporte_01)||!is_null($regprogdanual->soporte_01))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de enero PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_01}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_01}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_01)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de enero PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de enero PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break 
                                @case('2')                                                            
                                    @if (!empty($regprogdanual->soporte_02)||!is_null($regprogdanual->soporte_02))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de febrero PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_02}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_02}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_02)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de febrero PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de febrero PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break                                 
                                @case('3')                            
                                    @if (!empty($regprogdanual->soporte_03)||!is_null($regprogdanual->soporte_03))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de marzo PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_03}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_03}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_03)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de marzo PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de marzo PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break 
                                @case('4')                                                            
                                    @if (!empty($regprogdanual->soporte_04)||!is_null($regprogdanual->soporte_04))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de abril PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_04}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_04}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_04)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de abril PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de abril PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break                                       
                                @case('5')                            
                                    @if (!empty($regprogdanual->soporte_05)||!is_null($regprogdanual->soporte_05))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de mayo PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_05}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_05}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_05)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de mayo PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de mayo PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break 
                                @case('6')                                                            
                                    @if (!empty($regprogdanual->soporte_06)||!is_null($regprogdanual->soporte_06))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de junio PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_06}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_06}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_06)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de junio PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de junio PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break  
                                @case('7')                            
                                    @if (!empty($regprogdanual->soporte_07)||!is_null($regprogdanual->soporte_07))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de julio PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_07}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_07}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_07)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de julio PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de julio PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break 
                                @case('8')                                           
                                    @if (!empty($regprogdanual->soporte_08)||!is_null($regprogdanual->soporte_08))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de agosto PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_08}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_08}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_08)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de agosto PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de agosto PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break
                                @case('9')             
                                    @if (!empty($regprogdanual->soporte_09)||!is_null($regprogdanual->soporte_09))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de septiembre PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_09}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_09}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_09)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de septiembre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de septiembre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break 
                                @case('10')                                                            
                                    @if (!empty($regprogdanual->soporte_10)||!is_null($regprogdanual->soporte_10))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de octubre PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_10}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_10}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_10)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de octubre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de octubre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break  
                                @case('11')                            
                                    @if (!empty($regprogdanual->soporte_11)||!is_null($regprogdanual->soporte_11))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de noviembre PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_11}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_11}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_11)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de noviembre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de noviembre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break 
                                @case('12')          
                                    @if (!empty($regprogdanual->soporte_12)||!is_null($regprogdanual->soporte_12))   
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de diciembre PDF</label><br>
                                                <label ><a href="/storage/{{$regprogdanual->soporte_12}}" class="btn btn-danger" title="Archivo digital de soporte PDF"><i class="fa fa-file-pdf-o"></i>PDF
                                                </a>   &nbsp;&nbsp;&nbsp;{{$regprogdanual->soporte_12}}
                                                </label>
                                            </div>   
                                            <div class="col-xs-6 form-group">                                        
                                                <label>
                                                <iframe width="400" height="300" src="{{ asset('storage/'.$regprogdanual->soporte_12)}}" frameborder="0"></iframe> 
                                                </label>                                       
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 form-group">
                                                <label >Actualizar archivo digital de soporte de diciembre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>      
                                        </div>
                                    @else     <!-- se captura archivo 1 -->
                                        <div class="row">                            
                                            <div class="col-xs-6 form-group">
                                                <label >Archivo digital de soporte de diciembre PDF</label>
                                                <input type="file" class="text-md-center" style="color:red" name="soporte" id="soporte" placeholder="Subir archivo digital de soporte PDF" >
                                            </div>                                                
                                        </div>
                                    @endif  
                                    @break                                       
                            @endswitch

                            <div class="row">
                                <div class="col-xs-10 form-group">
                                    <label >Link de soporte </label>
                                    <input type="text" class="form-control" name="link" id="link" placeholder="Link de soporte 150 caracteres" value="{{Trim($regprogdanual->link_01)}}"  required>
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
                                    @foreach($regprogeanual as $encpa)
                                       <a href="{{route('versoportesdet',$encpa->folio)}}" role="button" id="cancelar" class="btn btn-danger">Cancelar
                                       </a>
                                       @break
                                    @endforeach       
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
    {!! JsValidator::formRequest('App\Http\Requests\soportedetRequest','#actualizarsoportedet') !!}
@endsection

@section('javascrpt')
@endsection

