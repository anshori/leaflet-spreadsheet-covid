<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="unsorry">

    <?php include 'data/dashboard.php'; ?>
    <?php include 'data/total.php'; ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <link href="https://unsorry.net/assets-date/images/favicon.png" rel="shortcut icon" type="image/png">

    <title><?php echo $judul_tab; ?></title>
  </head>
  <body>
    <!-- Modal Info -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header alert-info">
            <h5 class="modal-title" id="exampleModalCenterTitle"><b><?php echo $instansi;?></b></h5>
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
    <div class="modal fade" id="featureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
	      <a class="navbar-brand" href="#">
	      	<b><?php echo $navbar_icon; ?> <?php echo $judul_navbar; ?></b>
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarNav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item">
	            <a class="nav-link" href="#" data-toggle="modal" data-target="#infoModal"><i class="fas fa-info-circle"></i> Info</a>
	          </li>
	        </ul>
	      </div>
	    </nav>
	    <!-- End of Topbar -->

    	<!-- Map Content -->
    	<div id="map" class="card border-primary shadow m-2"></div>

    	<!-- Total Data Content -->
    	<div class="card shadow text-white bg-dark m-2 p-4">
		    <div class="row text-center">
		    	<div class="col-sm card border-light bg-dark m-2">
		    		<div class="row p-2">
		          <div class="col">
		            <strong>TOTAL POSITIF</strong>
		          </div>
		        </div>
		        <div class="row pb-2">
		          <div class="col">
		            <strong><?php echo number_format($totalpositif); ?></strong>
		          </div>
		        </div>
		    	</div>
		    	<div class="col-sm card border-light bg-dark m-2">
		    		<div class="row p-2">
		          <div class="col">
		            <strong>TOTAL ODP</strong>
		          </div>
		        </div>
		        <div class="row pb-2">
		          <div class="col">
		            <strong><?php echo number_format($totalodp); ?></strong>
		          </div>
		        </div>
		    	</div>
		    	<div class="col-sm card border-light bg-dark m-2">
		    		<div class="row p-2">
		          <div class="col">
		            <strong>TOTAL PDP</strong>
		          </div>
		        </div>
		        <div class="row pb-2">
		          <div class="col">
		            <strong><?php echo number_format($totalpdp); ?></strong>
		          </div>
		        </div>
		    	</div>
		    </div>
		    <div class="row text-center">
		    	<div class="col-sm card border-light text-warning bg-dark m-2">
		    		<div class="row p-2">
		          <div class="col">
		            <strong>DIRAWAT</strong>
		          </div>
		        </div>
		        <div class="row pb-2">
		          <div class="col">
		            <strong><?php echo number_format($totaldirawat); ?></strong>
		          </div>
		        </div>
		    	</div>
		    	<div class="col-sm card border-light text-success bg-dark m-2">
		    		<div class="row p-2">
		          <div class="col">
		            <strong>SEMBUH</strong>
		          </div>
		        </div>
		        <div class="row pb-2">
		          <div class="col">
		            <strong><?php echo number_format($totalsembuh); ?></strong>
		          </div>
		        </div>
		    	</div>
		    	<div class="col-sm card border-light text-danger bg-dark m-2">
		    		<div class="row p-2">
		          <div class="col">
		            <strong>MENINGGAL</strong>
		          </div>
		        </div>
		        <div class="row pb-2">
		          <div class="col">
		            <strong><?php echo number_format($totalmeninggal); ?></strong>
		          </div>
		        </div>
		    	</div>
		    </div>
	    </div>

    	<!-- Table Content -->
    	<div id="table"></div>
    </div>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/rbush@2.0.2/rbush.min.js"></script>
    <script src="https://unpkg.com/labelgun@6.1.0/lib/labelgun.min.js"></script>
    <script src="assets/plugins/leaflet-label/labels.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php include 'assets/js/app.php';?>
  </body>
</html>