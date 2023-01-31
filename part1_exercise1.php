<?php include 'styles.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Jose Jenn Michael T. Azcueta</title>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center mt-5">
      <p>1. Create the given pattern (diamond)</p>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <?php
      echo "<pre class=\"custom-margin-left\">";
      $n = 4;
      for ($i = 1; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++)
          echo "&nbsp;&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--) {
          if ($j === $i)
            echo ("&nbsp;&nbsp;|");
          else if ($j === 2 * $i - 1 || $j === 1)
            echo ("&nbsp;&nbsp;*");
          else
            echo ("&nbsp;&nbsp;&nbsp;");
        }
        echo "<br>";
      }
      for ($i = $n; $i > 0; $i--) {
        for ($j = $n - $i; $j > 0; $j--)
          echo "&nbsp;&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--) {
          if ($j === $i)
            echo ("&nbsp;&nbsp;|");
          else if ($j === 2 * $i - 1 || $j === 1)
            echo ("&nbsp;&nbsp;*");
          else
            echo ("&nbsp;&nbsp;&nbsp;");
        }
        echo "<br>";
      }
      echo "</pre>";
      ?>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <a class="btn btn-primary" href="/index.php">Home</a>
    </div>
  </div>
</body>

</html>