<header>
<?php
if (isset($_SESSION['user_id']))  {?>
  

  <a href="/php-login">Your App Name. <?= $user['email']; ?></a>
  <?php } ?>
</header>
