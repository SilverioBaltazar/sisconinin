@extends('sicinar.principal')

@section('title','Ver directorio de promoción del desarrollo humano social')

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
            <h1>Diagnósticos
                <small> Seleccionar para editar o registrar </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
                <li><a href="#">Diagnósticos </a></li>   
                <li><a href="#">Directorio de Desarrollo Humano y Social </a></li>               
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                        <div class="page-header" style="text-align:right;">
                            
                            {{ Form::open(['route' => 'buscardirdhs', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                <div class="form-group">
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Responsable']) }}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                                <div class="form-group">
                                    @if(session()->get('rango') == '4')  
                                        <a href="{{route('exportdirdhsexcel')}}" class="btn btn-success" title="Exportar a formato Excel"><i class="fa fa-file-excel-o"></i>Excel </a>                            
                                        <a href="{{route('nuevodirdhs')}}" class="btn btn-primary btn_xs" title="Nuevo"><i class="fa fa-file-new-o"></i><span class="glyphicon glyphicon-plus"></span>Nuevo </a>
                                    @else
                                        <a href="{{route('nuevodirdhs')}}" class="btn btn-primary btn_xs" title="Nuevo"><i class="fa fa-file-new-o"></i><span class="glyphicon glyphicon-plus"></span>Nuevo </a>                                    
                                    @endif
                                </div>                                
                            {{ Form::close() }}
                        </div>

                        <div class="box-body">
                            <table id="tabla1" class="table table-hover table-striped">
                                <thead style="color: brown;" class="justify">
                                    <tr>
                                        <th style="text-align:left;   vertical-align: middle;">SubSecretaría  </th>
                                        <th style="text-align:left;   vertical-align: middle;">Coordinación   </th>
                                        <th style="text-align:left;   vertical-align: middle;">Region         </th>
                                        <th style="text-align:left;   vertical-align: middle;">Municipio      </th>
                                        <th style="text-align:left;   vertical-align: middle;">Id.            </th>
                                        <th style="text-align:left;   vertical-align: middle;">Cargo          </th>
                                        <th style="text-align:left;   vertical-align: middle;">Responsable    </th>
                                        <th style="text-align:left;   vertical-align: middle;">Tel. oficina   </th>                                        
                                        <th style="text-align:left;   vertical-align: middle;">Celular        </th>
                                        <th style="text-align:left;   vertical-align: middle;">Correo electrónico</th> 
                                        <th style="text-align:left;   vertical-align: middle;">Domicilio      </th>    
                                        <th style="text-align:left;   vertical-align: middle;">Fecha reg.     </th>
                                        <th style="text-align:center; vertical-align: middle;">Acciones       </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($regdirdhs as $dhs)
                                    <tr>
                                        <td style="text-align:left; vertical-align: middle;">
                                            @foreach($regdepen as $dep)
                                                @if($dep->depen_id == $dhs->subsec_id)
                                                    {{$dhs->subsec_id.' '.$dep->depen_desc}}
                                                    @break
                                                @endif
                                            @endforeach
                                        </td>                                          
                                        <td style="text-align:left; vertical-align: middle;">   
                                            @foreach($regdepen as $dep)
                                                @if($dep->depen_id == $dhs->coord_id)
                                                    {{$dhs->coord_id.' '.$dep->depen_desc}}
                                                    @break
                                                @endif
                                            @endforeach
                                        </td>    
                                        <td style="text-align:left; vertical-align: middle;">   
                                            @foreach($regregiones as $region)
                                                @if($region->region_id == $dhs->region_id)
                                                    {{$region->region_romano.' '.$region->region_desc}}
                                                    @break
                                                @endif
                                            @endforeach
                                        </td>    
                                        <td style="text-align:left; vertical-align: middle;">{{$dhs->municipio_id}}   
                                            @foreach($regmunicipio as $mun)
                                                @if($mun->municipioid == $dhs->municipio_id)
                                                    {{$mun->municipionombre}}
                                                    @break
                                                @endif
                                            @endforeach
                                        </td>                                                                                
                                        <td style="text-align:left; vertical-align: middle;">{{$dhs->dhs_id}}              </td>
                                        <td style="text-align:left; vertical-align: middle;">{{Trim($dhs->cargo_desc)}}</td>
                                        <td style="text-align:left; vertical-align: middle;">{{Trim($dhs->dhs_respon)}}    </td>
                                        <td style="text-align:left; vertical-align: middle;">{{Trim($dhs->dhs_telfic)}}    </td>
                                        <td style="text-align:left; vertical-align: middle;">{{Trim($dhs->dhs_telefono)}}  </td>
                                        <td style="text-align:left; vertical-align: middle;">{{Trim($dhs->dhs_email)}}     </td>
                                        <td style="text-align:left; vertical-align: middle;">{{Trim($dhs->dhs_dom)}}       </td>
                                        <td style="text-align:left; vertical-align: middle;">
                                            {{date("d/m/Y",strtotime($dhs->fecreg))}}
                                        </td>
                                                                                                                        
                                        <td style="text-align:center;">
                                            <a href="{{route('editardirdhs',$dhs->dhs_id)}}" class="btn badge-warning" title="Editar "><i class="fa fa-edit"></i></a>
                                            @if(session()->get('rango') == '4')
                                                <a href="{{route('borrardirdhs',$dhs->dhs_id)}}" class="btn badge-danger" title="Borrar registro" onclick="return confirm('¿Seguro que desea borrar el registro?')"><i class="fa fa-times"></i></a>
                                            @endif                                                
                                        </td>                                                                                
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $regdirdhs->appends(request()->input())->links() !!}
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
