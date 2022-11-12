<body>
@include('template/header')
@include('template/navbar')
@include('template/sidebar')

<section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                        <h3 class="card-title"> Hasil Pencarian Data Dari Tanggal {{ $awal }} sampai Tanggal {{ $akhir }} </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead> 
                            <tr> 
                                <th> Nama Barang </th>
                                <th> Jumlah Barang </th> 
                            </tr>
                        </thead>
                        <tbody> 
                        @if(!empty($proses) && $proses->count())
                            @foreach ($proses as $data=>$key)
                            <tr> 
                                <td> {{ ucfirst($data) }} </label></td>
                                <td> {{ count($key) }}</td>
                                @error('proses')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </tr>
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
