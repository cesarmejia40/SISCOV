<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $route['default_controller'] = 'Login';
    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;

    $route['Acreditar'] = 'Login/Acreditar';
    $route['Salir'] = 'Login/Salir';
    //$route['XLS'] = 'reportes/ExcelArticulos';
    //$route['Detalles/(:any)'] = 'Articulos/Detalles/$1';
    //$route['Consumo'] = 'Articulos/Consumo';
    //$route['VENCIDOS'] = 'Articulos/vencidos';


    /*************LINK DE USUARIOS***********/
    $route['Usuarios'] = 'Usuarios';
    $route['GuardarUsuario/(:any)/(:any)/(:any)/(:any)'] = 'Usuarios/Guardar/$1/$2/$3/$4';
    $route['EliminarUsuario/(:any)/(:any)']= "Usuarios/Eliminar/$1/$2";
    $route['ClaveUsuario/(:any)/(:any)']= "Usuarios/Clave/$1/$2";

    $route['dashboard'] = 'Menu';
    //$route['Articulos'] = 'Articulos';

    
    
    /*************LINLK DE TRABAJADORES***********/
    $route['Trabajadores'] = 'Trabajadores';
    $route['GuardarTrabajador/(:any)/(:any)/(:any)'] = 'Trabajadores/Guardar/$1/$2/$3';
    $route['EliminarTrabajador/(:any)/(:any)'] = "Trabajadores/Eliminar/$1/$2";
    $route['Calendario/(:any)'] = 'Trabajadores/Calendario/$1';
    $route['GCalendario/(:any)/(:any)/(:any)'] = 'Trabajadores/GCalendario/$1/$2/$3';
    $route['UCalendario/(:any)/(:any)/(:any)/(:any)'] = 'Trabajadores/UCalendario/$1/$2/$3/$4';
    $route['FEvento/(:any)/(:any)'] = 'Trabajadores/FEvento/$1/$2';

    /*************RUTAS EXCEL***********/
    //$route['ExcelConsumo'] = 'reportes/ExecelConsumo';

    /*************RUTAS PDF***********/
    //$route['pdf_detalles'] = 'reportes/pdfdetalle';
    //$route['pdf_analisisConsumo'] = 'reportes/pdfanalisisconsumo';

    /**************RUTAS AJAX***********/
    //$route['ajax_contrato/(:any)']= "Articulos/get_contrato/$1";
    //$route['UpdateRow/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'Articulos/UpdateRow/$1/$2/$3/$4/$5/$6/$7';
    //$route['SaveComentario/(:any)/(:any)/(:any)'] = 'Articulos/SaveComentarios/$1/$2/$3';
    //$route['RestoreComentario/(:any)/(:any)'] = 'Articulos/RestoreComentario/$1/$2';
    //$route['ajax_abc/(:any)']= "Articulos/get_abc/$1";