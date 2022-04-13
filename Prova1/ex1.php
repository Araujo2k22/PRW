<?php
  $salario=500;
  $salarionovo=0;
  if($salario<=300){
      $salarionovo=$salario+($salario*0.5);
      echo "Reajuste de 50%: R$".$salarionovo;
  }
  else{
      $salarionovo=$salario+($salario*0.3);
      echo "Reajuste de 30%: R$".$salarionovo;
  }
?>