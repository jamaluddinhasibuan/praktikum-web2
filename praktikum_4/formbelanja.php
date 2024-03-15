<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja Online</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <?php
  require_once 'header.php';
  require_once 'sidebar.php';

  ?>


</head>
<body class="text-light bg-info" class="bg">
  <h2 class="text-center mt-2">Form Belanja Online Lebih Mudah</h2>
  
  <div class="container border-bottom mt-4" style="text">
    <div class="row">

    <div class="col">
    <form method="POST">
      <div class="form-group row mt-3">
        <label for="text" class="col-4 col-form-label fw-semibold">Customer</label> 
        <div class="col-8">
          <input id="text" name="text" placeholder="Tulis nama kamu disini ya" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-3">
        <label class="col-4 fw-semibold">Pilih Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Masako"> 
            <label for="radio_0" class="custom-control-label">Masako</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Ajinomooto/sachet"> 
            <label for="radio_1" class="custom-control-label">Ajinomoto/sachet</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Susu sachet tigasapi"> 
            <label for="radio_2" class="custom-control-label">Susu sachet tigasapi</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Kecap ABBD"> 
            <label for="radio_2" class="custom-control-label">Kecap ABBD</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Rinso cair/renteng"> 
            <label for="radio_2" class="custom-control-label">Rinso cair/renteng</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Saos"> 
            <label for="radio_2" class="custom-control-label">Saos</label>
          </div>
        </div>
      </div>
      <div class="form-group row mt-3">
        <label for="text1" class="col-4 col-form-label fw-semibold">Jumlah Produk</label> 
        <div class="col-8">
          <input id="text1" name="text1" placeholder="Mau beli berapa nih?" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8 mt-3 mb-3">
          <button name="submit" type="submit" class="btn btn-primary fw-semibold">Beli Sekarang</button>
        </div>
      </div>
    </form>
  </div>

  <div class="col mt-3 ms-3">
      <ul class="list-group">
        <li class="list-group-item bg-warning text-center">Harga Barang</li>
        <li class="list-group-item">Masako : Rp 2.000</li>
        <li class="list-group-item">Ajinomoto/sachet : Rp 1.500</li>
        <li class="list-group-item">Susu sachet tigasapi : Rp 3.000</li>
        <li class="list-group-item">Kecap ABBD : Rp 7.000</li>
        <li class="list-group-item">Rinso cair/renteng : Rp 10.000</li>
        <li class="list-group-item">Saos  : Rp 19.000</li>
      </ul>
  </div>
  <div> <ul>
            <li>

            </li>
  </ul></div>

  </div>
  
</div>

    <?php
        if(isset($_POST['submit'])) {
            // Mengambil data dari form
            $customer = $_POST['text'];
            $produk = $_POST['radio'];
            $jumlah_produk = $_POST['text1'];

            // Mendefinisikan harga produk
            $harga_produk = 0;
            if ($produk == 'Masako') {
                $harga_produk = 2000;
            } elseif ($produk == 'Ajinomoto/sachet') {
                $harga_produk = 1500;
            } elseif ($produk == 'Susu sachet tigasapi') {
                $harga_produk = 3000;
            } elseif ($produk == 'Kecap ABBD') {
                $harga_produk = 7000;
            } elseif ($produk == 'Rinso cair/renteng') {
                $harga_produk = 10000;
            } elseif ($produk == 'Saos') {
                $harga_produk = 19000;   
            } else {
                // Produk tidak valid
                echo "<div class='container'>";
                echo "<h2>Informasi Pembelian</h2>";
                echo "<p>Produk tidak valid</p>";
                echo "</div>";
                exit(); // Keluar dari skrip
            }

            // Menghitung total pembelian
            $total_pembelian = $harga_produk * $jumlah_produk;

            // Menampilkan informasi pembelian
            echo "<h2 class='mt-3 ms-3 mb-2 text-center'>Informasi Pembelian</h2>";
            echo "<div class='table-responsive ms-5 me-5'>";
            echo "<table class='table table-bordered'>";
            echo "<tbody>";
            echo "<tr><th>Nama Customer</th><td>$customer</td></tr>";
            echo "<tr><th>Produk yang dipilih</th><td>" . ucfirst($produk) . "</td></tr>";
            echo "<tr><th>Jumlah Produk yang dibeli</th><td>$jumlah_produk</td></tr>";
            echo "<tr><th>Total Pembelian</th><td>Rp. " . number_format($total_pembelian, 0, ',', '.') . "</td></tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
      ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>