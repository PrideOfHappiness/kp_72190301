<!DOCTYPE html>
<html lang="en">
<head>
    @include('template/header')
    <title>Hasil Pencarian Data</title>
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
                            <th>Kode Divisi</th>
                            <th>Kode Gudang</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Nomor Mesin</th>
                            <th>Nomor Rangka</th>
                            <th>Nomor Stok</th>
                            <th>Warna</th>
                            <th>Nomor Faktur </th>
                            <th>Tanggal Cetak Faktur</th>
                            <th>Nomor Inventaris</th>
                            <th>Tanggal masuk Inventaris</th>
                            <th>Nilai Kendaraan (Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($proses) && $proses->count())
                            @foreach ($proses as $row)
                                <tr>
                                    <td> {{ $row-> id}} </td>
                                    <td> {{ $row-> Kode_Div}} </td>
                                    <td> {{ $row-> Kode_Gdg}} </td>
                                    <td> {{ $row-> Kode_Brg}} </td>
                                    <td> {{ $row-> Nama_Brg}} </td>
                                    <td> {{ $row-> No_Mesin}} </td>
                                    <td> {{ $row-> No_Rangka}} </td>
                                    <td> {{ $row-> No_Stok}} </td>
                                    <td> {{ $row-> Nama_Warna}} </td>
                                    <td> {{ $row-> No_SPB}} </td>
                                    <td> {{ $row-> Tgl_SPB}} </td>
                                    <td> {{ $row-> No_LPB}} </td>
                                    <td> {{ $row-> Tgl_LPB}} </td>
                                    <td> {{ "Rp" .number_format($row->Nilai_Rp, 0, ",", ".") }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    </table>
                    {{$proses->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('template/footer')
</body>
</html>
