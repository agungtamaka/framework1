<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Halaman About</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Agung Surya Tamaka</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo site_url(); ?>/home">Home</a></li>
								<li class="active"><a href="<?php echo site_url(); ?>/about">About</a></li>
								<li><a href="<?php echo site_url(); ?>/contact">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				
				<div class="jumbotron">
					<div class="container">
						<h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Agung Surya Tamaka</h1>
						
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<h3><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Teknik Informatika '15</h3>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<h3><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Sumberjo RT 02 / 09, Sanankulon, Blitar</h3>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<h3><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Politeknik Negeri Malang</h3>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<h3><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Maret, 1997</h3>
						</div>
				
					</div>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h1>Sekilas Tentang</h1>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p align="justify">Nama saya Agung Surya Tamaka, biasa dipanggil Tamaka. Saya adalah anak pertama sekaligus anak terakhir dari 1 bersaudara. Saya berasal dari Blitar. Saya lahir pada tanggal 23 Maret 1997. Hobi saya sepak bola. Saat ini saya kuliah di Politeknik Negeri Malang. Saya kuliah di Jurusan Teknologi Informasi, Program Studi Teknik Informatika. Sekian tentang saya. </p>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>