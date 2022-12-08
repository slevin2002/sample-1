<!DOCTYPEhtml>
<html>
<head>
  <title> my website</title>
  <meta charset=" utf-8">
</head>
<body>
  <h1>MY GOOD DAY</h1>

  <?php
  $hour= 12;
   if ($hour< 12) { echo  "Good morning";}
   elseif($hour <18){ echo "Good afternoon";}
   elseif($hour <22){echo "Good evening";}
                else {echo "Good night";}
      // endif;
   ?>
  </body>
  </html>
