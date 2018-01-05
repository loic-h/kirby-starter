<?php
$content = snippet('templates/' .  $page->intendedTemplate(), array(), true);
?>

<?php snippet('head') ?>

<?php echo $content ?>

<?php snippet('foot') ?>
