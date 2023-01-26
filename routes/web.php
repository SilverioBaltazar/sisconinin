<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/  
  
Route::get('/', function () {
    return view('sicinar.login.loginInicio');
});

    Route::group(['prefix' => 'control-interno'], function() {
    Route::post('menu', 'usuariosController@actionLogin')->name('login');
    Route::get('status-sesion/expirada', 'usuariosController@actionExpirada')->name('expirada');
    Route::get('status-sesion/terminada','usuariosController@actionCerrarSesion')->name('terminada');
 
    // Auto registro en sistema
    Route::get( 'Autoregistro/usuario'              ,'usuariosController@actionAutoregUsu')->name('autoregusu');
    Route::post('Autoregistro/usuario/registro'     ,'usuariosController@actionRegaltaUsu')->name('regaltausu');
    Route::get( 'Autoregistro/{id}/editarbienvenida','usuariosController@actioneditarBienve')->name('editarbienve');        

    // BackOffice del sistema
    Route::get('BackOffice/usuarios'                ,'usuariosController@actionNuevoUsuario')->name('nuevoUsuario');
    Route::post('BackOffice/usuarios/alta'          ,'usuariosController@actionAltaUsuario')->name('altaUsuario');
    Route::get('BackOffice/buscar/todos'            ,'usuariosController@actionBuscarUsuario')->name('buscarUsuario');        
    Route::get('BackOffice/usuarios/todos'          ,'usuariosController@actionVerUsuario')->name('verUsuarios');
    Route::get('BackOffice/usuarios/{id}/editar'    ,'usuariosController@actionEditarUsuario')->name('editarUsuario');
    Route::put('BackOffice/usuarios/{id}/actualizar','usuariosController@actionActualizarUsuario')->name('actualizarUsuario');
    Route::get('BackOffice/usuarios/{id}/Borrar'    ,'usuariosController@actionBorrarUsuario')->name('borrarUsuario');    
    Route::get('BackOffice/usuario/{id}/activar'    ,'usuariosController@actionActivarUsuario')->name('activarUsuario');
    Route::get('BackOffice/usuario/{id}/desactivar' ,'usuariosController@actionDesactivarUsuario')->name('desactivarUsuario');

    Route::get('BackOffice/usuario/{id}/{id2}/email','usuariosController@actionEmailRegistro')->name('emailregistro');    

    //Catalogos
    //Procesos
    Route::get('proceso/nuevo'      ,'catalogosController@actionNuevoProceso')->name('nuevoProceso');
    Route::post('proceso/nuevo/alta','catalogosController@actionAltaNuevoProceso')->name('AltaNuevoProceso');
    Route::get('proceso/ver/todos'  ,'catalogosController@actionVerProceso')->name('verProceso');
    Route::get('proceso/{id}/editar/proceso','catalogosController@actionEditarProceso')->name('editarProceso');
    Route::put('proceso/{id}/actualizar'    ,'catalogosController@actionActualizarProceso')->name('actualizarProceso');
    Route::get('proceso/{id}/Borrar','catalogosController@actionBorrarProceso')->name('borrarProceso');    
    Route::get('proceso/excel'      ,'catalogosController@exportCatProcesosExcel')->name('downloadprocesos');
    Route::get('proceso/pdf'        ,'catalogosController@exportCatProcesosPdf')->name('catprocesosPDF');

    //Funciones de procesos
    Route::get('funcion/nuevo'      ,'catfuncionesController@actionNuevaFuncion')->name('nuevaFuncion');
    Route::post('funcion/alta'      ,'catfuncionesController@actionAltaNuevaFuncion')->name('AltaNuevaFuncion');
    Route::get('funcion/ver'        ,'catfuncionesController@actionVerFuncion')->name('verFuncion');
    Route::get('funcion/{id}/editar','catfuncionesController@actionEditarFuncion')->name('editarFuncion');
    Route::put('funcion/{id}/update','catfuncionesController@actionActualizarFuncion')->name('actualizarFuncion');
    Route::get('funcion/{id}/Borrar','catfuncionesController@actionBorrarFuncion')->name('borrarFuncion');    
    Route::get('funcion/excel'      ,'catfuncionesController@exportCatFuncionesExcel')->name('downloadfunciones');
    Route::get('funcion/pdf'        ,'catfuncionesController@exportCatFuncionesPdf')->name('catfuncionesPDF');    

    //Actividades
    Route::get('actividad/nuevo'      ,'catalogostrxController@actionNuevaTrx')->name('nuevaTrx');
    Route::post('actividad/nuevo/alta','catalogostrxController@actionAltaNuevaTrx')->name('AltaNuevaTrx');
    Route::get('actividad/ver/todos'  ,'catalogostrxController@actionVerTrx')->name('verTrx');
    Route::get('actividad/{id}/editar/actividad','catalogostrxController@actionEditarTrx')->name('editarTrx');
    Route::put('actividad/{id}/actualizar'      ,'catalogostrxController@actionActualizarTrx')->name('actualizarTrx');
    Route::get('actividad/{id}/Borrar','catalogostrxController@actionBorrarTrx')->name('borrarTrx');    
    Route::get('actividad/excel'      ,'catalogostrxController@exportCatTrxExcel')->name('downloadtrx');
    Route::get('actividad/pdf'        ,'catalogostrxController@exportCatTrxPdf')->name('cattrxPDF');

    //Unidades de medida
    Route::get('umedida/nueva'      ,'catumedidaController@actionNuevaUmedida')->name('nuevaumedida');
    Route::post('umedida/alta'      ,'catumedidaController@actionAltaNuevaUmedida')->name('altanuevaumedida');
    Route::get('umedida/ver/todos'  ,'catumedidaController@actionVerUmedida')->name('verumedida');
    Route::get('umedida/{id}/editar','catumedidaController@actionEditarUmedida')->name('editarumedida');
    Route::put('umedida/{id}/update','catumedidaController@actionActualizarUmedida')->name('actualizarumedida');
    Route::get('umedida/{id}/Borrar','catumedidaController@actionBorrarUmedida')->name('borrarumedida');    
    Route::get('umedida/excel'      ,'catumedidaController@exportCatUmedidaExcel')->name('catumedidaexcel');
    Route::get('umedida/pdf'        ,'catumedidaController@exportCatUmedidaPdf')->name('catumedidapdf');    

    //Municipios sedesem
    Route::get('municipio/ver/todos','catalogosmunicipiosController@actionVermunicipios')->name('verMunicipios');
    Route::get('municipio/excel'    ,'catalogosmunicipiosController@exportCatmunicipiosExcel')->name('downloadmunicipios');
    Route::get('municipio/pdf'      ,'catalogosmunicipiosController@exportCatmunicipiosPdf')->name('catmunicipiosPDF');
    
    //OSC
    //Directorio
    Route::get('oscs/nueva'           ,'oscController@actionNuevaOsc')->name('nuevaOsc');
    Route::post('oscs/nueva/alta'     ,'oscController@actionAltaNuevaOsc')->name('AltaNuevaOsc');
    Route::get('oscs/ver/todas'       ,'oscController@actionVerOsc')->name('verOsc');
    Route::get('oscs/buscar/todas'    ,'oscController@actionBuscarOsc')->name('buscarOsc');    
    Route::get('oscs/{id}/editar/oscs','oscController@actionEditarOsc')->name('editarOsc');
    Route::put('oscs/{id}/actualizar' ,'oscController@actionActualizarOsc')->name('actualizarOsc');
    Route::get('oscs/{id}/Borrar'     ,'oscController@actionBorrarOsc')->name('borrarOsc');
    Route::get('oscs/excel'           ,'oscController@exportOscExcel')->name('oscexcel');
    Route::get('oscs/pdf'             ,'oscController@exportOscPdf')->name('oscPDF');

    Route::get('oscs/{id}/editar/osc1','oscController@actionEditarOsc1')->name('editarOsc1');
    Route::put('oscs/{id}/actualizar1','oscController@actionActualizarOsc1')->name('actualizarOsc1'); 
    Route::get('oscs/{id}/editar/osc2','oscController@actionEditarOsc2')->name('editarOsc2');
    Route::put('oscs/{id}/actualizar2','oscController@actionActualizarOsc2')->name('actualizarOsc2');        
 
    Route::get('oscs5/ver/todas'       ,'oscController@actionVerOsc5')->name('verOsc5');
    Route::get('oscs5/{id}/editar/oscs','oscController@actionEditarOsc5')->name('editarOsc5');
    Route::put('oscs5/{id}/actualizar' ,'oscController@actionActualizarOsc5')->name('actualizarOsc5');    
      
    //Requisitos Jurídicos
    Route::get('rjuridicos/nueva'              ,'rJuridicosController@actionNuevaJur')->name('nuevaJur');
    Route::post('rjuridicos/nueva/alta'        ,'rJuridicosController@actionAltaNuevaJur')->name('AltaNuevaJur');  
    Route::get('rjuridicos/buscar/todos'       ,'rJuridicosController@actionBuscarJur')->name('buscarJur');          
    Route::get('rjuridicos/ver/todasj'         ,'rJuridicosController@actionVerJur')->name('verJur');
    Route::get('rjuridicos/{id}/editar/jur'  ,'rJuridicosController@actionEditarJur')->name('editarJur');
    Route::put('rjuridicos/{id}/actualizarj'   ,'rJuridicosController@actionActualizarJur')->name('actualizarJur'); 
    Route::get('rjuridicos/{id}/Borrarj'       ,'rJuridicosController@actionBorrarJur')->name('borrarJur');

    Route::get('rjuridicos/{id}/editar/rjur12','rJuridicosController@actionEditarJur12')->name('editarJur12');
    Route::put('rjuridicos/{id}/actualizarj12','rJuridicosController@actionActualizarJur12')->name('actualizarJur12');    
    Route::get('rjuridicos/{id}/editar/rjur13','rJuridicosController@actionEditarJur13')->name('editarJur13');
    Route::put('rjuridicos/{id}/actualizarj13','rJuridicosController@actionActualizarJur13')->name('actualizarJur13'); 
    Route::get('rjuridicos/{id}/editar/rjur14','rJuridicosController@actionEditarJur14')->name('editarJur14');
    Route::put('rjuridicos/{id}/actualizarj14','rJuridicosController@actionActualizarJur14')->name('actualizarJur14');
    Route::get('rjuridicos/{id}/editar/rjur15','rJuridicosController@actionEditarJur15')->name('editarJur15');
    Route::put('rjuridicos/{id}/actualizarj15','rJuridicosController@actionActualizarJur15')->name('actualizarJur15');

    //Requisitos de operación
    //Padron de beneficiarios
    Route::get('padron/nueva'           ,'padronController@actionNuevoPadron')->name('nuevoPadron');
    Route::post('padron/nueva/alta'     ,'padronController@actionAltaNuevoPadron')->name('AltaNuevoPadron');
    Route::get('padron/ver/todas'       ,'padronController@actionVerPadron')->name('verPadron');
    Route::get('padron/buscar/todas'    ,'padronController@actionBuscarPadron')->name('buscarPadron');    
    Route::get('padron/{id}/editar/padron','padronController@actionEditarPadron')->name('editarPadron');
    Route::put('padron/{id}/actualizar' ,'padronController@actionActualizarPadron')->name('actualizarPadron');
    Route::get('padron/{id}/Borrar'     ,'padronController@actionBorrarPadron')->name('borrarPadron');
    Route::get('padron/excel'           ,'padronController@actionExportPadronExcel')->name('ExportPadronExcel');
    Route::get('padron/pdf'             ,'padronController@actionExportPadronPdf')->name('ExportPadronPdf');

    //Programa anual (PA)
    Route::get('programa/nuevo'         ,'proganualController@actionNuevoPA')->name('nuevopa');
    Route::post('programa/alta'         ,'proganualController@actionAltaNuevoPA')->name('altanuevopa');
    Route::get('programa/ver'           ,'proganualController@actionVerPA')->name('verpa');
    Route::get('programa/buscar'        ,'proganualController@actionBuscarPA')->name('buscarpa');    
    Route::get('programa/{id}/editar'   ,'proganualController@actionEditarPA')->name('editarpa');
    Route::put('programa/{id}/update'   ,'proganualController@actionActualizarPA')->name('actualizarpa');
    Route::get('programa/{id}/Borrar'   ,'proganualController@actionBorrarPA')->name('borrarpa');
    Route::get('programa/excel/{id}'    ,'proganualController@actionExportPAExcel')->name('exportpaexcel');
    Route::get('programa/pdf/{id}/{id2}','proganualController@actionExportPAPDF')->name('exportpapdf');

    Route::get('programad/{id}/nuevo'        ,'proganualController@actionNuevodPA')->name('nuevodpa');
    Route::post('programad/alta'             ,'proganualController@actionAltaNuevodPA')->name('altanuevodpa');
    Route::get('programad/{id}/ver'          ,'proganualController@actionVerdPA')->name('verdpa');
    Route::get('programad/{id}/{id2}/editar' ,'proganualController@actionEditardPA')->name('editardpa');
    Route::put('programad/{id}/{id2}/update' ,'proganualController@actionActualizardPA')->name('actualizardpa');
    Route::get('programad/{id}/{id2}/Borrar' ,'proganualController@actionBorrardPA')->name('borrardpa');

    Route::get('programad/{id}/{id2}/editar1','proganualController@actionEditardPA1')->name('editardpa1');
    Route::put('programad/{id}/{id2}/update1','proganualController@actionActualizardPA1')->name('actualizardpa1');    

    //Programa de trabajo PA - Avances
    //Route::get('informe/nuevo'           ,'informeController@actionNuevoInforme')->name('nuevoInforme');
    //Route::post('informe/nuevo/alta'     ,'informeController@actionAltaNuevoInforme')->name('AltaNuevoInforme');
    Route::get('informe/ver/todos'       ,'informeController@actionVerInformes')->name('verInformes');
    Route::get('informe/buscar/todos'    ,'informeController@actionBuscarInforme')->name('buscarInforme');    
    //Route::get('informe/{id}/editar/inflab','informeController@actionEditarInforme')->name('editarInforme');
    //Route::put('informe/{id}/actualizar' ,'informeController@actionActualizarInforme')->name('actualizarInforme');
    //Route::get('informe/{id}/Borrar'     ,'informeController@actionBorrarInforme')->name('borrarInforme');
    //Route::get('informe/excel/{id}'      ,'informeController@actionExportInformeExcel')->name('ExportInformeExcel');
    Route::get('informe/pdf/{id}/{id2}'  ,'informeController@actionExportInformePdf')->name('ExportInformePdf');

    Route::get('informe/{id}/ver/todosi','informeController@actionVerInformelab')->name('verInformelab');
    //Route::get('informe/{id}/nuevo'     ,'informeController@actionNuevoInformelab')->name('nuevoInformelab');
    //Route::post('informe/nuevo/alta'    ,'informeController@actionAltaNuevoInformelab')->name('altaNuevoInformelab'); 
    Route::get('informe/{id}/{id2}/{id3}/editar','informeController@actionEditarInformelab')->name('editarInformelab');
    Route::put('informe/{id}/{id2}/update'      ,'informeController@actionActualizarInformelab')->name('actualizarInformelab');
    Route::get('informe/{id}/{id2}/editar1'     ,'informeController@actionEditarInformelab1')->name('editarInformelab1');
    Route::put('informe/{id}/{id2}/update1'     ,'informeController@actionActualizarInformelab1')->name('actualizarInformelab1');

    //Programa de trabajo PA - Soportes documentales mensuales
    Route::get('soporte/ver/todos'         ,'soportesController@actionVerSoportes')->name('versoportes');
    Route::get('soporte/buscar/todos'      ,'soportesController@actionBuscarSoporte')->name('buscarsoporte');        
    Route::get('soporte/{id}/ver/todosi'   ,'soportesController@actionVerSoportesdet')->name('versoportesdet');
    Route::get('soporte/{id}/{id2}/{id3}/editar','soportesController@actionEditarSoportedet')->name('editarsoportedet');
    Route::put('soporte/{id}/{id2}/{id3}/update','soportesController@actionActualizarSoportedet')->name('actualizarsoportedet');
    Route::get('soporte/{id}/{id2}/Borrar' ,'soportesController@actionBorrarSoportedet')->name('borrarsoportedet');

    Route::get('soporte/{id}/{id2}/editar1' ,'soportesController@actionEditarSoportedet1')->name('editarsoportedet1');
    Route::put('soporte/{id}/{id2}/update1' ,'soportesController@actionActualizarSoportedet1')->name('actualizarsoportedet1');
    Route::get('soporte/{id}/{id2}/editar2' ,'soportesController@actionEditarSoportedet2')->name('editarsoportedet2');
    Route::put('soporte/{id}/{id2}/update2' ,'soportesController@actionActualizarSoportedet2')->name('actualizarsoportedet2');
    Route::get('soporte/{id}/{id2}/editar3' ,'soportesController@actionEditarSoportedet3')->name('editarsoportedet3');
    Route::put('soporte/{id}/{id2}/update3' ,'soportesController@actionActualizarSoportedet3')->name('actualizarsoportedet3');
    Route::get('soporte/{id}/{id2}/editar4' ,'soportesController@actionEditarSoportedet4')->name('editarsoportedet4');
    Route::put('soporte/{id}/{id2}/update4' ,'soportesController@actionActualizarSoportedet4')->name('actualizarsoportedet4');    
    Route::get('soporte/{id}/{id2}/editar5' ,'soportesController@actionEditarSoportedet5')->name('editarsoportedet5');
    Route::put('soporte/{id}/{id2}/update5' ,'soportesController@actionActualizarSoportedet5')->name('actualizarsoportedet5');
    Route::get('soporte/{id}/{id2}/editar6' ,'soportesController@actionEditarSoportedet6')->name('editarsoportedet6');
    Route::put('soporte/{id}/{id2}/update6' ,'soportesController@actionActualizarSoportedet6')->name('actualizarsoportedet6');
    Route::get('soporte/{id}/{id2}/editar7' ,'soportesController@actionEditarSoportedet7')->name('editarsoportedet7');
    Route::put('soporte/{id}/{id2}/update7' ,'soportesController@actionActualizarSoportedet7')->name('actualizarsoportedet7');
    Route::get('soporte/{id}/{id2}/editar8' ,'soportesController@actionEditarSoportedet8')->name('editarsoportedet8');
    Route::put('soporte/{id}/{id2}/update8' ,'soportesController@actionActualizarSoportedet8')->name('actualizarsoportedet8');    
    Route::get('soporte/{id}/{id2}/editar9' ,'soportesController@actionEditarSoportedet9')->name('editarsoportedet9');
    Route::put('soporte/{id}/{id2}/update9' ,'soportesController@actionActualizarSoportedet9')->name('actualizarsoportedet9');    
    Route::get('soporte/{id}/{id2}/editar10','soportesController@actionEditarSoportedet10')->name('editarsoportedet10');
    Route::put('soporte/{id}/{id2}/update10','soportesController@actionActualizarSoportedet10')->name('actualizarsoportedet10');            
    Route::get('soporte/{id}/{id2}/editar11','soportesController@actionEditarSoportedet11')->name('editarsoportedet11');
    Route::put('soporte/{id}/{id2}/update11','soportesController@actionActualizarSoportedet11')->name('actualizarsoportedet11'); 
    Route::get('soporte/{id}/{id2}/editar12','soportesController@actionEditarSoportedet12')->name('editarsoportedet12');
    Route::put('soporte/{id}/{id2}/update12','soportesController@actionActualizarSoportedet12')->name('actualizarsoportedet12');     
    
    //Diagnóstico
    //Directorio de Diputados locales
    Route::get('diplocales/nuevo'        ,'dirdiplocController@actionNuevoDirdiploc')->name('nuevodirdiploc');
    Route::post('diplocales/alta'        ,'dirdiplocController@actionAltaNuevoDirdiploc')->name('altanuevodirdiploc');
    Route::get('diplocales/ver'          ,'dirdiplocController@actionVerDirdiploc')->name('verdirdiploc');
    Route::get('diplocales/buscar'       ,'dirdiplocController@actionBuscarDirdiploc')->name('buscardirdiploc');    
    Route::get('diplocales/{id}/editar'  ,'dirdiplocController@actionEditarDirdiploc')->name('editardirdiploc');
    Route::put('diplocales/{id}/update'  ,'dirdiplocController@actionActualizarDirdiploc')->name('actualizardirdiploc');
    Route::get('diplocales/{id}/Borrar'  ,'dirdiplocController@actionBorrarDirdiploc')->name('borrardirdiploc');
    Route::get('diplocales/excel'        ,'dirdiplocController@actionExportDirdiplocExcel')->name('exportdirdiplocexcel');
    Route::get('diplocales/pdf'          ,'dirdiplocController@actionExportDirdiplocPdf')->name('exportdirdiplocpdf');

    //Directorio para la Promoción del Desarrollo Humano y Social
    Route::get('dhs/nuevo'        ,'dirdhsController@actionNuevoDirdhs')->name('nuevodirdhs');
    Route::post('dhs/alta'        ,'dirdhsController@actionAltaNuevoDirdhs')->name('altanuevodirdhs');
    Route::get('dhs/ver'          ,'dirdhsController@actionVerDirdhs')->name('verdirdhs');
    Route::get('dhs/buscar'       ,'dirdhsController@actionBuscarDirdhs')->name('buscardirdhs');    
    Route::get('dhs/{id}/editar'  ,'dirdhsController@actionEditarDirdhs')->name('editardirdhs');
    Route::put('dhs/{id}/update'  ,'dirdhsController@actionActualizarDirdhs')->name('actualizardirdhs');
    Route::get('dhs/{id}/Borrar'  ,'dirdhsController@actionBorrarDirdhs')->name('borrardirdhs');
    Route::get('dhs/excel'        ,'dirdhsController@actionExportDirdhsExcel')->name('exportdirdhsexcel');
    Route::get('dhs/pdf'          ,'dirdhsController@actionExportDirdhsPdf')->name('exportdirdhspdf');

    //Reportes  
    Route::get( 'reporte/filtromensual'  ,'reportemensualController@actionReporteMensualFiltro')->name('reportemensualfiltro');
    Route::post('reporte/reportemensuaL' ,'ReportemensualController@actionVerReporteMensual')->name('verreportemensual');    
    Route::get( 'reporte/filtromensual2' ,'reportemensualController@actionReporteMensualFiltro_v2')->name('reportemensualfiltro_v2');    
    Route::post('reporte/reportemensuaL2','ReportemensualController@actionVerReporteMensual_v2')->name('verreportemensual_v2');    
    Route::get( 'reportes/filtropa'      ,'reportespaController@actionReportePAFiltro')->name('reportepafiltro');
    Route::post('reportes/reportepa'     ,'ReportespaController@actionVerReportePa')->name('verreportepa');
    
    //Indicadores
    Route::get('indicador/ver/todos'        ,'indicadoresController@actionVerCumplimiento')->name('vercumplimiento');
    Route::get('indicador/buscar/todos'     ,'indicadoresController@actionBuscarCumplimiento')->name('buscarcumplimiento');    
    Route::get('indicador/ver/todamatriz'   ,'indicadoresController@actionVermatrizCump')->name('vermatrizcump');
    Route::get('indicador/buscar/matriz'    ,'indicadoresController@actionBuscarmatrizCump')->name('buscarmatrizcump');      
    Route::get('indicador/ver/todasvisitas' ,'indicadoresController@actionVerCumplimientovisitas')->name('vercumplimientovisitas');
    Route::get('indicador/buscar/allvisitas','indicadoresController@actionBuscarCumplimientovisitas')->name('buscarcumplimientovisitas');    
    Route::get('indicador/{id}/oficiopdf'   ,'indicadoresController@actionOficioInscripPdf')->name('oficioInscripPdf'); 

    //Estadísticas
    //OSC
    Route::get('numeralia/graficaixedo'   ,'estadisticaOscController@OscxEdo')->name('oscxedo');
    Route::get('numeralia/graficaixmpio'  ,'estadisticaOscController@OscxMpio')->name('oscxmpio');
    Route::get('numeralia/graficaixrubro' ,'estadisticaOscController@OscxRubro')->name('oscxrubro');    
    Route::get('numeralia/graficaixrubro2','estadisticaOscController@OscxRubro2')->name('oscxrubro2'); 
    Route::get('numeralia/filtrobitacora' ,'estadisticaOscController@actionVerBitacora')->name('verbitacora');        
    Route::post('numeralia/estadbitacora' ,'estadisticaOscController@Bitacora')->name('bitacora'); 
    Route::get('numeralia/mapaxmpio'      ,'estadisticaOscController@actiongeorefxmpio')->name('georefxmpio');            
    Route::get('numeralia/mapas'          ,'estadisticaOscController@Mapas')->name('verMapas');        
    Route::get('numeralia/mapas2'         ,'estadisticaOscController@Mapas2')->name('verMapas2');        
    Route::get('numeralia/mapas3'         ,'estadisticaOscController@Mapas3')->name('verMapas3');        

    //numeralia
    Route::get('numeralia/graficaxdep'      ,'numeraliaController@actionGraficaxdepen')->name('graficaxdepen');
    Route::get('numeralia/graficaxtproyecto','numeraliaController@actionGraficaxtipproy')->name('graficaxtipproy');

    // Email related routes
    Route::get('mail/ver/todos'        ,'mailController@actionVerContactos')->name('vercontactos');
    Route::get('mail/buscar/todos'     ,'mailController@actionBuscarContactos')->name('buscarcontactos');    
    Route::get('mail/{id}/editar/email','mailController@actionEditarEmail')->name('editaremail');
    //Route::put('mail/{id}/email'     ,'mailController@actionEmail')->name('Email'); 

    Route::get('mail/email'            ,'mailController@actionEmail')->name('Email'); 
    Route::put('mail/emailbienvenida'  ,'mailController@actionEmailBienve')->name('emailbienve'); 
    //Route::post('mail/send'          ,'mailController@send')->name('send');     
});

