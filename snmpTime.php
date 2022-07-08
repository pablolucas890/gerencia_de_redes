<?php
  $destIP=$_POST["ip"];
  $community = "public";
  $oid = "1.3.6.1.2.1.25.1.1.0"; //tempo total de uso - barra vertical

  $ipInDelivers = snmp2_get( $destIP,$community ,$oid);
  $tempo = explode(" ", $ipInDelivers);
  $vals = explode(":", $tempo[2]);
  $minutes = $vals[0] * 60 + $vals[1];

  //retira somente o dado inteiro do retorno da consulta
  //var_dump($ipIn);
  //gera a saída que será recebida pelo front-end  

  //logica
  if (!$arquivoLeitura = fopen('arquivo.txt','r')) {
    exit;
  }
  $text = fread($arquivoLeitura,50000);
  fclose($arquivoLeitura);
  $hoje = date('d/m/Y');
  $arrayDatas = explode("\n",$text);
  $ultimaData = $arrayDatas[sizeof($arrayDatas)-1];
  $ultimaData = explode(" ",$ultimaData)[0];

  $novoText = "";
  if($ultimaData == $hoje){
    for ($i=0; $i < sizeof($arrayDatas) - 1 ; $i++) { 
      $novoText .= $arrayDatas[$i]."\n";
    }
    $novoText .= $hoje." ".$minutes;
  }else{
    for ($i=0; $i < sizeof($arrayDatas); $i++) { 
      $novoText .= $arrayDatas[$i]."\n";
    }
    $novoText .= $hoje." ".$minutes;
  }
  echo $novoText;
  $arquivoEscrita = fopen('arquivo.txt','w');
  fwrite($arquivoEscrita, $novoText);
  fclose($arquivoEscrita);
?>
