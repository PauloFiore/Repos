<?php
 $val = -10; //Valor de entrada
$resultado = "";
if($val < 0){
  $resultado = "Valor Negativo";
}elseif($val >0 && < 100){
  $resultado = "Valor esta entre 0 a 100";
}else{
  $resultado = "Valor Maior 100";
}
?>
 echo '<br>resultado';
<h1><?=$resultado;?></h1>
