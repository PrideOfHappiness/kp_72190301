<!DOCTYPE html>
<html lang="en">
<head>
    @include('template/header')
    <title>Pilih Data Dari Sistem</title>
</head>
<body>
    @include('template/navbar')
    @include('template/sidebar')
        <section class="content"> 
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="row mb-2"> 
                        <div class="col md-12"> 
                            <div class="card-header"> 
                                <h3 class="card-title"> Pilih Data</h3>
                            </div>
                            <div class="card-body"> 
                                <p> Silahkan pilih kelompok data yang diinginkan disini </p>
                                    <a class="btn btn-app bg-secondary" href="{{ route('addDataExcel') }}" > 
                                    <i class="fa-regular fa-file-plus"></i>
                                    Tambah Data
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @include('template/footer')
</body>
</html>