<?php
if (isset($_GET["calculate"])){
    $number_1=$_GET["w"];
    $number_2=$_GET["x"];
    $answer=$number_1+$number_2;
    echo"hello your answer is $answer";
}
