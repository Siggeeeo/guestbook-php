<?php define('BASE_URL', '/guestbook/'); ?>
<?php define('PAGES_URL', '/guestbook/inc/'); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gästbok</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<nav>
    <div class="w3-bar w3-black w3-large">
    <a href="<?php echo BASE_URL ?>index.php" class="w3-bar-item w3-button">Gästbok</a>
    <a href="<?php echo PAGES_URL ?>about.php" class="w3-bar-item w3-button">Om</a>
    <a href="<?php echo PAGES_URL ?>login.php" class="w3-bar-item w3-button w3-right">Logga in</a>
    <a href="<?php echo PAGES_URL ?>register.php" class="w3-bar-item w3-button w3-right">Registrera</a>
    </div>
</nav>
<header class="bgimg w3-display-container w3-text-white">  <div class="w3-display-middle w3-center">
    <h1 class="w3-jumbo w3-animate-top">GÄSTBOK</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large">Skriv något till oss</p>
  </div>
</header>