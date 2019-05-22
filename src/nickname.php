<!DOCTYPE html>
<html>
  <head>
    <title>String Manipulation</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600|Pacifico&display=swap" rel="stylesheet">
  </head>
  <body>
    <h1>Nickname Generator</h1>

    <form action="" method="post">
      <input type="text" name="nick" placeholder="Fill in a name">
      <button type="submit" name="sub">SUBMIT</button>
    </form>

    <div id="target">
      <?php
        if (isset($_POST['sub'])){
          $input = $_POST['nick'];

          $rev = strrev($input);
          echo "<p>" . $rev . "</p>";
          $cap = strtoupper($rev);
          echo "<p>" . $cap . "</p>";
          $rev2 = strrev($cap);
          echo "<p>" . $rev2 . "</p>";
          $dash = "--" . $rev2 . "--";
          echo "<p>" . $dash . "</p>";
          $x = "--x" . $rev2 . "--";
          echo "<p>" . $x . "</p>";

          //array with random letters and numbers
          $random = [];
          $lower = range("a", "z");
          $upper = range("A", "Z");
          $number = range(0, 9);
          array_push($random, $lower, $upper, $number);

          //generate random number of chars
          $result = "";
          $numberOfChars = rand(2,4);
          for ($i = 0; $i < $numberOfChars; $i++){
              $decideArr = rand(0, 2);
              $chosenArr = $random[$decideArr];
              $length = count($chosenArr);
              $decideChar = rand(0, $length);
              $chosenChar = $chosenArr[$decideChar];
              $result .= $chosenChar;
          }

          $randChars = "--x" . $result . $rev2 . "--";
          echo "<p>" . $randChars . "</p>";

          //brackets
          $result2 = "";
          $strlength = strlen($result);
          for ($i = 0; $i < $strlength; $i++){
            $result2 .= "[" . $result[$i] . "]";
          }
          $brackets = "--x" . $result2 . $rev2 . "--";
          echo "<p>" . $brackets . "</p>";
        }
      ?>
    </div>

  </body>
</html>
