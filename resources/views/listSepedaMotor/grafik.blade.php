<script>
     $(function () {
                            var datas = JSON.parse('<?php echo $chart_data; ?>');
                            var SPMChartCanvas = document.getElementById('grafikSPM1').get(0).getContext('2d');

                            var barChartData = {
                                labels: datas.label,
                                datasets: [{
                                    data: datas.jumlah,
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
                                }]
                            };

                            var options = {
                                responsive : true,
                                title: {
                                    display: true,
                                    position: "top",
                                    text: "Jumlah Sepeda Motor Terjual - <?php echo $awal ?> s.d. <?php echo $akhir ?>"
                                    fontSize: 18,
                                },
                                legend: {
                                    display: true,
                                    position: "bottom",
                                    labels: {
                                        fontSize: 14
                                    }
                                }
                            };

                            var chart1 = new Chart(SPMChartCanvas, {
                                type: "bar",
                                data: barChartData,
                                options: options,
                            });
                        });
                    </script>

</script>