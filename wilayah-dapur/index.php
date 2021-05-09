<?php
  $data = file_get_contents('https://www.themealdb.com/api/json/v1/1/random.php');
  $menu = json_decode($data, true);

  // var_dump($menu["meals"][0]["strMeal"]);
  // var_dump($menu);

  $menu = $menu["meals"];

  // echo $menu[0]["strMeal"];
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

    <title>Wilayah Dapur</title>
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
            <a class="nav-link active" aria-current="page" href="/wilayah-dapur/">Home</a>
            <a class="nav-link" aria-current="page" href="/wilayah-dapur/kategori.php">Kategori</a>
            <a class="nav-link" aria-current="page" href="/wilayah-dapur/about.php">About</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="row mt-5">
        <div class="col">
          <h1 class="text-center"><i>Resep Acak</i></h1>
        </div>
      </div>

      <div class="row mt-5 shadow">
        <div class="card card text-center"> <!-- style="width: 18rem;" -->
          <img src="<?php echo $menu[0]['strMealThumb'] ?>" alt="<?php echo $menu[0]['strMeal'] ?>" width="500"class="mx-auto d-block rounded-circle"> <!-- class="card-img-top" -->
          <div class="card-body">
            <h2 class="card-title mt-2">Resep <?php echo $menu[0]['strMeal'] ?></h2>
            <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded text-start">
              <h6>Cara Memasak</h6>
              <?php echo $menu[0]['strInstructions'] ?>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2">
                <a href="<?php echo $menu[0]['strYoutube']?>" target="_blank" class="btn btn-danger" role="button" aria-pressed="true">Tonton Video</a>
              </div>
              <!-- <a href="#" class="btn btn-primary">Baca Intruksi</a> -->

              <!-- Button trigger modal -->
              <div class="col-md-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Baca Bahan-bahan</button>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Bahan-bahan:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p class="card-text">1. <?php echo $menu[0]['strIngredient1'] ?> | <?php echo $menu[0]['strMeasure1'] ?></p>
                    <p class="card-text">2. <?php echo $menu[0]['strIngredient2'] ?> | <?php echo $menu[0]['strMeasure2'] ?></p>
                    <p class="card-text">3. <?php echo $menu[0]['strIngredient3'] ?> | <?php echo $menu[0]['strMeasure3'] ?></p>
                    <p class="card-text">4. <?php echo $menu[0]['strIngredient4'] ?> | <?php echo $menu[0]['strMeasure4'] ?></p>
                    <p class="card-text">5. <?php echo $menu[0]['strIngredient5'] ?> | <?php echo $menu[0]['strMeasure5'] ?></p>
                    <p class="card-text">6. <?php echo $menu[0]['strIngredient6'] ?> | <?php echo $menu[0]['strMeasure6'] ?></p>
                    <p class="card-text">7. <?php echo $menu[0]['strIngredient7'] ?> | <?php echo $menu[0]['strMeasure7'] ?></p>
                    <p class="card-text">8. <?php echo $menu[0]['strIngredient8'] ?> | <?php echo $menu[0]['strMeasure8'] ?></p>
                    <p class="card-text">9. <?php echo $menu[0]['strIngredient9'] ?> | <?php echo $menu[0]['strMeasure9'] ?></p>
                    <p class="card-text">10. <?php echo $menu[0]['strIngredient10'] ?> | <?php echo $menu[0]['strMeasure10'] ?></p>
                    <p class="card-text">11. <?php echo $menu[0]['strIngredient11'] ?> | <?php echo $menu[0]['strMeasure11'] ?></p>
                    <p class="card-text">12. <?php echo $menu[0]['strIngredient12'] ?> | <?php echo $menu[0]['strMeasure12'] ?></p>
                    <p class="card-text">13. <?php echo $menu[0]['strIngredient13'] ?> | <?php echo $menu[0]['strMeasure13'] ?></p>
                    <p class="card-text">14. <?php echo $menu[0]['strIngredient14'] ?> | <?php echo $menu[0]['strMeasure14'] ?></p>
                    <p class="card-text">15. <?php echo $menu[0]['strIngredient15'] ?> | <?php echo $menu[0]['strMeasure15'] ?></p>
                    <p class="card-text">16. <?php echo $menu[0]['strIngredient16'] ?> | <?php echo $menu[0]['strMeasure16'] ?></p>
                    <p class="card-text">17. <?php echo $menu[0]['strIngredient17'] ?> | <?php echo $menu[0]['strMeasure17'] ?></p>
                    <p class="card-text">18. <?php echo $menu[0]['strIngredient18'] ?> | <?php echo $menu[0]['strMeasure18'] ?></p>
                    <p class="card-text">19. <?php echo $menu[0]['strIngredient19'] ?> | <?php echo $menu[0]['strMeasure19'] ?></p>
                    <p class="card-text">20. <?php echo $menu[0]['strIngredient20'] ?> | <?php echo $menu[0]['strMeasure20'] ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Oke, saya Mengerti.</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end modal -->
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
<!-- 
<script type="text/javascript">
  const data = []
  for (meal in meals) {
      if (meal.includes('strIngredient')) {
          data.push(meals[meal])
          document.write(meal);
     }
  }
</script> -->
