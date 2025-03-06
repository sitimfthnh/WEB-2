<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="col-4" style="float: right;">
            <div class="card">
                <div class="card-header bg-primary text-white">Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Make Up : 10.200.000</li>
                    <li class="list-group-item bg-light">Pakaian : 3.100.000</li>
                    <li class="list-group-item bg-light">Elektronik : 20.800.000</li>
                </ul>
            </div>
            <div class="card-footer bg-primary text-white">Harga Dapat Berubah Setiap Saat</div>
        </div>

        <div class="col-8">
            <div class="header">
                <header class="border-bottom">
                    <h3>Belanja Online</h3>
                </header>
            </div>
            <div class="col-8 align-middle">
                <form method="POST" action="form-belanja.php">
                    <div class="form-group row text-end mt-3">
                        <label for="nama" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="produk" class="col-4 text-end">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk1" type="radio" class="custom-control-input" value="Skincare" required>
                                <label for="produk1" class="custom-control-label">Make Up</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk2" type="radio" class="custom-control-input" value="Pakaian" required>
                                <label for="produk2" class="custom-control-label">Pakaian</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk3" type="radio" class="custom-control-input" value="Iphone" required>
                                <label for="produk3" class="custom-control-label">Elektronik</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row text-end mt-3">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-4">
                            <input id="jumlah" name="jumlah" type="number" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr />

        <?php
        // MENANGKAP DATA YANG DI-INPUT
        if (isset($_POST['proses'])) {
            $nama_customer = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];


        // MENGHITUNG TOTAL BELANJA MENGGUNAKAN IF ELSE ATAU SWITCH
        switch ($produk) {
            case 'Televisi':
                $harga = 4200000;
                break;
            case 'Kulkas':
                $harga = 3100000;
                break;
            case 'Mesin Cuci':
                $harga = 3800000;
                break;
            default:
                $harga = 0;
                break;
        }
        $total_belanja = $harga * $jumlah;


        // MENCETAK HASIL
        echo '<div class="container mt-5">';
        echo 'Nama Customer : ' . $nama_customer . '<br>';
        echo 'Produk pilihan : ' . $produk . '<br>';
        echo 'Jumlah beli : ' . $jumlah . '<br>';
        echo 'Total Belanja : Rp. ' . $total_belanja, ',', '.' . '<br>';
        echo '</div>';
    }
        //echo 'Nama Customer : ' . $nama_customer;
?>

    </div>
</body>

</html>