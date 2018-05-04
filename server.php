<?php 

require_once('Calcula.php');
$server = new SoapServer("http://localhost/CalculadoraSOAPClaseWSDL/calcula.wsdl");
$server->setClass('Calcula');
$server->handle();

?>