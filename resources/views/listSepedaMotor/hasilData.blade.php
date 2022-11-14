<body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@include('template/header')
@include('template/navbar')
@include('template/sidebar')

<section class="content">
   <div class="container-fluid" >
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"> Hasil Pencarian Data Dari Tanggal {{ $awal }} sampai Tanggal {{ $akhir }} </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-borderless table-hover">
                    <thead>
                       <tr>
                            <th> Nama Barang</th>
                            <th> Jumlah </th>
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
        <div class="card card-default">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-pie"> </i>
                        Grafik Persentase
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                            <!--canvas id="grafikSPM" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas -->
                </div>
            </div>
        </div>
   </div>
</section>
@include('template/footer')
</body>
