<?php
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Movie</title>
</head>

<body>
  <main>
    <h1 class="text-center fw-bold m-3 ">Movies Info World</h1>
    <div class="container my-5 ">
      <div class="row row-cols-2 ">

        <?php foreach ($movies as $movie) : ?>
          <div class="col ">
            <div class="card p-2 m-3">
              <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title; ?></h5>
                <h6 class="card-subtitle mb-2"><?php echo $movie->year; ?></h6>
                <p class="card-text"><?php echo $movie->plot; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </main>
</body>

</html>