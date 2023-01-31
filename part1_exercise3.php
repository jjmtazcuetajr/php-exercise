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
      <p>3. Create the given pattern</p>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <?php
      echo "<pre class=\"custom-margin-left\">";
      for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          if ($i >= 4 && $j >= 4)
            echo "&nbsp;&nbsp;" . $i * $j;
          else if ($i >= 5 && $j >= 3) // this condition was added so that the numbers will properly align with its corresponding column
            echo "&nbsp;&nbsp;" . $i * $j;
          else
            echo "&nbsp;&nbsp;&nbsp;" . $i * $j;
        }
        echo "<br>";
      }
      for ($i = 5; $i > 1; $i--) {
        for ($j = 1; $j < $i; $j++) {
          if ($i >= 4 && $j >= 4)
            echo "&nbsp;&nbsp;" . ($i - 1) * $j;
          else
            echo "&nbsp;&nbsp;&nbsp;" . ($i - 1) * $j;
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