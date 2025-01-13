<?php 
  include("koneksi.php");
  if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $query = "DELETE FROM databarang WHERE Id_barang = '$id'";
    $sql = $conn->query($query);
    if(!$sql) {
      die("Error pada query: " . mysqli_error($conn));
    } else {
      header("Location:admin.php");
    }
  }
?>