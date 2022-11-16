<body>
    <div class="card-body"> 
        <canvas id="persentaseSPM"></canvas>
    </div>
</body>

<script>
$(function () { 
    var chartData2 = JSON.parse('<?php echo $chart_data; ?>');
    var canvas2 = $('#grafikSPM2').get(0).getContext('2d')

    var chartData2 = {
        labels: chartData2.label,
        datasets: [{
            label: "Persentase Data (%)",
            data: chartData2.jumlah,
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
                '#28b463',
                '#212f3c',
                '#388e3c',
                '#ff7043',
                '#ff8f00',
                '#2c3e50',
                '#6e2c00',
                '#27ae60',
                '#2471a3'.
                '#d35400',
                '#52be80',
                '#1abc9c',
                '#922b21',
                '#641e16',
                '#909497',
                '#af601a',
                '#212f3c',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
                borderWidth: 1
            }
        ]
    }

    var options2 = {
        maintainAspectRatio : true,
        responsive : true,
        cutoutPercentage: 80,
        plugins: {
            labels: {
                render: 'percentage',
                precision: 0,
                showZero: true,
            }
        }
    }

    var chart2 = new Chart(canvas2, {
        type: 'doughnut',
        data: chartData2,
        options: options2
        })
})
</script>

//Grafik SPM 2 (Donut Chart => Persentase)
        var canvas2 = $('#persentaseSPM').get(0).getContext('2d')
        var pieData = chartDatas;

        var options2 = {
            maintainAspectRatio : true,
            responsive : true,
            cutoutPercentage: 80,
            plugins: {
                labels: {
                    render: 'percentage',
                    precision: 0,
                    showZero: true,
                }
            }
        }

        var chart2 = new Chart(canvas2, {
            type: 'doughnut',
            data: pieData,
            options: options2
            })