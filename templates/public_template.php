<?php
if (!isset($main_content)) $main_content = '';
?>
<?php include_once __DIR__ . '/../includes/head.php'; ?>
<div id="preloader"></div>
<?php include_once __DIR__ . '/../includes/header.php'; ?>
<main class="flex-grow-1">
  <?php echo $main_content; ?>
</main>
<?php include_once __DIR__ . '/../includes/footer.php'; ?>
<?php include_once __DIR__ . '/../includes/scripts.php'; ?>
</body>
</html>
