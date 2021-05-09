<?php
  $data_beef = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Beef');
  $category_beef = json_decode($data_beef, true);

  $data_breakfast = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Breakfast');
  $category_breakfast = json_decode($data_breakfast, true);

  $data_chicken = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Chicken');
  $category_chicken = json_decode($data_chicken, true);

  $data_dessert = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Dessert');
  $category_dessert = json_decode($data_dessert, true);

  $data_goat = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Goat');
  $category_goat = json_decode($data_goat, true);

  $data_lamb = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Lamb');
  $category_lamb = json_decode($data_lamb, true);

  $data_miscellaneous = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Miscellaneous');
  $category_miscellaneous = json_decode($data_miscellaneous, true);

  $data_pasta = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Pasta');
  $category_pasta = json_decode($data_pasta, true);

  $data_pork = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Pork');
  $category_pork = json_decode($data_pork, true);

  $data_seafood = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood');
  $category_seafood = json_decode($data_seafood, true);

  $data_side = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Side');
  $category_side = json_decode($data_side, true);

  $data_starter = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Starter');
  $category_starter = json_decode($data_starter, true);

  $data_vegan = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Vegan');
  $category_vegan = json_decode($data_vegan, true);

  $data_vegetarian = file_get_contents('https://www.themealdb.com/api/json/v1/1/filter.php?c=Vegetarian');
  $category_vegetarian = json_decode($data_vegetarian, true);

  //var_dump($menu["meals"][0]["strMeal"]);

  $category_beef = $category_beef["meals"];
  $category_breakfast = $category_breakfast["meals"];
  $category_chicken = $category_chicken["meals"];
  $category_dessert = $category_dessert["meals"];
  $category_goat = $category_goat["meals"];
  $category_lamb = $category_lamb["meals"];
  $category_miscellaneous = $category_miscellaneous["meals"];
  $category_pasta = $category_pasta["meals"];
  $category_pork = $category_pork["meals"];
  $category_seafood = $category_seafood["meals"];
  $category_side = $category_side["meals"];
  $category_starter = $category_starter["meals"];
  $category_vegan = $category_vegan["meals"];
  $category_vegetarian = $category_vegetarian["meals"];

  // echo $category_pork[0]["strMeal"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Wilayah Dapur</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">  
        <a class="navbar-brand" href="#">Wilayah Dapur</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">/<span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="/wilayah-dapur/">Home</a>
            <a class="nav-link active" aria-current="page" href="/wilayah-dapur/kategori.php">Kategori</a>
            <a class="nav-link" aria-current="page" href="/wilayah-dapur/about.php">About</a>
          </div>
        </div>
      </div>
    </nav>
    
    <div class="container">

    	<div class="row mt-3 mb-3">
    		<div class="col text-center">
    			<h1><i>Kategori Resep Masakan</i></h1>
    		</div>
    	</div>

    	<div class="row">

	    	<div class="col-md-4">
	    		<div class="card text-center mb-4">  <!-- style="width: 18rem; -->
				  <img src="<?php echo $category_beef[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_beef[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Beef</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Beef.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
	    		<div class="card text-center mb-4">
				  <img src="<?php echo $category_breakfast[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_breakfast[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Breakfast</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Breakfast.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
			</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_chicken[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_chicken[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Chicken</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Chicken.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_dessert[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_dessert[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Dessert</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Dessert.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_goat[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_goat[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Goat</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Goat.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_lamb[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_lamb[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Lamb</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Lamb.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_miscellaneous[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_miscellaneous[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Miscellaneous</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Miscellaneous.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_pasta[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_pasta[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Pasta</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Pasta.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_pork[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_pork[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Pork</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Pork.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_seafood[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_seafood[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Seafood</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Seafood.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_side[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_side[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Side</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Side.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_starter[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_starter[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Starter</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Starter.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_vegan[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_vegan[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Vegan</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Vegan.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category_vegetarian[0]["strMealThumb"];?>" class="card-img-top" alt="<?php echo $category_vegetarian[0]["strMeal"];?>">
				  <div class="card-body">
				    <h5 class="card-title">Vegetarian</h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori Vegetarian.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>
    	</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>