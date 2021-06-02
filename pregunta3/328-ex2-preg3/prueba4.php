<?php
$client = new SoapClient('http://localhost:1444/WebService.asmx?WSDL');
try {
     //Debes apendizar ?wsdl que es la descripción del lenguaje
	 
    $return = $client->Alumno()->AlumnoResult->any;
    //$datos = $return->RespuestaWS_FunctionA; //debes de saber como te va a regresar los datos.
    print_r($return);

} catch (SoapFault $soap) {  //SI FALLA LA COMUNICACIÓN SOAP POR CUALQUIER RAZÓN AQUI LA ATRAPAS Y PROCESAS EL ERROR.
    print_r($soap->getMessage()); //REGULARMENTE UTILIZO $soap->getMessage(); y $soap->getCode(); Que es el mensaje de error y el código del error respectivamente.

}