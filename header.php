<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
</head>
<body>

	<header class="container p-2 my-2">
		
		<section class="row m-2">
			<form class="col-4 row">

				<div class="col-9">
					<input type="email" name="email" class="form-control" placeholder="Enter Your Email">
				</div>

				<div class="col-3">
					<button type="submit" class="btn btn-outline-dark ">Subscribe</button>
				</div>
				
			</form>
			<div class="col-4 text-center">
				<?php 

				// defines logo image source
				
				if(function_exists("the_custom_logo")){
					$custom_logo_id=get_theme_mod("custom_logo");
					$logo=wp_get_attachment_image_src($custom_logo_id);
				} 
				?>
				<!-- adds img src to img -->
				<img src="<?php echo $logo[0]; ?>" alt="Povo News Logo" title="Povo News Logo" class="col-3">
			</div>
			<div class="col-4 row justify-content-center">
				<i class="fa-brands fa-twitter fa-xl col-1"></i>
				<i class="fa-brands fa-facebook fa-xl col-1"></i>
				<i class="fa-brands fa-linkedin fa-xl col-1"></i>
				<i class="fa-brands fa-instagram fa-xl col-1"></i>
			</div>

		</section>

		<section class="p-2">
			<h2 class="text-center">Visualize World Data</h2>
		</section>

		<section class="row p-2">
			<ul class="col-10 row row-cols-6 list-unstyled text-center">
				<li class="nav-item">
					<a href="#">Home</a>
				</li>
				<li class="nav-item">
					<a href="#">Society</a>
				</li>
				<li class="nav-item">
					<a href="#">People</a>
				</li>
				<li class="nav-item">
					<a href="#">Nature</a>
				</li>
				<li class="nav-item">
					<a href="#">Store</a>
				</li>
				<li class="nav-item">
					<a href="#">About</a>
				</li>
			</ul>
			<form class="col-2">
				<input type="search" name="query" class="form-control" placeholder="Search">
			</form>
		</section>

	</header>

	<hr>