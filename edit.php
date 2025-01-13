<?php
  include("koneksi.php");

  if (isset($_GET['edit'])) {
      $id_barang = $_GET['edit'];

      $query = "SELECT * FROM databarang WHERE Id_Barang = '$id_barang'";
      $result = $conn->query($query);
      $barang = mysqli_fetch_assoc($result);

      if (!$barang) {
          die("Barang tidak ditemukan");
      }
  }

  if (isset($_POST['update'])) {
      $nama_barang = $_POST['nama_barang'];
      $jenis_barang = $_POST['jenis_barang'];
      $jumlah_barang = $_POST['jumlah_barang'];
      $harga_barang = $_POST['harga_barang'];

      $update_query = "UPDATE databarang SET Nama_barang = '$nama_barang', Jenis_barang = '$jenis_barang', Jumlah_barang = '$jumlah_barang', Harga_barang = '$harga_barang' WHERE Id_Barang = '$id_barang'";

      if ($conn->query($update_query) === TRUE) {
          header("Location:admin.php");
      } else {
          echo "Error: " . $conn->error;
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.container {
  padding: 20px;
  height: 100vh;
  width: 100%;
  background-color: #fff;
}
.container h1 {
  text-align: center;
}
label {
  display: block;
  font-size: 14px;
  color: #333;
  margin-bottom: 8px;
}
input[type="text"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  transition: border-color 0.3s;
}
input[type="text"]:focus,
input[type="number"]:focus {
  border-color: #4caf50;
  outline: none;
}
form {
  width: 100%;
  display: flex;
  flex-direction: column;
  padding: 30px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
form input:last-child {
  margin-bottom: 0;
}
button {
  padding: 10px 20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}
button:hover {
  background-color: #45a049;
}
a {
  background-color: blue;
  color: white;
  padding: 10px;
  border-radius: 5px;
  text-decoration: none;
  margin-top: 10px;
}
    </style>
</head>
<body>
  <div class="container">
    <h1>Edit Barang</h1>
    <form action="" method="POST">
      <label for="nama_barang">Nama Barang:</label>
      <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $barang['Nama_barang']; ?>" required>
      
      <label for="jenis_barang">Jenis Barang:</label>
      <input type="text" id="jenis_barang" name="jenis_barang" value="<?php echo $barang['Jenis_barang']; ?>" required>
      
      <label for="jumlah_barang">Jumlah Barang:</label>
      <input type="number" id="jumlah_barang" name="jumlah_barang" value="<?php echo $barang['Jumlah_barang']; ?>" required>
      
      <label for="harga_barang">Harga Barang:</label>
      <input type="number" id="harga_barang" name="harga_barang" value="<?php echo $barang['Harga_barang']; ?>" required>

      <button type="submit" name="update">Update Barang</button>
    </form>
    <a href="index.php">Kembali ke Daftar Barang</a>
  </div>
</body>
</html>
