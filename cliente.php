<?php

ini_set('soap.wsdl_cache_enabled', WSDL_CACHE_NONE);
ini_set('soap.wsdl_cache_ttl', '0');


$cliente = new SoapClient("http://localhost/CalculadoraSOAPClaseWSDL/calcula.wsdl");


$resultado = $cliente->suma($cliente->divide($cliente->multiplica(3,10), 5), 10);

print("Resultado: " . $resultado);
?>
