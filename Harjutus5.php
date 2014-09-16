<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>harjutus-5 - PHP andmetüübid3</title>
</head>
  <body>
  	<h2>Booleans</h2>
  	<?php $result1 = true; ?>
  	<?php $result2 = false; ?>
  	<?php $result3 = 7; ?>
  	<?php echo $result1; ?><br>
  	<?php echo "Result1: {$result1}"; ?><br>
  	<?php echo "Result2: {$result2}"; ?><br>
  	<?php echo "Kas result1 on boolean?" . is_bool($result1); ?><br>
  	<?php echo "Kas result2 on boolean?" . is_bool($result2); ?><br>
  	<?php echo "Kas result3 on boolean?" . is_bool($result3); ?><br>

  	<h2>Andmetüüpide olekud</h2>
  	<h3>NULL</h3>

  	<h2>NULL</h2>
  	<?php $var1 = null;
  	$var2 = "";
  	$var3 = 0;
  	echo "Kas var1 on null?" . is_null($var1); ?><br>
  	<?php echo "Kas var2 on null?" . is_null($var2); ?><br>
  	<?php echo "Kas var3 on null?" . is_null($var3); ?><br>
  	<?php echo "Kas var4 on null?" . is_null($var4); ?><br>

  	<h3>Set</h3>
  	<?php echo "Kas var1 on set?" . isset($var1); ?><br>
  	<?php echo "Kas var2 on set?" . isset($var2); ?><br>
  	<?php echo "Kas var3 on set?" . isset($var3); ?><br>
  	<?php echo "Kas var4 on set?" . isset($var4); ?><br>

  	<?php $var5 = "0";
  	$var6 = 0.0;
  	$var7 = array(); ?>
  	<?php echo "Kas var1 on empty?" . empty($var1); ?><br>
  	<?php echo "Kas var2 on empty?" . empty($var2); ?><br>
  	<?php echo "Kas var3 on empty?" . empty($var3); ?><br>
  	<?php echo "Kas var5 on empty?" . empty($var5); ?><br>
  	<?php echo "Kas var6 on empty?" . empty($var6); ?><br>
  	<?php echo "Kas var7 on empty?" . empty($var7); ?><br>
  	<?php echo "Kas result2 on empty?" . empty($result2); ?><br>

  	<h2>Andmetüübi teisendamine</h2>
  	<?php $count = 2;
  	echo $count; ?><br>
  	<?php echo gettype($count); ?><br>
  	<?php  settype($count, "string"); ?><br>
  	<?php echo $count; ?><br>
  	<?php echo gettype($count); ?><br>
  	<?php  settype($count, "float"); ?><br>
  	<?php echo $count; ?><br>
  	<?php echo gettype($count); ?><br>
  	<?php  settype($count, "array"); ?><br>
  	<?php echo $count; ?><br>
  	<?php echo gettype($count); ?><br>
  	<pre>
	<?php echo print_r($count); ?> <br>
	</pre>
  	<?php  settype($count, "boolean"); ?><br>
  	<?php echo $count; ?><br>
  	<?php echo gettype($count); ?><br>
  	
  	<h2>Konstandid</h2>
  	<?php define("MAX_WIDTH", 980); ?><BR>
  	<?php echo MAX_WIDTH; ?>
  	<?php define("MAX_WITDH", 500); ?><br>
	<?php echo MAX_WIDTH; ?>
	<?php //MAX_WIDTH = MAX_WIDTH + 5;  ?>
  </body>
</html>


