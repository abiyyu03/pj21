
const popularProfession = document.getElementById('popularProfession');
const StudentChart = document.getElementById('StudentChart');
const WorkerAndUnworkerChart = document.getElementById('WorkerAndUnworkerChart');

const baseURL = 'http://localhost/PHP-native-projects/pengolahan-data-penduduk/src';

$(document).ready(function(){
    $.ajax({
        url:baseURL+'/JumlahPekerjaTerbanyak.php',
        type:'GET',
        success: function(data){
            const parsedData = JSON.parse(data);
            const dataJumlah = [];
            const labelJumlah = [];
            
            parsedData.forEach(data => {
                dataJumlah.push(data.jumlah);
                labelJumlah.push(data.jenis_pekerjaan);
            });
            
            new Chart(popularProfession, {
                type: 'doughnut',
                backdropColor:'rgba(255, 12, 1, 0.75)',
                data: {
                    labels: labelJumlah,
                    datasets: [{
                        label: 'Pekerjaan Terbanyak',
                        backgroundColor: ["orange", "blue", "green", "red", "purple"],
                        data: dataJumlah
                    }]
                },
                options:{
                    responsive:true,
                    legend:{
                        position:'bottom'
                    },
                    plugins : {
                        datalabels:{
                            display:false
                        },
                    }
                }
            });
        }
    });
    
    $.ajax({
        url:baseURL+'/PelajarKota.php',
        type:'GET',
        success: function(data){
            const parsedData = JSON.parse(data);
            const dataJumlah = [];
            const labelJumlah = [];
            
            parsedData.forEach(data => {
                dataJumlah.push(data.jumlah);
                labelJumlah.push(data.kota_kabupaten);
            });
            
            new Chart(StudentChart, {
                type: 'bar', 
                data: {
                    labels: labelJumlah,
                    datasets: [{ 
                        backgroundColor: ["orange", "blue", "green", "red", "purple","gray"],
                        data: dataJumlah
                    }]
                },
                options:{
                    responsive:true,
                    legend:{
                        display:false,
                        position:'bottom'
                    },
                    plugins : {
                        datalabels:{
                            color:'#fff',
                            backgroundColor:'#000'
                        },
                    }
                }
            });
        }
    });
    
    $.ajax({
        url:baseURL+'/PerbandinganPekerjaDanTidak.php',
        type:'GET',
        success: function(data){
            const parsedData = JSON.parse(data);
            const dataJumlah = [];
            const labelJumlah = [];
            
            parsedData.forEach(data => {
                dataJumlah.push(data.jumlah_kerja);
                labelJumlah.push(data.jenis_gakerja);
            });
            
            new Chart(WorkerAndUnworkerChart, {
                type: 'pie',
                backdropColor:'rgba(255, 12, 1, 0.75)',
                data: {
                    labels: ['Bekerja','Tidak Bekerja'],
                    datasets: [{
                        backgroundColor: ["orange", "red"],
                        data: [parsedData[0].jumlah_kerja,parsedData[1].jumlah_gakerja]
                    }]
                },
                options:{
                    responsive:true,
                    legend:{
                        position:'bottom'
                    },
                    plugins : {
                        datalabels:{
                            formatter:(value,WorkerAndUnworkerChart) => {
                                let sum = 0;
                                const dataArray = WorkerAndUnworkerChart.chart.data.datasets[0].data;
                                dataArray.map(data => {
                                    sum += parseInt(data);
                                });
                                let percentage = (value * 100 / sum).toFixed(2)+"%";
                                return percentage;
                            },
                            color:'#fff',
                            backgroundColor:'#000'
                        },
                    }
                }
            });
        }
    });
});