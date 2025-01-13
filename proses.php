<?php 
    include("koneksi.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        
        $query = "INSERT INTO databarang (Nama_barang, Jenis_barang, Jumlah_barang, Harga_barang) VALUES ('$nama', '$jenis', '$jumlah', '$harga')";
        $sql = mysqli_query($conn, $query);
        if(!$sql) {
            die("Error pada query: " . mysqli_error($conn));
        } else {
          header("Location:admin.php");
        }
    }
?>
