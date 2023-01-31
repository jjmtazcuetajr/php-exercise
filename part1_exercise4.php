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
      <p>4. Create the given pattern</p>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <?php
      echo "<pre class=\"custom-margin-left\">";
      $multiplier = 2;
      for ($i = 1; $i <= 6; $i++) {
        $sum = $i;
        for ($j = 1; $j <= 5; $j++) {
          if ($j === 1)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $i;
          // the following outer else-if conditions and their corresponding inner conditions were added so that the numbers will properly align with their corresponding columns
          else if ($i === 2 && $j >= 4)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $sum *= $multiplier;
          else if ($i >= 3 && $i <= 4 && $j >= 3) {
            if ($j === 5)
              echo "&nbsp;&nbsp;&nbsp;" . $sum *= $multiplier;
            else if ($i === 4 && $j >= 4)
              echo "&nbsp;&nbsp;&nbsp;" . $sum *= $multiplier;
            else
              echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $sum *= $multiplier;
          } else if ($i >= 5 && $j >= 3) {
            if ($j === 4)
              echo "&nbsp;&nbsp;&nbsp;" . $sum *= $multiplier;
            else if ($j === 5)
              echo "&nbsp;&nbsp;" . $sum *= $multiplier;
            else
              echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $sum *= $multiplier;
          } else
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $sum *= $multiplier;
        }
        $multiplier++;
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