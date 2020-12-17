<?php include "dischi.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>

    </header>
    <main>
      <div class="container">
          <?php foreach ($dischi as  $disco) {?>
            <div class="album">
              <img src="<?php $disco["poster"] ?>" alt="">
              <p> <?php  $disco["title"]?> </p>
              <p><?php $disco["author"] ?></p>
              <p><?php $disco["year"] ?></p>
            </div><?php
          }?>


      </div>
    </main>
    <script src="main.js" charset="utf-8"></script>
  </body>
</html>
