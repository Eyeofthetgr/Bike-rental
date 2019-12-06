<?php
$Imie = $_POST['Imie'];
$Nazwisko = $_POST['Nazwisko'];
$Wiek = $_POST['Wiek'];
$Telefon = $_POST['Telefon'];
$Email = $_POST['Email'];
$Rower = $_POST['Rower'];

$conn = new mysqli('localhost','root','','cycle_rental');
if($conn->connect_error){
    die('Connection failed '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into orders(Imie, Nazwisko, Wiek, Telefon, Email, Rower)
        values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$Imie, $Nazwisko, $Wiek, $Telefon, $Email, $Rower);
    $stmt->execute();
    echo "Rejestracja przebiegła pomyślnie";
    $stmt->close();
    $conn->close();
}

