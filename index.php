<?php include "dischi.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="dist/img/logo.png" alt="">
      </div>
    </header>
    <main>
      <div class="container">
        <div class="albumBox">
          <?php foreach($dischi as $disco) {?>
            <div class="album">
              <img src="<?php echo $disco['poster'] ;  ?>" alt="">
              <p> <?php echo $disco['title']; ?> </p>
              <p><?php echo $disco['author'] ;?></p>
              <p><?php echo $disco['year']; ?></p>
            </div><?php
          }?>

        </div>
      </div>
    </main>

  </body>
</html>
