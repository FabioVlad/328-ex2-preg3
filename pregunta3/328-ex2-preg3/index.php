<?php
$ini = ini_set("soap.wsdl_cache_enabled","0");
$url = 'http://localhost:1444/WebService.asmx?WSDL';
$client = new SoapClient($url);

$result = $client->Alumno()->AlumnoResult->any;
//print_r($result);
//echo "<br><br><br>";
//echo $result;
//echo "<br><br><br>";
//print_r($result);
$json=json_encode($result);
$data = json_decode(($json),true);
print_r($data);
// echo "<br><br><br>";
// $data = json_decode($json,true);
//print_r($data);


// for($i=0;$i<count($data);$i++){
// 	echo $data[$i]["ci"]."<br>";
// }

// $wsdl   = 'http://localhost:1444/WebService.asmx?WSDL';
// $client = new SoapClient($wsdl);  // The trace param will show you errors



// try {
//     $responce_param = $client->Alumno()->AlumnoResult->any;
//     print_r($responce_param);
	
// } catch (Exception $e) { 
//     echo "<h2>Exception Error</h2>"; 
//     echo $e->getMessage(); 
// }

// $dir = file_get_contents('http://localhost:1444/WebService.asmx',false);
// $datos = json_decode($dir,true);
// print_r($dir);
// print_r($datos);


// $client = new SoapClient("http://localhost:1444/WebService.asmx?WSDL");

// $result = $client->Alumno();
// print_r($result);


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "http://localhost:1444/WebService.asmx");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $res = curl_exec($ch);

// curl_close($ch);
// print_r($res);