<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1 style='text-align:center;'>Control de alerta de servidores criticos</h1>
<?php

//ping 1 ip
/* $ip = "192.168.1.10";
$ping = exec("ping -n 1 $ip",$output,$status);
echo $status;//0 ok, 1 error */

//ping varias ips
/* $iplist = ['192.168.1.1','10.200.2.5'];
$i = count($iplist);
for ($j=0; $j < $i; $j++) { 
    $ping = exec("ping -n 1 $iplist[$j]",$output,$status);
    echo $status;//0 ok, 1 error
}
 */
header("refresh:60");
$iplist = array(
    array("10.200.2.5", "PC_01"),
    array("192.168.1.1", "PC_02"),
    array("192.168.1.50", "PC_03"),
);
$i = count($iplist);
$results = [];

for ($j=0; $j < $i; $j++) { 
    $ip = $iplist[$j][0];
    $ping = exec("ping $ip",$output,$status);
    
    /* echo "Ping".$iplist[$j][0].$iplist[$j][1].": "; */
    $results [] = $status;
}
//creando tablas   

echo "
<table class='table'>
  <thead>
    <tr>
      <th scope='col'>IP</th>
      <th scope='col'>Status</th>
      <th scope='col'>Descripcion</th>
 
    </tr>
  </thead>";
foreach ($results as $item => $k) {
    echo "<tr>";
  
    echo "<td>".$iplist[$item][0]."</td>";
    if ($results [$item] == 0) {
        echo "<td><a class='btn btn-success'> En linea</a></td>";
    }else{
        echo "<td><a class='btn btn-danger'>Desconectado</a></td>";
        echo "<td>".$iplist[$item][0]."</td>";
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "gonzaloroque21@gmail.com";
        $to = "gonzaloroque21@gmail.com";
        $subject = "Servidor ".$iplist[$item][1]." apagado, IP: ".$iplist[$item][0];
        $message = "<body>
        <h1>Equipo apagado</h1>

        <p>Alerta de equipo apagado.</p>
        </body>";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= "From:" . $from;
        mail($to,$subject,$message, $headers); 
       
}

}
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>