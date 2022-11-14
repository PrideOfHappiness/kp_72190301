<script>
<!--Javascript Grafik --> 
<script> 
    $(function () {
        var SPMData = JSON.parse('<?php echo $data_chart; ?>');
        var SPMChartCanvas = $('grafikSPM').get(0).getContext('2d');
        var SPMData = {
            labels: SPMData.label,
            datasets: [
            {
                data: SPMData.jumlah,
                backgroundColor: [
                    '#f56954', 
                    '#00a65a', 
                    '#f39c12', 
                    '#00c0ef',  
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }
            ]
        }

    var options = {
        maintainAspectRatio : false,
        responsive : true,
    }

    var chart = new Chart(SPMChartCanvas,{
        type="pie",
        data: SPMData,
        options: options

    });

});
</script> 
</script>

