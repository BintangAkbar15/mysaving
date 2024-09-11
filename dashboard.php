<?php 
session_start();
include "function.php";


if(isset($_POST['submit'])){
    if(!isset($_SESSION['login']) && !isset($_COOKIE['login'])){
        header("location:index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid p-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">
                        ALAMAKKK
                    </h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-7">
                    <h5 class="text-center">Jumlah awal</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form action="" method="post" class="form-input">
                                    <div class="form-group">
                                        <input type="text" id="amount" class="form-control" placeholder="Jumlah Awal">
                                    </div>
                                    <button name="submit" class="btn btn-outline-warning mt-2 w-100">Simpan Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center mt-5">Pengeluaran</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga Satuan</th>
                                            <th>Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=1;
                                            
                                            echo "
                                        <tr>
                                            <td>{$no}</td>
                                            <td>Gedagedigedagedao</td>
                                            <td>10</td>
                                            <td>darga Satuan</td>
                                            <td>Total darga</td>
                                        </tr>
                                            ";

                                        ?>
                                    </tbody>
                                    <tr></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h5 class="text-center">LOG PENGELUARAN</h5>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form action="" method="post" class="form-input">
                                    <div class="form-group d-grid gap-2">
                                        <input type="text" name="name" id="amount" class="form-control" placeholder="Nama Barang">
                                        <input type="text" name="qty" id="amount" class="form-control" placeholder="Jumlah Pembelian">
                                        <input type="text" name="price" id="amount" class="form-control" placeholder="Harga Satuan">
                                    </div>
                                    <button name="submit" class="btn btn-outline-warning mt-2 w-100">Simpan Data</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

    <script src="index.js"></script>
</body>
</html>