<?php 
require_once "function.php"; 
$username = $_POST['username'];
$password = md5($_POST['password']);

if (ISSET($Username) && ISSET($Password))
{
	$cekuser = "select * from enkripsi where username = '$psername' and password = '$password'";
	$cekuser_query = mysql_query($cekuser);
	$countuser = mysql_num_rows($cekuser_query);

	if ($countuser >= 1)
		{
			// echo "usernya ada";
			$login = 1;
			$_SESSION['login'] = $username ;
			header("location: user.php");
		}

	else
		{
			// echo "usernya tidak ada";
			$login = 0;
		}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home SPBU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Asik Surabaya</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">SPBU</a></li>
			  <li><a href="#hotel">Hotel</a></li>
              <li><a href="#sport">Sport Center</a></li>
			  <li><a href="#kuliner">Kuliner</a></li>
			  <li><a href="#bengkel">Bengkel</a></li>
				<form class="navbar-form pull-right">
				<input class="span2" type="text" placeholder="Username" value="<?php echo $_POST['username']?>">
				<input class="span2" type="password" placeholder="Password" value="<?php echo $_POST['password']?>">
				<button type="submit" class="btn">Sign in</button>
				</form>
        </div>
      </div>
    </div>
			
		<ul class="nav">
		<li class="active">
		<a href="#">Beranda</a>
		</li>
		<li><a href="#">Pencarian</a></li>
		</ul>


    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Sistem Informasi SPBU</h1>
        <p>Sistem Informasi SPBU berisi informasi mengenai SPBU yang ada di Surabaya. Mulai dari lokasi SPBU hingga fasilitas yang dimiliki. Sistem Informasi ini akan memudahkan bagi Anda yang sedang mencari SPBU terdekat dari lokasi Anda saat itu.</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>SPBU 51.601.65</h2>
          <p> Jl. Raya Jemursari No. 113-123 </p>
		  </p> Surabaya, Jawa Timur, Indonesia </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>SPBU 51.601.66</h2>
          <p>Jl. Dupak No. 15 </p>
		  </p>Surabaya, Jawa Timur, Indonesia </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>SPBU 51.601.77</h2>
          <p>Jl. Dr. Soetomo </p>
		  </p>Surabaya, Jawa Timur, Indonesia</p>
          <p><a class="btn" href="http://localhost:8080/bootstrap-2.3.2%20Original/docs/File_HTML/Informasi_SPBU1.html">View Detail &raquo; </a></p>
        </div>
      </div>

      <hr>

      <footer>
		<p>&copy; Putri Kharisma 2015</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
