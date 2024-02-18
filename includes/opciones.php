<?php
$page = basename($_SERVER['SCRIPT_NAME']);

// Get options from database or configuration file
$options = array(
  'show_featured_destinations' => true,
  'show_recent_reviews' => true,
  'show_special_offers' => true,
);
?>

<div class="options">
  <?php if ($options['show_featured_destinations']) { ?>
    <div class="featured-destinations">
      <!-- featured destinations content -->
    </div>
  <?php } ?>

  <?php if ($options['show_recent_reviews']) { ?>
    <div class="recent-reviews">
      <!-- recent reviews content -->
    </div>
  <?php } ?>

  <?php if ($options['show_special_offers']) { ?>
    <div class="special-offers">
      <!-- special offers content -->
    </div>
  <?php } ?>
</div>