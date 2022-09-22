<?php
    include "databaseconnect.php";
    session_start();
    $conn = new mysqli($_SESSION['LocHos'], $_SESSION['Polzov'], $_SESSION['Password'], $_SESSION['BazaDan']);
    $Output = "SELECT * FROM komment ;";
 if($result6 = $conn->query($Output)){
    foreach($result6 as $row6){
    echo "<p>".$row6['NameUser']." ".$row6['Message']."</p></br>";
    /*$_GET['OutputMes'] = $row6['Message'];
    $_GET['OutputUse'] = $row6['NameUser'];*/
    /*$OutputMes = $_GET['OutputMes'];
    $OutputUse = $_GET['OutputUse'];*/
}
}
else{
    echo "Ошибка: " . $conn->error;
}
?>
