<?php
  $data = file_get_contents('https://www.themealdb.com/api/json/v1/1/categories.php');
  $category = json_decode($data, true);

  //var_dump($category["categories"][0]["strCategory"]);

  $category = $category["categories"];

  //echo $category[0]["strCategory"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <title>Wilayah Dapur | Kategori</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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

    	<div class="row mt-3 mb-3 pt-2">
    		<div class="col text-center">
    			<h1><i>Kategori Resep Masakan</i></h1>
    		</div>
    	</div>

    	<div class="row justify-content-evenly">
    		<!-- beef -->
	    	<div class="col-md-4">
	    		<div class="card text-center mb-4">  <!-- style="width: 18rem; -->
				  <img src="<?php echo $category[0]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[0]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[0]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[0]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/beef.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

    		<!-- breakfast -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[12]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[12]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[12]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[12]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/breakfast.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- chicken -->
	    	<div class="col-md-4">
	    		<div class="card text-center mb-4">
				  <img src="<?php echo $category[1]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[1]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[1]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[1]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/chicken.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
			</div>

			<!-- dessert -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[2]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[2]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[2]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[2]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/dessert.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

			<!-- goat -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[13]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[13]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[13]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[13]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/goat.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- lamb -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[3]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[3]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[3]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[3]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/lamb.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- miscellaneous -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[4]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[4]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[4]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[4]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/miscellaneous.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- pasta -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[5]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[5]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[5]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[5]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/pasta.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- pork -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[6]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[6]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[6]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[6]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/pork.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- seafood -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[7]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[7]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[7]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[7]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/seafood.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- side -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[8]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[8]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[8]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[8]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/side.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- starter -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[9]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[9]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[9]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[9]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/starter.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- vegan -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[10]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[10]["strCategory"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[10]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[10]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/vegan.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>

	    	<!-- vegetarian -->
	    	<div class="col-md-4">
				<div class="card text-center mb-4">
				  <img src="<?php echo $category[11]["strCategoryThumb"];?>" class="card-img-top" alt="<?php echo $category[11]["strCategoryThumb"];?>">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $category[11]["strCategory"];?></h5>
				    <p class="card-text">Temukan lebih banyak resep dengan kategori <?php echo $category[11]["strCategory"];?>.</p>
				    <a href="/wilayah-dapur/kategori/vegetarian.php" class="btn btn-primary">Selengkapnya>></a>
				  </div>
				</div>
	    	</div>
    	</div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="0000000" fill-opacity="1" d="M0,256L60,261.3C120,267,240,277,360,261.3C480,245,600,203,720,202.7C840,203,960,245,1080,272C1200,299,1320,309,1380,314.7L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <footer class="text-white text-center pb-5">
      <p>Dibuat dengan <i class="bi bi-suit-heart-fill"></i> di Gresik</p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>