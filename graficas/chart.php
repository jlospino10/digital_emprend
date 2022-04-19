 
<body >
<?
 
 
  include("../home.php");
    $creator=$_SESSION['full_name'];
require "db.php";// Database connection
$query="SELECT s.name , COUNT(s.name) as total , s.name as estado from users u, status s where u.id_status = s.id_status and u.creator='$creator' GROUP by s.name";
$step=$dbo->prepare($query);
if($step->execute()){
$php_data_array=$step->fetchAll();
//print_r($php_data_array);
//echo json_encode($php_data_array);
echo "<script>
var my_2d=".json_encode($php_data_array)."
</script>";
//Transfor PHP array to JavaScript two dimensional array
}else{
   print_r($step->errorInfo());
}
?>



 
  
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Apex Chart</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Chart</a></li>
                            <li class="breadcrumb-item">Apex Chart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ variant-chart ] start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Estados de clientes</h5>
                    </div>
                    <div class="card-body">
                         <div id="chart_div"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Estados de clientes</h5>
                    </div>
                    <div class="card-body">
                                     <div id=" "></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar-chart-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar chart horizontal</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar-chart-3"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pie Charts</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie-chart-1" style="width:100%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pie Charts donut</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie-chart-2" style="width:100%"></div>
                    </div>
                </div>
            </div>
            <!-- [ variant-chart ] end -->

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

 
  
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'estado');
        data.addColumn('number', 'total');
for(i=0;i<my_2d.length;i++)
data.addRow([my_2d[i][0],parseInt(my_2d[i][1])]);

// above row adds the JavaScript two dimensional array data into required chart format
  var options = {
                chart: {
                    height: 320,
                    type: 'donut',
                },
                series: [44, 55, 41, 17, 15],
                colors: ["#7267EF", "#0e9e4a", "#3ec9d6", "#ffa21d", "#EA4D4D"],
                legend: {
                    show: true,
                    position: 'bottom',
                },
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                show: true,
                                name: {
                                    show: true
                                },
                                value: {
                                    show: true
                                }
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    dropShadow: {
                        enabled: false,
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            }

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      
       
            chart.render();
             }
       
</script>
</html>
