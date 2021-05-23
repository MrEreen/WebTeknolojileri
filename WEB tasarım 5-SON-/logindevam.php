<!doctype html>
<html lang="en">

  <head>

	  

<!--fon-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
<!--fon-->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    
    <title></title>
  </head>
  <body>
	<div class="container">

    <!---Navbar-->

	<nav class="navbar navbar-expand-lg navbar sticky-top ">
		<div class="container-fluid">
		  <a class="navbar-brand" href="index.html">Ana Sayfa</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div>
		  <div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="login.html">Login</a>
			  </li>
			  
			  <li class="nav-item">
				<a class="nav-link" href="İlgiAlanlarım.html">İlgi Alanlarım</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Özgeçmiş.html">Özgeçmiş</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="Şehrim.html">Şehrim</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="Mirasımız.html">Mirasımız</a>
			  </li>
			  
			
			</ul>
			<div>
		  </div>
		</div>
	  </nav>

<!---Navbar-->

<header>

<h1 class="baslik" style="text-align:left" >Giriş</h1>

</header>

<main>

	
	<div class="container">
			
		<?php 

			include("kayıt.php");


			if (($_POST["email"] == $user) and ($_POST["şifre"] == $pass))
			{
			   $_SESSION["login"] = "true";
			   $_SESSION["user"] = $user;
			   $_SESSION["pass"] = $pass;
		
			   echo("HOŞGELDİNİZ   ");
			   echo $pass;
		
			}
		
			else 
			{
					echo "Kullancı Adı veya Şifre Yanlış.<br>";
					header("Refresh: 1; url=login.html");
			}
		
		?>
		
	</div>


</main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
	</div>


	
  </body>

</html>