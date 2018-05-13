
<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="js/smoothie.js"></script>
    <script type="text/javascript">
      // NOTE : this is used for illustration purposes on node info page
      // Randomly add a data point every 500ms
      var random = new TimeSeries();
      setInterval(function() {
        random.append(new Date().getTime(), Math.random() * 10000);
      }, 500);
      
      function createTimeline() {
        var chart = new SmoothieChart({millisPerPixel:100,grid:{fillStyle:'transparent'},labels:{disabled:true}})
        chart.addTimeSeries(random, { strokeStyle: 'rgba(0, 255, 0, 1)', fillStyle: 'rgba(0, 255, 0, 0.2)', lineWidth: 2 });
        chart.streamTo(document.getElementById("chart"), 500);
      }
    </script>
  </head>
  <body onload="createTimeline()">

    <canvas id="chart" width="100" height="20"></canvas>

  </body>
</html>


