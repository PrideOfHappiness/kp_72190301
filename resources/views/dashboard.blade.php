<body>
@include('template/header')
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
                        <p> Data Transaksi Terdeteksi </p>
                    </div>
                    <a href="{{ route('getAllMotorData') }}" class="small-box-footer"> Lihat Lebih Mendetail <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="small-box bg-">
            </div>
        </div>
    </div>
</section>
@include('template/footer')
</body>
