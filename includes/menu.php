<?php
$page = basename($_SERVER['SCRIPT_NAME']);
?>

<nav>
  <ul>
    <li class="<?php if ($page == 'index.php') { echo 'active'; } ?>">
      <a href="index.php">Home</a>
    </li>
    <li class="<?php if ($page == 'services.php') { echo 'active'; } ?>">
      <a href="services.php">Services</a>
    </li>
    <li class="<?php if ($page == 'destinations.php') { echo 'active'; } ?>">
      <a href="destinations.php">Destinations</a>
    </li>
    <li class="<?php if ($page == 'contact.php') { echo 'active'; } ?>">
      <a href="contact.php">Contact Us</a>
    </li>
  </ul>
</nav>