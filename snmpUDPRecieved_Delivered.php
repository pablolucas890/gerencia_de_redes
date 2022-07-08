<?php
  $destIP=$_POST["ip"];
  $community = "public";

  $oid2 = ".1.3.6.1.2.1.7.1.0"; //datagramas udp recebidos
  $oid3 = ".1.3.6.1.2.1.7.4.0"; //datagramas udp enviados

  $ipInDelivers2 = snmp2_get( $destIP,$community ,$oid2);
  $ipInDelivers3 = snmp2_get( $destIP,$community ,$oid3);

  $reci = explode(" ", $ipInDelivers2);
  $deli = explode(" ", $ipInDelivers3);

  $total = intval( $reci[1]) +  intval( $deli[1]);
  $porcentagemReci = intval( $reci[1]) / $total;

  echo $porcentagemReci;
?>
