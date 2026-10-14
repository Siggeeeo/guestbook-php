<?php 
require 'dbsetting.php';

$info ='';

if (isset($_POST['login']))
  {
    $username = $_POST['username'];

    $sql = "Select * FROM users WHERE username=?";
    $stmt = $con->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($_POST['password'], $user['password_hash']))
      {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: ../index.php');
        exit; 
      }
      else
        {
          $info = 'Fel andvändarnamn eller lösenord.';
        }
  }
require 'header.php';
?>

<main class="w3-container w3-content w3-padding-32" style="max-width:800px">
  <h2>Logga in</h2>

  <form action="login.php" method="post">
    <label>Användarnamn</label>
    <input class="w3-input w3-border" type="text" name="username" required>

    <label>Lösenord</label>
    <input class="w3-input w3-border" type="password" name="password" required>

    <button class="w3-button w3-black w3-margin-top" type="submit" name="login">Logga in</button>
  </form>

  <p><?php echo $info; ?></p>
</main>
<?php require 'footer.php'; ?>