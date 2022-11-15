<body>
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
            <div class="card-body"><canvas id="grafikSPM1"></canvas>        
            </div>
        </div>
        <div class="card card-default">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"> </i>
                        Persentase Sepeda Motor Terjual
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
                        <!--canvas id="grafikSPM2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas -->
                </div>
            </div>
        </div>
   </div>
</section>
@include('template/footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
</body>

<script>
    $(function () {
        var chartDatas = JSON.parse('<?php echo $chart_data; ?>');
        var canvas = $('#grafikSPM1').get(0).getContext('2d')

        var chartDatas = { 
            labels: chartDatas.label,
            datasets: [{
                data: chartDatas.chartData,
                backgroundColor: [
                    '#f56954',
                    '#00a65a',
                    '#f39c12',
                    '#00c0ef',
                    '#FA8072',
                    '#E9967A',
                    '#FFA07A',
                    '#DFFF00',
                    '#DE3163',
                    '#CCCCFF',
                    '#9FE2BF',
                    '#40E0D0',
                    '#cddc39',
                    '#148f77',
                    '#28b463' ,
                    '#212f3c',
                    '#388e3c',
                    '#ff7043',
                    '#ff8f00',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 50, 140, 1)',
                    'rgba(255, 205, 86, 1)',
                ],
                borderWidth: 1
                }          
            ]
        }

        var options = {
            maintainAspectRatio : true,
            responsive : true,
            cutoutPercentage: 80,
        }

        var chart1 = new Chart(canvas, {
            type: 'bar',
            data: chartDatas,
            options: options
        })
    })
</script>
