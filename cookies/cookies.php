<?php
// Check if the user has accepted the cookie policy
if (!isset($_COOKIE['accepted_cookie_policy'])) {
  // Show cookie policy message
  ?>
  <div class="cookie-policy">
    <p>Este sitio utiliza cookies para mejorar su experiencia de navegación. Al continuar navegando por este sitio, acepta el uso de cookies.</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="submit" name="accept_cookie_policy" value="Aceptar">
    </form>
  </div>
  <?php
}

// Handle form submission
if (isset($_POST['accept_cookie_policy'])) {
  // Store a cookie to remember the user has accepted the policy
  setcookie('accepted_cookie_policy', 'yes', time() + (365 * 24 * 60 * 60));

  // Redirect to the same page to remove the form data from the URL
  header('Location: ' . $_SERVER['PHP_SELF']);
  exit;
}
?>