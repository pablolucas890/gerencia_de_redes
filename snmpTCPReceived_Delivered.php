<?php
  $destIP=$_POST["ip"];
  $community = "public";

  $oid1 = ".1.3.6.1.2.1.6.10.0"; //Seguimentos TCP recebidos
  $oid2 = ".1.3.6.1.2.1.6.11.0";//Segiumentos TPC entregues
  $snmpReci = snmp2_get( $destIP,$community ,$oid1);
  $snmpDeli = snmp2_get( $destIP,$community ,$oid2);

  $data1 = explode(" ", $snmpReci);
  $data2 = explode(" ", $snmpDeli);
  echo $data1[1]."-".$data2[1];
?>
