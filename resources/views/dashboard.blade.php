<!DOCTYPE html>
<html lang="en">
<head>
    @include('template/header')
    <title>Dashboard</title>
</head>
<body>
@include('template/navbar')
@include('template/sidebar')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $dataSeluruh }} </h3>
                        <br>
                        <p> Data Pengiriman Terdeteksi </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <a href="{{ route('lihatData') }}" class="small-box-footer"> Lihat Lebih Mendetail <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $dataMotor }} </h3>
                        <br>
                        <p> Merk Sepeda Motor Terdeteksi </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-motorcycle"></i>
                    </div>
                    <a href="{{ route('getAllMotorData') }}" class="small-box-footer"> Lihat Lebih Mendetail <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $dataSales }} </h3>
                        <br>
                        <p> Nama Sales Terdeteksi </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-person"></i>
                    </div>
                    <a href="{{ route('getAllSalesData') }}" class="small-box-footer"> Lihat Lebih Mendetail <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $dataFinance }} </h3>
                        <br>
                        <p> Perusahaan Financing Terdeteksi </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <a href="{{ route('getAllFinance') }}" class="small-box-footer"> Lihat Lebih Mendetail <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $dataStok }} </h3>
                        <br>
                        <p> Stok Barang Terdeteksi </p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-warehouse"></i>
                    </div>
                    <a href="{{ route('showDataStok') }}" class="small-box-footer"> Lihat Lebih Mendetail <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Grafik Penjualan Barang</h3>
                </div>
                <div class="card-body">
                    <div id="grafikPenjualan"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('template/footer')
</body>
</html>

<script type="text/javascript"> 

</script>