<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="list-group mt-5">
            <li class="list-group-item active w-25" aria-current="true">Daftar Harga</li>
            <li class="list-group-item w-25">TV : 4.200.000</li>
            <li class="list-group-item w-25">Kulkas : 3.100.000</li>
            <li class="list-group-item w-25">Mesin Cuci : : 3.800.000</li>
            <li class="list-group-item active mb-5 w-25">Harga dapat berubah setiap saat.</li>
            </ul>
        </div>

        <div class="col">
    <form class="form-horizontal mt-3" method="POST" action="form_belanja.php">
    <fieldset>
        <legend>Belanja Online</legend>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Customer</label> 
        <div class="col-8">
        <input style="width: 350px;" id="customer" name="customer" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
            <label for="radio_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
            <label for="radio_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin_Cuci"> 
            <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
        <input style="width:100px;" id="jumlah" name="jumlah" type="number" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
        </div>
    </div>
    </fieldset>
    </form>


<?php
    if(isset($_POST['proses'])){
        $proses= $_POST['proses'];
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $hargatv = 4200000;
        $hargakulkas = 3100000;
        $hargamesincuci = 3800000;
        $totalharga = " ";

        if($produk=='TV'){
            $totalharga = $hargatv * $jumlah;
        }elseif($produk=='Kulkas'){
            $totalharga = $hargakulkas * $jumlah;
        }elseif($produk=='Mesin_Cuci'){
            $totalharga = $hargamesincuci * $jumlah;
        }else{
            echo"Input dengan Benar!<br/>";
        }
    }else{
        echo 'Form Belum di Submit!';
    }
    echo '<br/>Proses : '.$proses;
    echo '<br/>Customer : '.$customer;
    echo '<br/>Pilihan Produk : '.$produk;
    echo '<br/>Jumlah : '.$jumlah;
    echo '<br/>Total Harga : '.$totalharga;

?>
</div>
</div>
</div>


</body>
</html>




