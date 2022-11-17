<body>
@include('template/header')
@include('template/navbar')
@include('template/sidebar')

<section class="content">
   <div class="container-fluid" >
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"> Hasil Pencarian Data Perusahaan Financing Dari Tanggal {{ $awal }} sampai Tanggal {{ $akhir }} </h3>
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
   </div>
</section>
@include('template/footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
</body>

<script>
        //--GrafikSPM1 (Keluar Hasil SQL)
        var chartDatas = JSON.parse('<?php echo $chart_data; ?>');
        const data = {
            labels: chartDatas.label,
            datasets: [{
                label: "Jumlah Kredit Perusahaan Financing Terhitung",
                data: chartDatas.jumlah,
                backgroundColor: [
                    '#f56954',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                ],
                borderWidth: 1
                }]
        };
        
        const configBar = {
            type: 'bar',
            data: data,
            options:  
            {
                maintainAspectRatio : true,
                responsive : true,
                cutoutPercentage: 80,
                scales: {
                    xAxes: [{
                        barPercentage:1,
                        categoryPercentage:0.5,
                        gridLines: {
                            display: true
                        },
                        ticks: {fontColor:"#8f9092"}
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            show: true
                        },
                        gridLines: {
                            color:"#ecedef"
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1.3,
                        }
                    }]
                }
            }   
        };

        const grafikSPM1 = new Chart(
            document.getElementById('grafikSPM1'),
            configBar
        );
</script>

 
