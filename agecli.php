<?php 
$person = $argv[1];
$year = $argv[2] ;
$age = date("Y") - $year ;


echo "Your name is " , $person , $year , " and your age is " , $age, " years old. \n";
if ($age <= 18){
    echo "You are a voter";
}else{
    echo " You are a senior citizen.";
}
?>