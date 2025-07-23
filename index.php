<?php
  require_once 'Core/AutoLoader.php'; 
  require_once 'Core/logic.php';
  AutoLoader::Register();
?>

<!DOCTYPE html>
<head>
    <title>PHP Calculator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
</head>
<body>
    <main>
    <h1>PHP Calculator</h1>
      <section class="calculatorBar">
          <p><?php echo $_SESSION['calcString']; ?></p>
      </section>


      
      <form>
        <button type="submit" name="" value="" class="numberButton"><p>1</p></button>
        <button class="numberButton"><p>2</p></button>
        <button class="numberButton"><p>3</p></button>
        <button class="methodButton"><p>+</p></button>
        <button class="numberButton"><p>4</p></button>
        <button class="numberButton"><p>5</p></button>
        <button class="numberButton"><p>6</p></button>
        <button class="methodButton"><p>-</p></button>
        <button class="numberButton"><p>7</p></button>
        <button class="numberButton"><p>8</p></button>
        <button class="numberButton"><p>9</p></button>
        <button class="methodButton"><p>*</p></button>
        <button class="controlButton"><p>C</p></button>
        <button class="numberButton"><p>0</p></button>
        <button class="controlButton"><p>=</p></button>
        <button class="methodButton"><p>/</p></button>
      </form>
    </main>
</body>