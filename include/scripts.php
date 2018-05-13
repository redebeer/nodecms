<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/mdb/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/mdb/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb/mdb.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--<script type="text/javascript">
    $(document).on('ready', function(){
    $('#my-login').modal('show');
});-->

<script>



//bar
var ctxB = document.getElementById("actChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        labels: ["St_Chris", "St_bern", "St_craggy", "St_pete"],
        datasets: [{
            label: 'Total Node Activity - 24H',
            data: [5, 19, 3, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


//bar
var ctxB = document.getElementById("datChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        labels: ["St_Chris", "St_bern", "St_craggy", "St_pete"],
        datasets: [{
            label: 'Total Node Data Usage - 24H',
            data: [1, 5, 9, 17],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

//doughnut
var ctxD = document.getElementById("onlineChart").getContext('2d');
var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
        labels: ["Offline", "Online"],
        datasets: [
            {
                data: [1, 3],
                backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
            }
        ]
    },
    options: {
        responsive: true
    }    
});

</script>

<script>
                <?php
                $statarrL=array();
                $statarrD=array();
                $result = mysqli_query($db,"SELECT log_date,SUM(data) as data FROM logs  where node = '".$_GET['node']."' GROUP BY log_date");
                    while($row = mysqli_fetch_array($result))
                    {
                        $date_arr = explode(' ', $row['log_date'], -1 );
                        array_push($statarrL,$date_arr[0]);
                    array_push($statarrD,$row['data']);
                    //echo 'date is '.$row['log_date'].' size '.$row['data'].'</br>';

                    }
               // print_r($statarrL);
               // print_r($statarrD);  
                //$statL_length = count($statarrL);
                //$statD_length = count($statarrD);
                ?>                
//bar
var ctxB = document.getElementById("statChart1").getContext('2d');
var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
        
        labels: [
            <?php 
                foreach ($statarrL as &$value){echo '"'.$value .'", ';}
                ?>
            
            ],
        datasets: [{
            label: 'Node Stat Activity',
            data: [
                <?php 
                foreach ($statarrD as &$value){echo '"'.$value .'", ';}
                ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


</script>

<script>

	 $( function() {
    $( "#datefrom" ).datepicker();
    $( "#dateto" ).datepicker();
  } );
  </script>

<script>
// Data Picker Initialization
$('.datepicker').pickadate();

</script>