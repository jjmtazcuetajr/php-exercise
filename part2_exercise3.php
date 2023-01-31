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
            <p>3. Create a stack of integers using arrays (first in last out)</p>
            <ul>
              <li>Create input fields and push a button to insert a new value</li>
              <li>Create a pop button to remove the top value</li>
              <li>Always display the existing stack content</li>
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

          if (isset($_COOKIE['stack']))
            $stack = unserialize($_COOKIE['stack']);
          else
            $stack = [];

          if (isset($_POST['push']) && $_POST['randcheck'] == $_SESSION['rand']) {
            if (empty($_POST['value']))
              echo "<span class=\"text-danger\">Error: Please enter a value to push onto the stack.</span><br>";
            else {
              if (containsDecimal($_POST['value']))
                echo "<span class=\"text-danger\">Error: Please do not enter a decimal value.</span><br>";
              else {
                $stack[] = $_POST['value'];
                setcookie('stack', serialize($stack));
              }
            }
          }

          if (isset($_POST['pop']) && $_POST['randcheck'] == $_SESSION['rand']) {
            if (count($stack) == 0)
              echo "<span class=\"text-danger\">Error: Stack is empty, cannot pop.</span>";
            else {
              unset($stack[count($stack) - 1]);
              setcookie('stack', serialize($stack));
            }
          }

          if (count($stack) > 0) {
            echo "Stack:&nbsp;&nbsp;";
            for ($i = 0; $i < count($stack); $i++) {
              if ($i === 0)
                echo $stack[$i];
              else
                echo ",&nbsp;&nbsp;" . $stack[$i];
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