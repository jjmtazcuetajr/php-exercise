<?php
include 'styles.php';
$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k'];
?>
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
            <p>1. Generate a random character from a - k</p>
            <ul>
              <li>Create a 4 x 5 table</li>
              <li>Display all the random characters inside the table</li>
              <li>Highlight all the characters that belong to the even column</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <p>(odd/even column)</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <table class="table table-bordered">
          <tbody>
            <?php
            echo "<tr>";
            for ($i = 0; $i < count($letters); $i++) {
              echo "<td class=\"text-center\">" . $letters[$i] . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            for ($i = 0; $i < count($letters); $i++) {
              echo "<td class=\"text-center\">" . $i . "</td>";
            }
            echo "</tr>";
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
      <table class="table table-bordered">
        <tbody>
          <?php
          for ($i = 1; $i <= 4; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
              $index = rand(0, 10);
              if ($index % 2 === 0) {
                echo "<td class=\"text-center text-uppercase light-green\">" . $letters[$index] . "</td>";
              } else {
                echo "<td class=\"text-center\">" . $letters[$index] . "</td>";
              }
            }
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-5">
      <a class="btn btn-primary" href="/index.php">Home</a>
    </div>
  </div>
</body>

</html>