<html>
<head>
	<title>Zen Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="row d-flex justify-content-center ">
		<div class="col-md-9 bg-light p-0">
			<!-- Menu-->
			<?php
				include "include/menu.php";
			?>
			<!-- End Menu-->

			<!-- Header-->
			<?php
				include "include/page/header.php";
			?>
			<!-- End Header-->



			<!-- Main/Kontent -->

			<?php
				error_reporting(1);
				if ($_GET['page']=='about') {
					include "include/page/about.php";
				}

				elseif ($_GET['page']=='signup') {
					include "include/page/sign_up.php";
				}

				elseif ($_GET['page']=='home') {
					include "include/page/services.php";
				}

				else {
					include "include/page/services.php";
				}
			?>
			
			<!-- End Main/Kontent -->



			<!-- Footer-->
			<?php
				include "include/page/footer.php";
			?>
			<!-- End Foter-->
		</div>	
	</div>
	
	
</body>
</html>