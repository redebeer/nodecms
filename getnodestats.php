<?php
#NOTE : php mysql code on chart page needs to be completed
session_start();
if ($_SESSION['logged'] == TRUE){
  require ('include/style.php');
  require ('include/dbsettings.php');
  ?>
  <br><br>
  <h3>Node Stats</h3><br>
<div class="grid">
    <div class="container text-center">
    <form id="dateSearch" action="getnodestats.php" method="get">
        <div class="row">
        
        
            <!--Grid column-->
            <div class="col-md-5">

                <div class="md-form">
                <input placeholder="Selected date" type="text" id="datefrom" name="datefrom" class="form-control datepicker">
                    <label for="date-picker-example">Start date</label>
                </div>
 
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5">

               <div class="md-form">
                <input placeholder="Selected date" type="text" id="dateto" name="dateto" class="form-control datepicker">
                    <label for="date-picker-example">End date</label>
                </div>

            </div>

            <div class="col-md-2">
            <input type="hidden" name="node" id="hiddenField" value="<?php echo $_GET['node'] ?>" />
                <button type="submit" value="Submit">Go</button>

                </div>
            <!--Grid column-->
        
        </div>
        
        </form>
        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                 <canvas id="statChart1" ></canvas>
            
                
                <?php
                /*#for testing purpose
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
                //print_r($statarrL);
                //print_r($statarrD);

                //foreach ($statarrL as &$value){echo $value .', ';}
                //foreach ($statarrD as &$value){echo $value .', ';}

                */?>
            </div>

        </div>
    </div>
</div>



<?php
require ('include/footer.php');
}
?>
 
 

