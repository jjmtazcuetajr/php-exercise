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
    <div class="row mt-5">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <div class="d-flex justify-content-center">
          <div>
            <p>5. Using a PHP POST method, ask the user to input 2 numbers</p>
            <ul>
              <li>Create a Grid using 2 inputs as the length and width</li>
              <li>Insert random CONSONANT letters into the grid</li>
              <li>Display the grid in a table</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row mt-5">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <div class="mb-3">
          <?php
          session_start();

          function containsDecimal($value)
          {
            return strpos($value, ".") !== false ? true : false;
          }

          if (isset($_POST['submit']) && $_POST['randcheck'] == $_SESSION['rand']) {
            if (empty($_POST['length']) || empty($_POST['width']))
              echo "<span class=\"text-danger\">Error: Please enter both length and width values.</span><br>";
            else {
              if ($_POST['length'] < 0 || $_POST['width'] < 0)
                echo "<span class=\"text-danger\">Error: Please do not enter negative numbers.</span><br>";
              else if (containsDecimal($_POST['length']) || containsDecimal($_POST['width']))
                echo "<span class=\"text-danger\">Error: Please do not enter decimal values.</span><br>";
              else {
                $length = intval($_POST['length']);
                $width = intval($_POST['width']);
                $grid = array();

                for ($i = 0; $i < $length; $i++) {
                  for ($j = 0; $j < $width; $j++) {
                    $grid[$i][$j] = chr(rand(97, 122));
                    // ensure the letter is a consonant
                    while (strpos('aeiou', $grid[$i][$j]) !== false) {
                      $grid[$i][$j] = chr(rand(97, 122));
                    }
                  }
                }

                echo "<table class=\"table table-bordered\">";
                for ($i = 0; $i < $length; $i++) {
                  echo "<tr>";
                  for ($j = 0; $j < $width; $j++) {
                    echo "<td class=\"text-center\">" . $grid[$i][$j] . "</td>";
                  }
                  echo "<tr>";
                }
                echo "</table>";
              }
            }
          }
          ?>
        </div>
        <form method="post">
          <?php
          $rand = rand();
          $_SESSION['rand'] = $rand;
          ?>
          <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
          <div class="mb-3">
            <label for="length" class="form-label">Enter length value</label>
            <input type="number" class="form-control" name="length" id="length">
          </div>
          <div class="mb-3">
            <label for="width" class="form-label">Enter width value</label>
            <input type="number" class="form-control" name="width" id="width">
          </div>
          <input type="submit" class="btn btn-primary" name="submit" value="Submit"></input>
        </form>
      </div>
      <div class="col-sm-4"></div>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-5">
      <a class="btn btn-primary" href="/index.php">Home</a>
    </div>
  </div>
</body>

</html>