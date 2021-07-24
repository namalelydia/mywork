<?php

$numberoftreesinadistrictpertype=array(
  
  'kabale' => array(
  'muvule' => 69, 
  'eucalptus' => 803,
  'musizi' => 7363,
  'musabu' => 89

              ),

 'wakiso' => array(
 'muvule' => 569,
 'eucalptus' => 80003, 
 'musizi' => 767363,
 'musabu' => 8984,
          ),

  'Kabale' => array(
  'muvule' => 90,
  'eucalptus' =>703,
  'musizi' =>763,
  'musabu' => 29

             )
              
              );

  foreach ($numberoftreesinadistrictpertype as $index => $value) {
    echo "====".$index."=======<br>";

     foreach($value as $key => $trees){

      echo $key."=".$trees."<br>";
     }
  }

$sumofalltrees=array(569,80003,767363,8984,69,803,7363,89,90,703,763,29);

echo "sum(sumofalltrees) ".array_sum($sumofalltrees)." <br>";


setcookie("sumofalltrees","866828",time()+3600);
if(isset($_COOKIE['sumofalltrees'])){

  echo $_COOKIE['sumofalltrees'];


}else{

  echo "the cookies doesnt exist"."<br>";
}



$sumofmusabutrees=array(8984,89,29);

echo "sum(sumofmusabutrees)".array_sum($sumofmusabutrees)."<br>";

session_start();
$_SESSION['sumofmusabutrees'] ="9102";
echo $_SESSION["sumofmusabutrees"]."<br>";


