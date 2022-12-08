<?php
$hour= 12;
?>
<!DOCTYPEhtml>
<html>
<head>
  <title> my website</title>
  <meta charset=" utf-8">
</head>
<body>
  <h1>MY GOOD DAY</h1>

  <?php if ($hour< 12): ?>
    Good morning
  <?php elseif($hour <18): ?>
  Good afternoon
  <?php elseif($hour <22): ?>
    Good evening
    <?php else: ?>
      Good night
      <?php endif; ?>
  </body>
  </html>
