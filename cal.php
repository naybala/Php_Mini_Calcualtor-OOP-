<?php
include "calFunction.php";
if(isset($_POST["btnCal"])){
    $num1 = $_POST["fNum"];
    $num2 = $_POST["sNum"];
    $cal = $_POST["cal"];


    $calculate = new Calc($num1,$num2,$cal);
    echo $calculate->calcMethod();
    
}