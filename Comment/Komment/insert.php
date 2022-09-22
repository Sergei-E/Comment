<?php
    include "databaseconnect.php";
    session_start();
    $Message1 = $_POST['text1'];
    $NameUser1 = $_POST['text2'];
    $conn = new mysqli($_SESSION['LocHos'], $_SESSION['Polzov'], $_SESSION['Password'], $_SESSION['BazaDan']);
    $sql = "INSERT INTO komment (NameUser, Message, Date) VALUES ('".$NameUser1."','".$Message1."','".date('d.m.Y')."');";
    if($conn->query($sql)){
        $POl="Данные успешно добавлены";
        echo ("<script>console.log('".$POl."');</script>");
    } else{
        echo "Ошибка: " . $conn->error;
    }
?>