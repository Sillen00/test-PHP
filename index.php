<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <h1 class="h1an">Hello PHP!</h1>

    <form action="functions.php" method="get">
      <input type="text" name="num01" placeholder="Number1">
    </form>

    <p>This is a paragrafff</p>
    
    <?php
      include 'test.php';

      // Detta är en kommentar som inte kommer synas.
      echo "Detta är en echo paragraf som kommer visa mitt namn efter: ";
      echo "$fullName <br>"; 

      if (PI === 3.14) {
        echo "Pi är lika med 3.14 <br>";
      }
      else {
        echo "Pi är inte lika med 3.14 <br>";
      }

      while ($number <= 10) {
        echo "Loop number " . $number++ . "<br>";
      }

      for ($i = 0; $i < 3; $i++) {
        echo "This 'for' loop will loop " . $i + 1 . " times. <br>";
      }

      foreach ($array as $value) {
        echo $value;
      }
    ?>

    <p>This is a paragrafff</p>

</body>
</html>