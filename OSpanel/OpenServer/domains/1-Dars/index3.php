<?php
session_start();
if($_SESSION["j2"]!=""){
    echo "Barcha javoblar to'g'ri";
}
else{
header("Location: index.php");
}
?>