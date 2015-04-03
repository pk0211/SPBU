<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Posting</title>
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
            <p class="navbar-text pull-right">
              <a href="#" class="navbar-link">Username</a>
            </p>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">SPBU</a></li>
			  <li><a href="#hotel">Hotel</a></li>
              <li><a href="#sport">Sport Center</a></li>
			  <li><a href="#kuliner">Kuliner</a></li>
			  <li><a href="#bengkel">Bengkel</a></li>
			  </div>
        </div>
      </div>
    </div>
	
		<ul class="nav">
		<li class="active">
		<a href="#">Beranda</a>
		</li>
		<li><a href="#">Pencarian</a></li>
		<li><a href="#">Posting</a></li>
		</ul>
		</div>
		<hr>

		
	<form action="action_input.php" method="POST" enctype="multipart/form-data">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="40">&nbsp;</td>
			<td>&nbsp;</td>
			<td><font size="4" color="blue"><b>Menambah Informasi SPBU</b></font></td>
		</tr>
		<tr>
			<td height="36"></td>
			<td><a href="view_data.php" target="_blank" style="text-decoration:none">View Data</a></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>Kode SPBU</td>
			<td><input type="text" name="Kode SPBU" size="12"></td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>Lokasi</td>
			<td><input type="text" name="Lokasi" size="30"></td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>Fasilitas</td>
			<td><input type="text" name="Fasilitas" size="30"></td>
		</tr>
		<tr>
			<td height="40">&nbsp;</td>
			<td>Produk</td>
			<td><input type="text" name="Produk" size="60"></td>
		</tr>
		<tr>
			<td height="36">&nbsp;</td>
			<td>Jam Operasional</td>
			<td><input type="text" name="Jam Operasional" size="12"></td>
		</tr>
		<tr>
			<td height="60">&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Posting">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
		</table>
	</form>

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
