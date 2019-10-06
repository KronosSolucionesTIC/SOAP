<?php
require_once "lib/nusoap.php";

//Parámetros
$tipo = "FechaInicial";
$expresion="2019-07-01 00:00:00";

//url del webservice
$wsdl = "http://test.analitica.com.co/AZDigital_Pruebas/WebServices/ServiciosAZDigital.wsdl";

//instanciando un nuevo objeto cliente para consumir el webservice
$client = new nusoap_client($wsdl, 'wsdl');

//pasando los parámetros a un array
$param = array('Tipo' => $tipo, 'Expresion' => $expresion);

//llamando al método y pasándole el array con los parámetros
$resultado = $client->call('http://test.analitica.com.co/AZDigital_Pruebas/WebServices/SOAP/index.php', $param);

print_r($resultado);
