<?php
  include("koneksi.php");
  $query = "SELECT * FROM databarang";
  $sql = $conn->query($query);
  $result=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <section>
    <div class="container">
        <h1>Input Barang</h1>
          <form action="proses.php" method="post">
            <label for="">Nama Barang</label>
            <input type="text" name="nama" placeholder="Nama Barang" required>
            
            <label for="">Jenis Barang</label>
            <input type="text" name="jenis"  placeholder="Jenis Barang" required>
            
            <label for="">Jumlah Barang</label>
            <input type="number" name="jumlah" placeholder="Jumlah Barang" required>
            
            <label for="">Harga Barang</label>
            <input type="number" name="harga" placeholder="Harga Barang" required>
            <button type="submit">Input</button>
          </form>
    </div>
  </section>
</body>
</html>