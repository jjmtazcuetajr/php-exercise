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
      <div class="col-sm-6">
        <p>6. Fix the code function to output the correct result. <strong>Explain your answer</strong></p>
        <!--indentatiom of the text within the <span> tag is as what you see because of the <pre> tag and to keep the text centered on the screen-->
        <pre>
            <span>
  function bubbleSort($lists)
  {
    $length = count($lists);

    for ($parent = 0; $parent < $length; $parent++) {

      for ($child = 0; $child < $length - $parent - 1; $child++) {

        if ($lists[$child] > $lists[$child + 1]) {
          $temp = $lists[$child + 1];
          $lists[$child] = $lists[$child + 1];
          $lists[$child + 1] = $temp;
        }
      }
    }
  }
          </span>
        </pre>
      </div>
      <div class="col-sm-6">
        <strong>Correct code:</strong>
        <!--indentatiom of the text within the <span> tag is as what you see because of the <pre> tag and to keep the text centered on the screen-->
        <pre class="mt-3">
            <span>
  function bubbleSort($lists)
  {
    $length = count($lists);

    for ($parent = 0; $parent < $length; $parent++) {

      for ($child = 0; $child < $length - $parent - 1; $child++) {

        if ($lists[$child] > $lists[$child + 1]) {
          $temp = $lists[$child];
          $lists[$child] = $lists[$child + 1];
          $lists[$child + 1] = $temp;
        }
      }
    }
  }
            </span>
          </pre>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <span><strong>Explanation:&nbsp;&nbsp;</strong>Given the array [64, 22, 35, 10, 88, 4, 90]</span>
        <div class="row mt-3">
          <div class="col-sm-6">
            <span>Result of the wrong code:&nbsp;&nbsp;</span>
            <?php
            function bubbleSort($lists)
            {
              $length = count($lists);

              for ($parent = 0; $parent < $length; $parent++) {

                for ($child = 0; $child < $length - $parent - 1; $child++) {

                  if ($lists[$child] > $lists[$child + 1]) {
                    $temp = $lists[$child + 1];
                    $lists[$child] = $lists[$child + 1];
                    $lists[$child + 1] = $temp;
                  }
                }
              }
              return $lists;
            }

            $array = [64, 22, 35, 10, 88, 4, 90];
            $sortedArray = bubbleSort($array);
            for ($i = 0; $i < count($sortedArray); $i++) {
              if ($i === 0) {
                echo $sortedArray[$i];
              } else
                echo ",&nbsp;&nbsp;" . $sortedArray[$i];
            }
            ?>
          </div>
          <div class="col-sm-6">
            <span>Result of the correct code:&nbsp;&nbsp;</span>
            <?php
            function correctBubbleSort($lists)
            {
              $length = count($lists);

              for ($parent = 0; $parent < $length; $parent++) {

                for ($child = 0; $child < $length - $parent - 1; $child++) {

                  if ($lists[$child] > $lists[$child + 1]) {
                    $temp = $lists[$child];
                    $lists[$child] = $lists[$child + 1];
                    $lists[$child + 1] = $temp;
                  }
                }
              }
              return $lists;
            }

            $array = [64, 22, 35, 10, 88, 4, 90];
            $sortedArray = correctBubbleSort($array);
            for ($i = 0; $i < count($sortedArray); $i++) {
              if ($i === 0) {
                echo $sortedArray[$i];
              } else
                echo ",&nbsp;&nbsp;" . $sortedArray[$i];
            }
            ?>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <p>
              The error can be seen on the line "<strong>$temp = $lists[$child + 1];</strong>". When comparing the "previous" and "next" value, if the "next" value is less
              than the "previous" value then the "next" value will be assigned to the $temp variable. Then on the next line of code, the "next" value will be assigned to the
              index of the "previous" value. The line of code after that will assign the value of the $temp variable (which is the "next" value) to the index of the "next" value.
              Due to that, the "previous" value gets lost in the process because it is greater than the "next" value. The correct code should be
              "<strong>$temp = $lists[$child];</strong>", which keeps the "previous" value in the $temp variable, and then the bubble sort will now be correct.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-5">
      <a class="btn btn-primary" href="/index.php">Home</a>
    </div>
  </div>
</body>

</html>