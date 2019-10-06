<?php
require_once "lib/nusoap.php";

//Parámetros
$slengua = "C";
$scurso  = "2011-12";
$scoddep = "B142";
$scodest = "";

//url del webservice
$wsdl = "https://cvnet.cpd.ua.es/servicioweb/publicos/pub_gestdocente.asmx?wsdl";

//instanciando un nuevo objeto cliente para consumir el webservice
$client = new nusoap_client($wsdl, 'wsdl');

//pasando los parámetros a un array
$param = array('plengua' => $slengua, 'pcurso' => $scurso, 'pcoddep' => $scoddep, 'pcodest' => $scodest);

//llamando al método y pasándole el array con los parámetros
$resultado = $client->call('wsasidepto', $param);

print_r($resultado);
