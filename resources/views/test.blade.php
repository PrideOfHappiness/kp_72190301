<!DOCTYPE html>
<head>
    @include('template/header')
    <title> Tentang Situs Ini </title>
</head>
<body>
    @include('template/navbar')
    @include('template/sidebar')

    <section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"> Daftar Data Penjualan</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Barang</th>
                            <th>Warna</th>
                            <th>Jumlah Stok</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($hasil) && $hasil->count())
                                @foreach ($hasil as $row)
                                    <tr>
                                        <td> {{ $row-> Kode}} </td>
                                        <td> {{ $row-> nama}} </td>
                                        <td> {{ $row-> Warna}} </td>
                                        <td> {{ $row-> count}} </td>
                                    <tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('template/footer')
</body>
</html>

