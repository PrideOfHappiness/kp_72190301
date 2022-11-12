<body>
@include('template/header')
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
                            <th>Tgl FJ</th>
                            <th>No. FJ</th>
                            <th>Kode Gudang</th>
                            <th>Nomor Mesin</th>
                            <th>Nomor Rangka</th>
                            <th>Tahun Sepeda Motor</th>
                            <th>Warna Sepeda Motor</th>
                            <th>Nama Barang</th>
                            <th>Spesifikasi Lain</th>
                            <th>Jenis Pembayaran</th>
                            <th>Kode Customer</th>
                            <th>Nama Customer</th>
                            <th>Alamat Customer</th>
                            <th>Kecamatan</th>
                            <th>Kode Wilayah</th>
                            <th>Wilayah</th>
                            <th>Nomor KTP Customer</th>
                            <th>Telp</th>
                            <th>Kode Pembiayaan Customer</th>
                            <th>Nama Penanggung Jawab Pembiayaan</th>
                            <th>Nama Pemegang BPKB dan STNK</th>
                            <th>Alamat BPKB dan STNK</th>
                            <th>Nomor KTP untuk BPKB dan STNK</th>
                            <th>Nama Sales </th> 
                            <th>Divisi </th>
                            <th>Broker </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($data) && $data->count())
                            @foreach ($data as $row)
                                <tr>
                                    <td> {{ $row-> id}} </td>
                                    <td> {{ $row-> Tanggal_FJ}} </td>
                                    <td> {{ $row-> Nomor_FJ}} </td>
                                    <td> {{ $row-> Gudang}} </td>
                                    <td> {{ $row-> Nomor_Mesin}} </td>
                                    <td> {{ $row-> Nomor_Rangka}} </td>
                                    <td> {{ $row-> Tahun}} </td>
                                    <td> {{ $row-> Warna}} </td>
                                    <td> {{ $row-> Nama_Barang}} </td>
                                    <td> {{ $row-> Spesifikasi_Lain}} </td>
                                    <td> {{ $row-> Jenis_Bayar}} </td>
                                    <td> {{ $row-> Kode_Customer}} </td>
                                    <td> {{ $row-> Nama_Customer}} </td>
                                    <td> {{ $row-> Alamat_Customer}} </td>
                                    <td> {{ $row-> Kecamatan}} </td>
                                    <td> {{ $row-> Kode_Wilayah}} </td>
                                    <td> {{ $row-> Nama_Wilayah}} </td>
                                    <td> {{ $row-> Nomor_KTP_Customer}} </td>
                                    <td> {{ $row-> Nomor_Telepon}} </td>
                                    <td> {{ $row-> Kode_Customer_Biaya}} </td>
                                    <td> {{ $row-> Nama_Customer_Biaya}} </td>
                                    <td> {{ $row-> Nama_BPKB_STNK}} </td>
                                    <td> {{ $row-> Alamat_BPKB_STNK }} </td>
                                    <td> {{ $row-> Nomor_KTP_BPKB_STNK }} </td>
                                    <td> {{ $row-> Nama_Sales}} </td>
                                    <td> {{ $row-> Divisi}} </td>
                                    <td> {{ $row-> Nama_Broker}} </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    </table>
                    {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('template/footer')
</body>
