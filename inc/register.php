<?php
require 'dbsetting.php';

$info = '';

if (isset($_POST['register']))
    {
        $username = $_POST['username'];
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password_hash) VALUES (?,?)";
        $stmt = $con->prepare($sql);
        $stmt->execute([$username, $hash]);

        $info = "Kontot " . $username . " är skapat! Nu kan du logga in.";
    }

    require 'header.php';
    ?>

    <main class="w3-container w3-content w3-padding-32" style="max-width:800px">
        <h2>Skapa konto</h2>

        <form action="register.php" method="post">
            <label>Användarnamn</label>
            <input class="w3-input w3-border" type="text" name="username" required>

        <label>Lösenord</label>
    <input class="w3-input w3-border" type="password" name="password" required>

    <button class="w3-button w3-black w3-margin-top" type="submit" name="register">Registrera</button>
  </form>

  <p><?php echo $info; ?></p>
</main>

 <?php require 'footer.php'?>