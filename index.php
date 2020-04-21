<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="author" content="unsorry">

	<?php
    	include 'data/dashboard.php';
    	include 'data/total.php';
    ?>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	<!-- Leaflet CSS -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
	<link rel="stylesheet" href="assets/css/app.css">

	<link href="https://unsorry.net/assets-date/images/favicon.png" rel="shortcut icon" type="image/png">


	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">

	<!-- Morris chart -->
	<link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">



	<title><?= $judul_tab; ?></title>
</head>

<body>
	<!-- Modal Info -->
	<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header alert-info">
					<h5 class="modal-title" id="exampleModalCenterTitle"><b><?= $instansi;?></b></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
			<?php
            	echo '<table class="table table-borderless">'.
            	'<tr><td><i class="fas fa-home"></i></td><td>'. $alamat .'</td></tr>'.
            	'<tr><td><i class="fas fa-envelope"></i></td><td>'. $email .'</td></tr>'.
            	'<tr><td><i class="fas fa-phone-square-alt"></i></td><td>'. $telepon .'</td></tr>'.
            	'</table>';
            ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Modal Info -->

	<!-- Modal Feature -->
	<div class="modal fade" id="featureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header alert-info">
					<h5 class="modal-title text-primary" id="feature-title"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="feature-info"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Modal Feature -->

	<div class="container-fluid">
		<!-- Topbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container-xl">
				<a class="navbar-brand" href="#">
					<b><?= $navbar_icon; ?> <?= $judul_navbar; ?></b>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#infoModal"><i
									class="fas fa-info-circle"></i> Info</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End of Topbar -->

		<!-- Map Content -->
		<div class="container-xl">
			<div id="map" class="card border-primary shadow m-2"></div>
		</div>


		<!-- Total Data Content -->
		<div class="container-xl">
		<div class="card shadow text-white bg-dark m-2 p-4">


			<div class="row">
				<div class="col-sm m-2">
					<div class="small-box bg-red">
						<div class="inner">
							<h3><?= number_format($totalpositif); ?></h3>

							<p><?= $judul_total_positif; ?></p>
						</div>
						<div class="icon">
							<i class="ion ion-android-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-sm  m-2">
					<div class="small-box bg-blue">
						<div class="inner">
							<h3><?= number_format($totalpositif); ?></h3>

							<p><?= $judul_total_odp; ?></p>
						</div>
						<div class="icon">
							<i class="ion ion-android-people"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-sm  m-2">
					<div class="small-box bg-blue">
						<div class="inner">
							<h3><?= number_format($totalpdp); ?></h3>

							<p><?= $judul_total_pdp; ?></p>
						</div>
						<div class="icon">
							<i class="ion ion-android-people"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-sm  m-2">
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?= number_format($totaldirawat); ?></h3>

							<p><?= $judul_total_dirawat; ?></p>
						</div>
						<div class="icon">
							<i class="ion ion-android-person-add"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-sm  m-2">
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?= number_format($totalsembuh); ?></h3>

							<p><?= $judul_total_sembuh; ?></p>
						</div>
						<div class="icon">
							<i class="ion ion-android-contacts"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-sm  m-2">
					<div class="small-box bg-secondary">
						<div class="inner">
							<h3><?= number_format($totalmeninggal); ?></h3>

							<p><?= $judul_total_meninggal; ?></p>
						</div>
						<div class="icon">
							<i class="ion ion-android-remove-circle"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>



	<!-- Table Content -->
	<div class="container-xl">
	<div class="card border-primary shadow m-2 p-3">
		<div class="alert alert-dark text-center">
			<h4><strong><?= $judul_tabel;?></strong></h4>
		</div>
		<div class="table-responsive">
			<table id="dataTable" class="table table-striped table-bordered">
				<thead>
					<tr class="alert-primary text-dark text-center">
						<th>No</th>
						<th>Kecamatan</th>
						<th class="">Positif</th>
						<th class="">ODP</th>
						<th class="">PDP</th>
						<th class="">Dirawat</th>
						<th class="">Sembuh</th>
						<th class="">Meninggal</th>
					</tr>
				</thead>
				<tbody>
					<?php
              	$rowCount = 0;
                $dataHandle = fopen($dataSpreadsheetUrl, "r");
						    // while CSV has data
						    while (($row = fgetcsv($dataHandle, 0, ",")) !== FALSE)
						    {
						      $rowCount++;
						      if ($rowCount == 1) { continue; } // skip the first/header row of the CSV

						      $i = 0;
						      $no = $row[$i++];
						      $kecamatan = $row[$i++];
						      $positif = $row[$i++];
						      $odp = $row[$i++];
						      $pdp = $row[$i++];
						      $dirawat = $row[$i++];
						      $sembuh = $row[$i++];
						      $meninggal = $row[$i++];

						      echo '<tr>'.
                  '<td class="text-center">'. $no .'</td>'.
                  '<td>'. $kecamatan .'</td>'.
                  '<td class="text-right">'. $positif .'</td>'.
                  '<td class="text-right">'. $odp .'</td>'.
                  '<td class="text-right">'. $pdp .'</td>'.
                  '<td class="text-right">'. $dirawat .'</td>'.
                  '<td class="text-right">'. $sembuh .'</td>'.
                  '<td class="text-right">'. $meninggal .'</td>'.
                  '</tr>';
						      
						    } // end while, loop through CSV data

						    fclose($dataHandle); // close the CSV file handler
              ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
	<footer class="bg-dark text-white">
		<div class="row mx-auto py-1">
			<div class="col text-left px-3">
				<small>Update data: <?= $tanggalupdatedata;?></small>
			</div>
			<div class="col text-right px-3">
				<small><?= $attribution;?></small>
			</div>
		</div>

	</footer>
	</div>

	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
	<script src="https://unpkg.com/rbush@2.0.2/rbush.min.js"></script>
	<script src="https://unpkg.com/labelgun@6.1.0/lib/labelgun.min.js"></script>
	<script src="assets/plugins/leaflet-label/labels.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<?php include 'assets/js/app.php';?>
</body>

</html>