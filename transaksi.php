<?php
$barang = [
    ["Nambar" => "Mie Instan ", "Harga" => 3000],
    ["Nambar" => "Sabun Mandi ", "Harga" => 3500],
    ["Nambar" => "Shampoo ", "Harga" => 1000],
    ["Nambar" => "Sendal Jepit ", "Harga" => 11000],
    ["Nambar" => "Roti ", "Harga" => 12000],
    ["Nambar" => "Buku Tulis ", "Harga" => 55000],
    ["Nambar" => "Susu Kotak ", "Harga" => 6000],
    ["Nambar" => "Minyak Goreng ", "Harga" => 13000],
    ["Nambar" => "Ice Cream ", "Harga" => 11000],
    ["Nambar" => "Batre ", "Harga" => 16000],
];

$customer = [["Nama" =>"Ujang"],["Nama" =>"Wildan"],["Nama" =>"Budi"],["Nama" =>"Heru"],["Nama" =>"Joko"],["Nama" =>"Togar"]];
include 'header.php';
include 'footer.php';

function jumlah($jumlah, $harga)
{
    return  $jumlah * $harga;
}


function subtotal($Jumlahbarang,$tottal = 0)
{
    foreach ($Jumlahbarang as $jumbar) {
        $tottal += Jumlah($jumbar['Jumlah'], $jumbar['Harga']);
    }
    return $tottal;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>


    <!-- Form -->
    <div class="container col-lg-6" id="inputrans">
        <form method="post">
            <div class="form-group">
                <label for="Kode Transaksi" class=" col-form-label">Kode Transaksi</label>
                <input name="Kode Transaksi" type="text" class="form-control" id="Nama" placeholder="XXXX">
            </div>

            <div class="form-group">
                <label for="tanggalan" class=" col-form-label">Tanggal</label>
                <input name="Tanggal" type="date" class="form-control" id="tanggal">
            </div>

            <div class="form-group">
                <label for="Customer" class=" col-form-label">Pilih Customer</label>
                <select name="Customer" id="Customer" class="form-select" aria-label="Default select example">
                <?php
                    foreach ($customer as $cust) { ?>
                    <option value="Customer"><?php echo $cust["Nama"]; ?></option>
                    <?php   } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="Barang 1" class=" col-form-label">Barang 1</label>
                <Select name="Barang 1" id="Barang" class="form-select" aria-label="Default select example">
                    <?php
                    foreach ($barang as $bars) { ?>
                        <option value="Barang"><?php echo $bars["Nambar"]; ?></option>
                    <?php   } ?>
                    ?>
                </Select>
                <input name="qty1" type="number" class="form-control" id="qty1">
            </div>

            <div class="form-group">
                <label for="Barang 2" class=" col-form-label">Barang 2</label>
                <Select name="Barang 2" id="Barang" class="form-select" aria-label="Default select example">
                    <?php
                    foreach ($barang as $bars) { ?>
                        <option value="Barang"><?php echo $bars["Nambar"]; ?></option>
                    <?php   } ?>
                    ?>
                </Select>
                <input name="qty2" type="number" class="form-control" id="qty2">
            </div>

            <div class="form-group">
                <label for="Barang 3" class=" col-form-label">Barang 3</label>
                <Select name="Barang 3" id="Barang" class="form-select" aria-label="Default select example">
                    <?php
                    foreach ($barang as $bars) { ?>
                        <option value="Barang"><?php echo $bars["Nambar"]; ?></option>
                    <?php   } ?>
                    ?>
                </Select>
                <input name="qty3" type="number" class="form-control" id="qty3">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="Membery" id="Membery">
                <label class="form-check-label" for="Membery">
                    ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Membert" id="Membert" checked>
                <label class="form-check-label" for="Membert">
                    tidak
                </label>
            </div>

            <div class="form-group">
                <label for="Uang Pembayaran" class=" col-form-label">Uang Pembayaran</label>
                <input name="Uang Pembayaran" type="number" class="form-control" id="Pembayaran">
            </div>
    </div>

    <div class="d-flex" style="align-items: center; justify-content: center;">
        <button name="submit" style="margin: 20px 20px ; " type="submit" class="btn btn-primary btn-block ">Submit</button>
        <button name="Batal" style="margin: 20px 20px ; " type="submit" class="btn btn-primary btn-block ">Batal</button>
    </div>
    </form>






    <!-- Struk -->
    <?php
$Kod = $_POST['Kode Transaksi'];
echo $Kod;

    ?>
</body>
</html>