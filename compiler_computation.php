<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
} 
</style>
</head>
<body>
<form>
	<!--First Equation-->
	<math>x = (<box>(2y + 3y<sup>2</sup>) / 2w</box>) * 4s</math>
	<br>
    <input type="text" name="y1" placeholder="y" />
    <input type="text" name="s1" placeholder="s" />
    <input type="text" name="w1" placeholder="w" />
    <input type="submit"/>
</form>
 
<?php
if (isset($_GET['y1']) && isset($_GET['s1']) && isset($_GET['w1'])) {
    $num1 = $_GET['y1'];
    $num2 = $_GET['s1'];
    $num3 = $_GET['w1'];
    echo "x = " . ( ( ( (2*$num1) + 3*pow($num1,2) ) / 2*$num3 ) * (4*$num2) );
    
}
?>

<hr>
<form>
	<!--Second Equation-->
	<math>y = (<box>(2x + 2w + 2s) / 4z</box>) + (<box>(2x + 2y + 2s) / 2z</box>) </math>
	<br>
    <input type="text" name="x1" placeholder="x" />
    <input type="text" name="w2" placeholder="w" />
    <input type="text" name="s2" placeholder="s" />
    <input type="text" name="z1" placeholder="z" />
    <input type="submit"/>
</form>

<?php
if (isset($_GET['x1']) && isset($_GET['w2']) && isset($_GET['s2']) && isset($_GET['z1'])) {
    $num1 = $_GET['x1'];
    $num2 = $_GET['w2'];
    $num3 = $_GET['s2'];
    $num4 = $_GET['z1'];
    echo "y = " . ( ( ( (2*$num1) + (2*$num2) + (2*$num3) ) / (4*$num4) ) + ( ( (2*$num1) + (2*$num3) ) / (2*$num4) ) ) * 2 ;
    
}
?>

<hr>
<form>
	<!--Third Equation-->
	<math>r<sup>2</sup> = <box>((2x<sup>2</sup> + 2y<sup>2</sup>) *  (3y + 3x<sup>2</sup>)) / x</box> </math>
	<br>
    <input type="text" name="x2" placeholder="x" />
    <input type="text" name="y2" placeholder="y" />
    <input type="submit"/>
</form>

<?php
if (isset($_GET['x2']) && isset($_GET['y2'])) {
    $num1 = $_GET['x2'];
    $num2 = $_GET['y2'];
    echo "r<math><sup>2</sup></math> = " . ( (2*pow($num1, 2) + 2*pow($num2, 2)) * (3*$num2 + 3*pow($num1, 2)) ) / $num1;
    
}
?>

</body>
</html>