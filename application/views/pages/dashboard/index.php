<?php date_default_timezone_set('Asia/Jakarta');
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" style="color: black">Data : <?php echo date("M, d Y | D"); ?></h5>
          <h6 class="card-subtitle"> </h6>
          <div class="row">
            <div class="col-sm-6">
              <a href="<?php echo base_url('total_user') ?>">
                <div class="card">
                  <div class="card-body" style="background-color: #228B22">
                    <h1 class="font light text-dark text-center"><?php echo count(@$total_user) ?></h1>
                    <p class="text-center text-dark"><b>Total User</b></p>
                    <span></span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="#">
                <div class="card">
                  <div class="card-body" style="background-color: #228B22">
                    <h1 class="font light text-dark text-center"><?php echo count(@$total_device) ?></h1>
                    <p class="text-center text-dark"><b>Total Device</b></p>
                    <span></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
            <!-- Konten Kiri -->
            </div>
            <div class="col-md-8">
              <div class="card">
                <div class="center">
                  <div id="survey_grafik" style="min-width: 300px; min-height: 500px; margin: 0 auto"></div>
                </div>
              </div>
            </div>
            <div class="col-md-2">
            <!-- Konten Kanan -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url();?>assets/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/highcharts-more.js"></script>
<script src="<?php echo base_url();?>assets/highcharts/exporting.js"></script>
<!-- end load library -->

<script type="text/javascript">          
    //document.getElementById("grafik2").innerHTML =" " + day + " " + months[month];	
	
	$(function () {
	var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
	
    Highcharts.chart('survey_grafik', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Hasil Survey'
    },
    subtitle: {
        //text: "<h1>Bulan </h1>" + months[month]
    },
    xAxis: {
        categories:
						<?php echo json_encode($grafik_survey);?>,
        title: {
            text: "Pilihan Survey"
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        //valueSuffix: ' Kg'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: '',
        data: <?php echo json_encode($grafik_total);?>, color: '#228B22'
    }, /*{
        name: 'Year 1900',
        data: [133, 156, 947, 408, 6]
    }, {
        name: 'Year 2012',
		data: [1052, 954, 4250, 740, 38]
    }*/]
	});
});
</script>