<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Daftar Harga</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Produk</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Mesin Cuci</td>
          <td>Rp 3,000,000</td>
        </tr>
        <tr>
          <td>Kulkas</td>
          <td>Rp 5,000,000</td>
        </tr>
        <tr>
          <td>TV</td>
          <td>Rp 4,000,000</td>
        </tr>
        <tr>
          <td>AC</td>
          <td>Rp 6,000,000</td>
        </tr>
      </tbody>
    </table>
    
    <h2>Form Belanja</h2>
    <form method="post" action="">
      <div class="form-group">
        <label for="customer">Nama Customer:</label>
        <input type="text" class="form-control" id="customer" name="customer">
      </div>
      <div class="form-group">
        <label>Pilihan Produk:</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="produk" id="produk1" value="Mesin Cuci,3000000">
          <label class="form-check-label" for="produk1">Mesin Cuci</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="produk" id="produk2" value="Kulkas,5000000">
          <label class="form-check-label" for="produk2">Kulkas</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="produk" id="produk3" value="TV,4000000">
          <label class="form-check-label" for="produk3">TV</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="produk" id="produk4" value="AC,6000000">
          <label class="form-check-label" for="produk4">AC</label>
        </div>
      </div>
      <div class="form-group">
        <label for="jumlah">Jumlah:</label>
        <input type="text" class="form-control" id="jumlah" name="jumlah">
      </div>
      <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
      $customer = $_POST['customer'] ?? '';
      $selected_produk = $_POST['produk'] ?? '';
      $jumlah = $_POST['jumlah'] ?? '';
      
      if (!is_numeric($jumlah)) {
        echo "<p>Jumlah harus berupa angka.</p>";
      } else {
        $produk_data = explode(",", $selected_produk);
        $produk = $produk_data[0];
        $harga = $produk_data[1];
        $total_harga = $jumlah * $harga;
        
        echo "<h4 class='mt-4'>Data Belanja:</h4>";
        echo "<p>Nama Customer: $customer</p>";
        echo "<p>Produk Pilihan: $produk</p>";
        echo "<p>Jumlah Beli: $jumlah</p>";
        echo "<p>Total Harga: Rp " . number_format($total_harga) . "</p>";
      }
    }
    ?>
  </div>
</body>
</html>
