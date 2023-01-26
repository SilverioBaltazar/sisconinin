@extends('sicinar.principal')

@section('title','Ver reporte de consumo detallado trimestre 1')

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
                <li><a href="#">Trimestral finanzas  </a></li>         
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                        <table id="tabla1" class="table table-hover table-striped">
                        @foreach($regprogdanual as $encpa)
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
                                &nbsp;&nbsp;&nbsp;&nbsp;{{$encpa->epprog_id}}&nbsp;&nbsp;
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
                                &nbsp;&nbsp;&nbsp;&nbsp;{{$encpa->epproy_id}}&nbsp;&nbsp;
                                @foreach($regepproy as $proy)
                                    @if($proy->epproy_id == $encpa->epproy_id)
                                        {{Trim($proy->epproy_desc)}}
                                        @break
                                    @endif
                                @endforeach
                                </b><br>                    
                                Unidad responsable: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;{{$encpa->depen_id1}}&nbsp;&nbsp;
                                @foreach($regdepen as $depen)
                                    @if($depen->depen_id == $encpa->depen_id1)
                                        {{Trim($depen->depen_desc)}}
                                        @break
                                    @endif
                                @endforeach
                                </b><br>                    
                                Unidad ejecutora: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$encpa->depen_id2}}&nbsp;&nbsp;
                                @foreach($regdepen as $depen)
                                    @if($depen->depen_id == $encpa->depen_id2)
                                        {{Trim($depen->depen_desc)}}
                                        @break
                                    @endif
                                @endforeach
                                </b>              
                                </td>

                                <td style="border:0; text-align:right;font-size:10px;">
                                Fecha de entrega:<b style="text-align:right; vertical-align: middle; color:green;font-size:10px;">
                                {{$encpa->fecha_entrega2}}
                                </b><br>
                                Periodo fiscal:<b style="text-align:right; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$encpa->periodo_id}}</b><br>
                                Folio:<b style="text-align:right; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$encpa->folio}}</b><br>
                                Trimestre: <b style="text-align:left; vertical-align: middle; color:green;font-size:10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{$trim}}
                                </b>
                                </td>
                            </tr>
                            @break
                            @endforeach             
                        </table>

                        <div class="box-body">
                            <table id="tabla1" class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">         </th>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">No.      </th>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">Id.      </th>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">         </th>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">Unidad   </th>
                                        <th style="background-color:darkgreen;color:white; text-align:left; vertical-align: middle;font-size:11px;">         </th>                                        
                                        <th colspan="3" style="background-color:darkgreen;color:white; text-align:center;vertical-align:middle; font-size:11px;">Enero   </th>
                                        <th colspan="3" style="background-color:darkgreen;color:white; text-align:center;vertical-align:middle; font-size:11px;">Febrero </th>
                                        <th colspan="3" style="background-color:darkgreen;color:white; text-align:center;vertical-align:middle; font-size:11px;">Marzo   </th>
                                        <th colspan="4" style="background-color:darkorange;color:white;text-align:center;vertical-align:middle; font-size:11px;">Trimestre &nbsp;{{$trim}} </th>
                                        <th colspan="4" style="background-color:purple;    color:white;text-align:center;vertical-align:middle; font-size:11px;">Acum. al periodo</th>
                                    </tr>                                
                                    <tr>
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">#            </th>
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">IGOB         </th>
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">SPP          </th>  
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">Acción o meta</th>
                                        <th style="background-color:darkgreen;color:white;text-align:left; vertical-align: middle;font-size:11px;">Medida       </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">Anual        </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">Prog.        </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">Real        </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">%            </th>

                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">Prog.        </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">Real        </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">%            </th>

                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">Prog.        </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">Real        </th>
                                        <th style="background-color:darkgreen;color:white;text-align:right;vertical-align: middle;font-size:11px;">%            </th>

                                        <th style="background-color:orange;color:white;text-align:right; vertical-align: middle;font-size:11px;">Prog.       </th>
                                        <th style="background-color:orange;color:white;text-align:right; vertical-align: middle;font-size:11px;">Real       </th>
                                        <th style="background-color:orange;color:white;text-align:right; vertical-align: middle;font-size:11px;">%           </th>
                                        <th style="background-color:orange;color:white;text-align:center;vertical-align: middle;font-size:11px;">Sf.         </th>

                                        <th style="background-color:purple;color:white;text-align:right; vertical-align: middle;font-size:11px;">Prog.       </th>
                                        <th style="background-color:purple;color:white;text-align:right; vertical-align: middle;font-size:11px;">Real       </th>
                                        <th style="background-color:purple;color:white;text-align:right; vertical-align: middle;font-size:11px;">%           </th>
                                        <th style="background-color:purple;color:white;text-align:center;vertical-align: middle;font-size:11px;">Sf.         </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($regprogdanual as $dpa)
                                    <tr>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;">{{$dpa->partida}}</td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;">{{trim($dpa->lgob_cod)}} </td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;">{{trim($dpa->ciprep_id)}}</td>
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;">{{Trim($dpa->actividad_desc)}}</td>
                                        
                                        <td style="text-align:left; vertical-align: middle;font-size:10px;">   
                                        @foreach($regumedida as $umedida)
                                            @if($umedida->umed_id == $dpa->umed_id)
                                                {{Trim($umedida->umed_desc)}}
                                                @break                                        
                                            @endif
                                        @endforeach 
                                        </td>                                                                            
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->totp_02,0)}} </td>

                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mesp_01,0)}} </td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mesc_01,0)}}</td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mes_p01,2)}} </td>

                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mesp_02,0)}} </td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mesc_02,0)}}</td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mes_p02,2)}} </td>

                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mesp_03,0)}} </td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mesc_03,0)}}</td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->mes_p03,2)}} </td>

                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->trimp_01,0)}}</td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->trimc_01,0)}}</td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->trim_p01,2)}}</td>
                                        <td style="text-align:center;">  
                                        @switch($dpa->semaft_01)
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
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->totp_02,0)}} </td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->totc_02,0)}}</td>
                                        <td style="text-align:right; vertical-align: middle;font-size:10px;">{{number_format($dpa->tot_p01,2)}} </td>
                                        <td style="text-align:center;">  
                                        @switch($dpa->semafa_01)
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
                                </tbody>
                            </table>

                            <table id="tabla1" class="table table-hover table-striped">
                                @foreach($regprogdanual as $encpa)
                                <tr>
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">
                                        <label>Elaboró </label>
                                    </td>
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">   
                                        <label>Revisó </label>
                                    </td>                                            
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">   
                                        <label>Autorizó </label>
                                    </td>                                     
                                </tr>
                                <br>
                                <tr>
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">
                                        <label>___________________________________<br> 
                                        {{$encpa->responsable}}<br>
                                        {{$encpa->resp_cargo}}
                                        </label>
                                    </td>
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">   
                                        <label>___________________________________<br>
                                        {{$encpa->elaboro}} <br>
                                        {{$encpa->elab_cargo}}
                                        </label>
                                    </td>                                            
                                    <td style="text-align:center; vertical-align: middle; color:green;font-size:10px;">   
                                        <label>___________________________________<br>
                                        {{$encpa->autorizo}}<br>
                                        {{$encpa->auto_cargo}}
                                        </label>
                                    </td>                                     
                                </tr>
                                @break                            
                                @endforeach
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
