<?php
$client = new SoapClient('http://localhost:1444/WebService.asmx?WSDL');
$result = $client->Alumno(["nombre"]); //Aquí cambiamos dependiendo de la acción del servicio que necesitemos ejecutar
var_dump($result);

?>