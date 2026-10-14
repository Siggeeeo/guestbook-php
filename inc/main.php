<main class="w3-container w3-content w3-padding-32" style="max-width:800px">
  <h2>Gästbok</h2>

  <?php if (isset($_SESSION['user_id'])): ?>
    <form action="index.php" method="post">
      <label>Ditt meddelande</label>
      <textarea class="w3-input w3-border" name="message" required></textarea>
      <button class="w3-button w3-black w3-margin-top" type="submit" name="send">Skicka</button>
    </form>
  <?php else: ?>
    <p><a href="inc/login.php">Logga in</a> för att skriva i gästboken.</p>
  <?php endif; ?>

  <!-- 3. Visa alla meddelanden -->
  <?php foreach ($messages as $row): ?>
    <div class="w3-card w3-padding w3-margin-top">
      <b><?php echo htmlspecialchars($row['username']); ?></b>
      <p><?php echo htmlspecialchars($row['message']); ?></p>
      <small><?php echo $row['created_at']; ?></small>
    </div>
  <?php endforeach; ?>
</main>