<?php
require_once 'header.php';
require_once 'sidebar.php';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum o2</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 02</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="container">
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
                    </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>