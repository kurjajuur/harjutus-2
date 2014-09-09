<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-2 - PHP põhitõed</title>
</head>

<body>
    <h1>See dokument on minu esimene katsetus PHP-ga</h1>
    <?php echo "try not." . " do." ; ?> 
    <br> <?php echo " or do not." . " there is no try"; ?>
    <br>

    <?php
      echo 3+4;
      echo "<br>";
      echo 4.5-1.6;
      echo "<br>";
      echo 6/2;
      // i'm getting good at echo-ing <br> :D
      echo "<br>";
      echo 3*4;
	?>
	<br>
	<br>
	<?php // This is a single line comment. ?>
	<?php # THis is also a single line comment. ?>
	<?php
    /*
        This
        is a multiline
        comment.
    */
	?>

    <?php
    $var1 = 10;
    echo $var1;
    echo "<br>";
    $var1 = 25;
    echo $var1;
    echo "<br>";
    $var2 = "kohvi";
    echo $var2;
    echo "<br>";
    echo $var1 . $var2;
	?>

</body>
</html>