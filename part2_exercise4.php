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
            <p>4. Create a queue of integers using arrays (first in first out)</p>
            <ul>
              <li>Create input fields and push a button to insert a new value</li>
              <li>Create a pop button to remove the old value</li>
              <li>Always display the existing queue content</li>
              <li>Do not use pre-defined PHP array functions like <strong>array_pop</strong></li>
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

          if (isset($_COOKIE['queue']))
            $queue = unserialize($_COOKIE['queue']);
          else
            $queue = [];

          if (isset($_POST['push']) && $_POST['randcheck'] == $_SESSION['rand']) {
            if (empty($_POST['value']))
              echo "<span class=\"text-danger\">Error: Please enter a value to enqueue.</span><br>";
            else {
              if (containsDecimal($_POST['value']))
                echo "<span class=\"text-danger\">Error: Please do not enter a decimal value.</span><br>";
              else {
                $queue[] = $_POST['value'];
                setcookie('queue', serialize($queue));
              }
            }
          }

          if (isset($_POST['pop']) && $_POST['randcheck'] == $_SESSION['rand']) {
            if (count($queue) == 0)
              echo "<span class=\"text-danger\">Error: Queue is empty, cannot dequeue.</span>";
            else {
              for ($i = 0; $i < count($queue) - 1; $i++)
                $queue[$i] = $queue[$i + 1];
              unset($queue[count($queue) - 1]);
              setcookie('queue', serialize($queue));
            }
          }

          if (count($queue) > 0) {
            echo "Queue:&nbsp;&nbsp;";
            for ($i = 0; $i < count($queue); $i++) {
              if ($i === 0)
                echo $queue[$i];
              else
                echo ",&nbsp;&nbsp;" . $queue[$i];
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
            <label for="integerInput" class="form-label">Enter an integer</label>
            <input type="number" class="form-control" name="value" id="integerInput">
          </div>
          <input type="submit" class="btn btn-primary" name="push" value="Push"></input>
          <input type="submit" class="btn btn-primary" name="pop" value="Pop"></input>
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