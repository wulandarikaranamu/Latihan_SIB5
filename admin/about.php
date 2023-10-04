<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Static Navigation - SB Admin</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	    <link rel="stylesheet" href="css/font-awesome/css/all.min.css" />

        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Profil Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profil Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                <!DOCTYPE html>

<!-- ini adalah profil Merry Wulandari. S -->
  <?php 
	$Fullname = "Merry Wulandari. S";
	$alamat = "Mamuju, Sulawesi Barat";
	$email = "wulandari02@gmail.com";
	$no_hp = '+6285240591592';
  ?>

	<div class="container-fluid">
		<!-- Awal Header -->
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1 align="center">
						Haii  
						<small>Selamat Datang di Profil Merry Wulandari. S</small>
					</h1>
				</div>
			</div>
		</div>
		<!-- Akhir Header -->

		<!-- Awal Image -->
			</div><img alt="Bootstrap Image Preview" src="data:image/jpeg;base64,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">
			<blockquote class="blockquote">
				<p class="mb-0">
					Haii Semuanya ! Namaku Merry Wulandari. S, Dari Universitas Sulawesi Barat, Aku bercita-cita ingin menjadi seorang Fullstac Developer 
					<br>dan juga menjadi seorang Dosen. Ilmu yang aku pelajari ingin bisa aku bagikan dan bermanfaat bagi banyak orang. <br>
					Berikut ini adalah Data Diri saya :
				</p>
				<br>
			<div class="card" style="width: 18rem;">
  				<div class="card-header">
    			My Profil
  				</div>
  				<ul class="list-group list-group-flush">
   			    <li class="list-group-item"><?= $Fullname?></li>
    			<li class="list-group-item"><?= $alamat?></li>
    			<li class="list-group-item"><?= $email?></li>
				<li class="list-group-item"><?= $no_hp?></li>
  				</ul>
			</div>
            <br>
				<footer class="blockquote-footer">
					Merry Wulandari. S <cite>fullstack developer</cite>
				</footer>
			</blockquote>
		</div>
	</div>
	<!-- Akhir Image -->
	
	<!-- Awal Button -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				 
				<button type="button" class="btn btn-success" onclick="goToIndex()">
					Back
				</button>
			</div>
		</div>
	</div>
	<!-- Akhir Button -->
	<br>
	<br>
	<br>
	<br>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

	<script type="text/javascript">
		function goToIndex() {
		
			window.location.href = "index.php";

			alert("Anda akan diarahkan ke halaman Home.");
		}
	</script>
    </p>      
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
