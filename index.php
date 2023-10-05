<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CRUD Buku </title>
 <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
 // membuat tabel
 <div class="container">
 <h1 class="text-center mt-5">Daftar Buku</h1>
 <a href="add.php" class="btn btn-primary">Tambah Buku</a>
 <table class="table">
 <thead>
 <tr>
 <td>No</td>
 <td>Judul</td>
 <td>Konten</td>
 <td>Aksi</td>
 </tr>
 </thead>
 // munculin data dari db
 <tbody>
 <?php
 $query = mysqli_query($conn, "SELECT * FROM catatan ORDER BY id ASC");
 $no = 1;
 if ($query->num_rows > 0) { 
 while ($row = mysqli_fetch_assoc($query)) { 
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['judul'] . "</td>";
    echo "<td>" . $row['deskripsi'] . "</td>";
    echo "<td>      <a href='update.php?id=" . $row['id'] . "' class='btn btnwarning'>Edit</a>
                    <a href='delete.php?id=" . $row['id'] . "' class='btn btndanger'>Hapus</a>
 </td>";
 echo "</tr>";
 $no++;
 }
 } else {
 echo "<tr><td colspan='4'>Tidak ada catatan</td></tr>"; 
 }
 $conn->close();
 ?>
 </tbody>
 </table>
 </div>
 <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
</script>
add.php
process-add.php
</body>
</html>