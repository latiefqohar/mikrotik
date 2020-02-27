<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mikrotik</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/admin/images/mikrotik.png">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/selectFX/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/assets/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="<?= base_url(); ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Waktu',  'rx', 'tx'],
          ['15detik yang lalu',  0, 0],
          ['10detik yang lalu',  0, 0],
          ['5detik yang lalu',  0, 0],
          ['sekarang',  0, 0]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' },
		  animation:{
				duration: 1000,
				easing: 'out',
			},
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
		var data_rx="";
		var data_tx="";
			
		setInterval(function(){
			getData()
		}, 5000);

		$('#interface').click(function(){
			getData()
		});

			function getData(){
				var option=$('#interface').val();
				// ajax
				$.ajax({
						url: 'http://localhost/mikrotik/Api/getRx', 
						type: 'get', 
						dataType: 'json', 
						success: function (result) {

							$.each(result, function (i, dataajax) { 


								if (dataajax.id == option) {
									var data4= dataajax.rx_byte /1000000;
									var data3=$('#data4').val();
									var data2=$('#data3').val();
									var data1=$('#data2').val();
									$('#data4').val(data4);
									$('#data3').val(data3);
									$('#data2').val(data2);
									$('#data1').val(data1);


									var data41=dataajax.tx_byte / 1000000;
									var data31=$('#data41').val();
									var data21=$('#data31').val();
									var data11=$('#data21').val();
									$('#data41').val(data41);
									$('#data31').val(data31);
									$('#data21').val(data21);
									$('#data11').val(data11);
									console.log($('#data1').val()+"data1");
									console.log($('#data2').val()+"data2");
									console.log($('#data3').val()+'data3');
									console.log($('#data4').val()+"data4");
									console.log('================================');
									data.setValue(0, 1,  $('#data1').val());
									data.setValue(1, 1,  $('#data2').val());
									data.setValue(2, 1,  $('#data3').val());
									data.setValue(3, 1,  $('#data4').val());
									data.setValue(0, 2,  $('#data11').val());
									data.setValue(1, 2,  $('#data21').val());
									data.setValue(2, 2,  $('#data31').val());
									data.setValue(3, 2,  $('#data41').val());
									chart.draw(data, options);
									
														}
							})
						}
					})
			}
		
      }

	 		 
    </script>

</head>

<body>


	  <input type="hidden" id="data1">
	  <input type="hidden" id="data2">
	  <input type="hidden" id="data3">
	  <input type="hidden" id="data4">
	  <input type="hidden" id="data11">
	  <input type="hidden" id="data21">
	  <input type="hidden" id="data31">
	  <input type="hidden" id="data41">
	  <input type="hidden" id="ether">

	<!-- Left Panel -->

	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">

			<div class="navbar-header">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
					aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="./"><img src="<?= base_url(); ?>assets/admin/images/mikrotik.png"
						alt="Logo"></a>
				<a class="navbar-brand hidden" href="./"><img src="<?= base_url(); ?>assets/admin/images/logo2.png"
						alt="Logo"></a>
			</div>

			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?= base_url(); ?>Api/resource"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
					</li>
					
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>IP</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-circle-o"></i></i><a href="<?= base_url(); ?>Api/dhcpClient">IP DHCP Client</a></li>
							<li><i class="fa fa-circle-o"></i><a href="<?= base_url(); ?>Api/dhcpServer">IP DHCP Server</a></li>
							<li><i class="fa fa-circle-o"></i><a href="<?= base_url(); ?>Api/ipHotspot">IP Hotspot</a></li>
							<li><i class="fa fa-circle-o"></i><a href="<?= base_url('Api/hotspotActive'); ?>">Hostspot Active</a></li>
							<li><i class="fa fa-circle-o"></i></i><a href="<?= base_url('Api/Lease'); ?>">Leases</a>
							</li>
							<!-- <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
							<li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
							<li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
							<li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
							<li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
							<li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
							<li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li> -->
						</ul>
					</li>
					<li class="menu-item dropdown">
						<a href="<?= base_url('Api/interface'); ?>" aria-haspopup="true"
							aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Interface</a>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Queue</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-circle-o"></i><a href="<?= base_url('Api/queueInterface'); ?>">Queue Interface</a></li>
							<li><i class="fa fa-circle-o"></i><a href="<?= base_url('Api/queueSimple'); ?>">Queue Simple</a></li>
						</ul>
					</li>

					
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</aside><!-- /#left-panel -->

	<!-- Left Panel -->

	<!-- Right Panel -->

	<div id="right-panel" class="right-panel">

		<!-- Header-->
		<header id="header" class="header">

			<div class="header-menu">

				<div class="col-sm-7">
					<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
				</div>

				<div class="col-sm-5">
					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<img class="user-avatar rounded-circle"
								src="<?= base_url(); ?>assets/admin/images/admin.jpg" alt="User Avatar">
						</a>

						<div class="user-menu dropdown-menu">
							<a class="nav-link" onclick="return confirm('Apakah Anda Yakin Akan keluar?')" href="<?= base_url('Api/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
						</div>
					</div>

				</div>
			</div>

		</header><!-- /header -->
		<!-- Header-->

		<div class="content mt-3">
