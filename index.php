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

    <p>This is a paragrafff</p>
    
    <?php

      $someInfo;
      
      // Const variabler skrivs med stora bokstäver för att hålla kolla på vad som är vad.
      CONST PI = 3.14;
      
      $myName = "Simon ";
      $myLastname = "Bson"; 
      $myAge = "23";  
      $havePet = "false";
      
      $fullName = $myName . $myLastname;

      // Detta är en kommentar som inte kommer synas.
      echo "Detta är en echo paragraf som kommer visa mitt namn efter: ";
      echo $fullName; 
    ?>

    <p>This is a paragrafff</p>

</body>
</html>