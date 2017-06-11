<!doctype html>

<html>

  <head>

    <title>Google Chart: Scatter Chart with a line</title>

    <meta charset="UTF-8" />

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">

      google.load("visualization", "1", { packages: ["corechart"] });

      google.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([

          ['X', 'Points', 'Line'],

          [90, 3, 2],

          [70, 5, 2],

          [65, 1, 3],

          [60, 2, 4],

          [60, 12, 5],

          [75, 1, 6]

        ]);



        var options = {

          

          

          series: {

            1: { lineWidth: 2, pointSize: 0 }

          }

        };



        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);

      }

    </script>

  </head>

  <body>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>

  </body>

</html>