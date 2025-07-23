<?php 
  require_once __DIR__ . '/vendor/autoload.php';
  require_once 'Core/Logic.php';
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


      
      <form method="POST">
        <button type="submit" name="button_value" value="1" class="numberButton"><p>1</p></button>
        <button type="submit" name="button_value" value="2" class="numberButton"><p>2</p></button>
        <button type="submit" name="button_value" value="3" class="numberButton"><p>3</p></button>
        <button type="submit" name="button_value" value="+" class="methodButton"><p>+</p></button>
        <button type="submit" name="button_value" value="4" class="numberButton"><p>4</p></button>
        <button type="submit" name="button_value" value="5" class="numberButton"><p>5</p></button>
        <button type="submit" name="button_value" value="6" class="numberButton"><p>6</p></button>
        <button type="submit" name="button_value" value="-" class="methodButton"><p>-</p></button>
        <button type="submit" name="button_value" value="7" class="numberButton"><p>7</p></button>
        <button type="submit" name="button_value" value="8" class="numberButton"><p>8</p></button>
        <button type="submit" name="button_value" value="9" class="numberButton"><p>9</p></button>
        <button type="submit" name="button_value" value="*" class="methodButton"><p>*</p></button>
        <button type="submit" name="button_value" value="C" class="controlButton"><p>C</p></button>
        <button type="submit" name="button_value" value="0" class="numberButton"><p>0</p></button>
        <button type="submit" name="button_value" value="=" class="controlButton"><p>=</p></button>
        <button type="submit" name="button_value" value="/" class="methodButton"><p>/</p></button>
      </form>

    </main>
</body>