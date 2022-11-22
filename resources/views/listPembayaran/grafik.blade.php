<!DOCTYPE html>
<html lang="en">
<head>
    @include('template/header')
    <title>Hasil Rekap Data Moda Pembayaran</title>
</head>
<body>
@include('template/navbar')
@include('template/sidebar')

<section class="content">
   <div class="container-fluid" >
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"> Hasil Pencarian Data Performa Sales Secara Keseluruhan </h3>
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
    var chartData = JSON.parse('<?php echo $chartTotal; ?>'); 
    const data = {
        labels: chartData.label,
        datasets: [{
            label: "Jumlah Data",
            data: chartData.count,
            backgroundColor: [
                '#212f3c',
            ],
            borderColor: [
                'rgba(255, 0, 255, 1)',
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
                    x: {
                        title: {
                            display: true,
                            text: 'Moda Pembayaran'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true, 
                            text: 'Jumlah Data'
                        }
                    }
                }
        }
    };

    const grafikSPM1 = new Chart(
        document.getElementById('grafikSPM1'),
        configBar
    );
</script>


