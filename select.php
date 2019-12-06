<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cycle_rental";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT Rowery, 6h, 24h, 48h, 72h  FROM mountain_bikes";
// $result = $conn->query($sql); 

// if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_assoc()) {
//         echo "Rowery:" . $row["Rowery"]. " 6h: " . $row["6h"]. " 24h: " . $row["24h"]. " 48h: " . $row["48h"]. " 72h: " . $row["72h"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

$conn = mysqli_connect("localhost", "root", "", "cycle_rental");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Rowery, 6h, 24h  FROM mountain_bikes;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Rowery"]. "</td><td>" . $row["6h"] . "</td><td>"
. $row["24h"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>