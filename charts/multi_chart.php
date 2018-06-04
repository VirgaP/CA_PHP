<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
    .pirmas {
        width:600px;
        float: left;
    }
    .antras {
        width: 600px;
        float: left;
        padding-left: 20px;
    }
    .clear {
        clear:both;
    }
    .trecias {
        float:left;
        width: 600px;
    }
</style>
</head>
<body>
    <div class="pirmas">
        <canvas id="myChart"></canvas>
    </div>
    <div class="antras">
        <canvas id="myChart2"></canvas>
    </div>
    <div class="clear"></div>
    <div class="trecias">
        <canvas id="myChart3"></canvas>
    </div>
    <div class="ketvirtas">
        <canvas id="myChart4"></canvas>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script>
    var data = {
        labels: [
            'Rokas Jovaiša', 
            'Marius Graževičius', 
            'Audrius Kalašnikovas', 
            'Mindaugas Stankus', 
            'Laimutis Kukauskas', 
            'Liucijus Malijonis', 
            'Karolis Maslininkovas', 
            'Deividas Baranauskas', 
            'Lukaš Vašina',
            'Ramūnas Peleckas'],
        datasets: [{
            label: ['Vilnius'],
            data: [0, 0, 13.58, 39.14, 9.10, 11.31, 0, 53.12, 0, 13.02],
            borderWidth: 3,
            fill: false,
            borderColor: '#ff9999'
        },{
            label: ['Druskininkai'],
            data: [169.17, 130.93, 109.60, 95.83, 86.03, 78.59, 72.69, 67.85, 63.80, 60.33],
            borderWidth: 3,
            fill: false,
            borderColor: '#99ff99'
        },{
            label: ['Kaunas'],
            data: [0, 6.89, 7.27, 0.00, 43.41, 0, 0, 5.14, 0, 5.25],
            borderWidth: 3,
            fill: false,
            borderColor: '#9999ff'
        },{
            label: ['Stovykla'],
            data: [0, 0, 16.22, 5.31, 16.96, 19.52, 0, 0, 0, 76.34],
            borderWidth: 3,
            fill: false,
            borderColor: '#FF99FF'
        },{
            label: ['Stovykla'],
            data: [0, 129.17, 22.33, 37.5, 11.47, 5.34, 0, 13.32, 0, 1.17],
            borderWidth: 3,
            fill: false,
            borderColor: '#FFFF99'
        },{
            label: ['Dubingiai'],
            data: [7.46, 18.4, 3.63, 0, 4.24, 10.85, 0, 0, 0, 0],
            borderWidth: 3,
            fill: false,
            borderColor: '#99FFFF'
        }]
    };
    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
    };
    
    new Chart(document.getElementById("myChart").getContext('2d'), {
        type: 'line',
        data: data,
        options: options
    });
    
    new Chart(document.getElementById("myChart2").getContext('2d'), {
        type: 'bar',
        data: data,
        options: options
    });
    
    new Chart(document.getElementById("myChart3").getContext('2d'), {
        type: 'radar',
        data: data,
        options: options
    });
    
    </script>
</body>
</html>