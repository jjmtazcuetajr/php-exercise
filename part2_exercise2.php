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
            <p>2. Manipulation of a multidimensional array</p>
            <ul>
              <li>Create a 4 x 4 table</li>
              <li>Generate a random number from 1 - 100</li>
              <li>The number generated should always be unique</li>
              <li>Sum up the numbers per column and row</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <table class="table table-borderless m-0">
          <tbody>
            <?php
            $numbers = range(1, 100);
            shuffle($numbers);
            $rowSums = array();
            $colSums = array_fill(0, 4, 0);

            for ($i = 0; $i < 5; $i++) {
              echo "<tr>";
              $rowSum = 0;
              for ($j = 0; $j < 5; $j++) {
                $currentNumber = array_pop($numbers);
                if ($j === 4) {
                  if ($i === 4)
                    echo "<td></td>";
                  else
                    echo "<td class=\"text-center fw-bold\">" . $rowSum . "</td>";
                } else if ($i === 4) {
                  if ($j === 4)
                    echo "<td></td>";
                  else
                    echo "<td class=\"text-center fw-bold\">" . $colSums[$j] . "</td>";
                } else {
                  echo "<td class=\"text-center border\">" . $currentNumber . "</td>";
                  $rowSum += $currentNumber;
                  $colSums[$j] += $currentNumber;
                }
              }
              echo "</tr>";
              $rowSums[] = $rowSum;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-5">
      <a class="btn btn-primary" href="/index.php">Home</a>
    </div>
  </div>
</body>

</html>