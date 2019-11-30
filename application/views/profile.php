<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Hello, Ade Rizki Wiranto</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Start Bootstrap</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-light" href="#">Action</a>
							<a class="dropdown-item text-light" href="#">Another action</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#">Link baru</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="container">
			<br>
			<br>
			<img src="<?php echo base_url('assets/images/profile-pict.png');?>" alt="" class="w-25 rounded-circle">
			<h1 class="display-4">Ade Rizki Wiranto</h1>
			<p class="lead">Training Web Developer with Codeigniter and Bootstrap</p>
			<hr class="my-4">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quia fugiat nulla impedit ullam. Dolorum
				magni quas numquam, voluptate delectus praesentium. Rem nihil veniam voluptatibus veritatis perferendis
				cum unde nam!</p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</div>
	</div>
	<div class="container text-center">
		<div class="row">
			<div class="col-sm">
				<h2>About</h2>
				<p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores quis saepe ab
					itaque ducimus, ut
					quod corporis aspernatur inventore corrupti ratione molestiae quo dicta provident sunt doloribus
					minus labore error.</p>
			</div>
			<div class="col-sm">
				<h2>Experience</h2>
				<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aut
					mollitia. Praesentium
					exercitationem libero nobis quaerat similique! Minus consequuntur facere error deleniti ipsa
					doloremque, illo beatae illum recusandae porro maiores!</p>
			</div>
		</div>
	</div>
	<footer class="py-1 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
		</div>
		<!-- /.container -->
	</footer>
	<!-- Optional JavaScript -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>