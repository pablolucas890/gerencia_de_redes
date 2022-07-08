<?php
  $destIP=$_POST["ip"];
  $community = "public";

  $oid2 = "1.3.6.1.2.1.25.1.6.0"; //numero de procesos - barra de linha

  $ipInDelivers2 = snmp2_get( $destIP,$community ,$oid2);

  $process = explode(" ", $ipInDelivers2);
  echo $process[1];
?>
