<?php
try {
  $client = new SoapClient('http://localhost:1444/WebService.asmx?WSDL');
  $result = $client->Alumno(); 
  var_dump($result);
  echo '<br><br><br>';


  echo '<br><br><br>';

  $array = json_decode(json_encode($result),true);

  print_r($array);
  echo '<br><br><br>';
  
  $result2 = obj2array($result);
  $noticias=$result2['resultado']['noticias'];
  $n=count($noticias);

  //procesamos el resultado como con cualquier otro array
  for($i=0; $i<$n; $i++){
    $noticia=$noticias[$i];
    $id=$noticia['id'];
    //aquí iría el resto de tu código donde procesas los datos recibidos
  }

  function obj2array($obj) {
    $out = array();
    foreach ($obj as $key => $val) {
      switch(true) {
        case is_object($val):
         $out[$key] = obj2array($val);
         break;
        case is_array($val):
         $out[$key] = obj2array($val);
         break;
        default:
        $out[$key] = $val;
      }
    }
    return $out;
  }



} catch (Exception $e) {
	echo $e->getMessage();
}
  

?>