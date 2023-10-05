<?php
$conn = mysqli_connect("localhost", "root", "", "crud-php");
if(!$conn) {
    echo ( "<h1>Error</h1>" );
}

$query = "SELECT COUNT(*) AS jumlah FROM catatan";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$jumlah = $row['jumlah'];
// Jika tidak ada data, reset nomor urutan
if ($jumlah == 0) {
 $query = "ALTER TABLE catatan AUTO_INCREMENT = 1";
 $conn->query($query);
?>