<?php
/**
* Clase Calcula
*
* Ejemplo: Documentacion para generacion
* automatica del documento WSDL
* @author Victor Lourido
*/
class Calcula {
/**
* Suma dos numeros y devuelve el resultado
*
* @param float $a
* @param float $b
* @return float
*/
public function suma($a, $b){
return $a+$b;
}
/**
* Resta dos numeros y devuelve el resultado
*
* @param float $a
* @param float $b
* @return float
*/
public function resta($a, $b){
return $a-$b;
}

/**
* Multiplica dos numeros y devuelve el resultado
*
* @param float $a
* @param float $b
* @return float
*/
public function multiplica($a, $b){
return $a*$b;
}

/**
* Divide dos numeros y devuelve el resultado
*
* @param float $a
* @param float $b
* @return float
*/
public function divide($a, $b){
return $a/$b;
}

}
?>