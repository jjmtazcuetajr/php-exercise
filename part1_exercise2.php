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
      <p>2. Create the given pattern (x)</p>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <?php
      echo "<pre class=\"custom-margin-left\">";
      $n = 6;
      for ($i = $n; $i > 0; $i--) {
        for ($j = $n - $i; $j > 0; $j--)
          echo "&nbsp;&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--) {
          if ($j === 2 * $i - 1 || $j === 1) {
            if ($i % 2 !== 0)
              echo ("&nbsp;&nbsp;" . $i);
            else
              echo ("&nbsp;&nbsp;*");
          } else
            echo ("&nbsp;&nbsp;&nbsp;");
        }
        echo "<br>";
      }
      for ($i = 2; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++)
          echo "&nbsp;&nbsp;&nbsp;";
        for ($j = 2 * $i - 1; $j > 0; $j--) {
          if ($j === 2 * $i - 1 || $j === 1) {
            if ($i % 2 !== 0)
              echo ("&nbsp;&nbsp;" . $i);
            else
              echo ("&nbsp;&nbsp;*");
          } else
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