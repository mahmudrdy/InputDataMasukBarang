<?php 
  include("koneksi.php");
  $query = "SELECT * FROM databarang";
  $sql = $conn->query($query);
  $julahTotalBarang=0;
  $totalHarga=0;
  $no=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Example</title>
    <style>
        * {
          padding: 0;
          margin: 0;
          box-sizing: border-box;
        }
        .container {
          width: 100%;
          padding: 40px;
          text-align: center;
        }
        table {
          width: 100%;
          border-collapse: collapse;
          margin-top: 20px;
        }

        th, td {
          padding: 12px;
          text-align: left;
          border: 1px solid #ddd;
        }

        th {
          background-color: #4caf50;
          color: white;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }

        tr:hover {
          background-color: #ddd;
        }
        a {
          margin-top: 10px;
          text-decoration: none;
          text-align: center;
          padding: 5px;
          background-color: red;
          border-radius: 2px;
          color: white;
        }
        .kembali {
          position: relative;
          top: 20px;
          left: -413px;
          background-color: blue;
        }
        
    </style>
</head>
<body>
  <div class="container">
    <h1>Data Barang</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Barang</th>
                <th class="button">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php 
            while($result=mysqli_fetch_assoc($sql)){
              $julahTotalBarang += $result['Jumlah_barang'];
              $totalHarga += $result['Harga_barang'];
              $no++
          ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $result['Nama_barang'];?></td>
                <td><?php echo $result['Jenis_barang'];?></td>
                <td><?php echo $result['Jumlah_barang'];?></td>
                <td><?php echo 'Rp. ', number_format( $result['Harga_barang'], 0, ",", ".");?></td>
                <td>
                  <a href="hapus.php?hapus=<?php echo $result['Id_Barang']; ?>">Hapus</a>
                  <a href="edit.php?edit=<?php echo $result['Id_Barang']; ?>">Edit</a>
                </td>

            </tr>
          <?php 
            }
          ?>
            <tr>
              <td colspan="3"><strong>Total</strong></td>
              <td><strong><?php echo $julahTotalBarang;?></strong></td>
              <td colspan="2"><strong><?php echo 'Rp. ', number_format($totalHarga, 0,",", ".");?></strong></td>
            </tr>
        </tbody>
    </table>
    <a href="index.php" class="kembali">Kembali</a>
  </div>
</body>
</html>
