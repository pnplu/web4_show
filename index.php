<?php
$data = file_get_contents('./data.json');
$shows = json_decode($data, true);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Web Showrel</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,500,600,700,200,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font/stylesheet.css">
  </head>
  <body>
    <header>
      <nav>
        <article class="logos"></article>
        <article class="menus"></article>
        <article class="social_top"></article>
      </nav>
    </header>

<!-- banner -->
    <section class="banner">
    </section>

<!-- main -->
    <section class="container_main">
      <article class=" wrap_main">
        <article class="title_project"><h3>Project</h3></article>
        <?php
        while (list(,$value) = each($shows)) {
          $name = $value["name"];

         ?>
        <article class="boxs_l"><?= $name ?></article>
        <article class="boxs_c"><?= $name ?></article>
        <article class="boxs_r"><?= $name ?></article>
        <?php } ?>

      </article>
    </section>

  </body>
</html>

<?php
//
// while (list(,$value) = each($shows)) {
//   echo $value["name"];
// }
//
// foreach ($shows as $show) {
//   $name = $show["name"];
//   $youtube = $show["youtube"];
// }
 ?>
