<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<label for="first_number">First Number: </label> 
<input type="text" name="a" placeholder="Enter a: " /> 
<input type="text" name="b" placeholder="Enter b: " />
<input type="text" name="c" placeholder="Enter c: " />
<input type="submit" name="submit" />
</form>

<?php
if (isset($_POST['submit'])) {
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
if ($a < $b && $a < $b) { 
    echo "Smallest is $a";
} else if ($b < $a && $b < $c) { 
    echo "Smallest is $b";
} else {
    echo "Smallest is $c";
}
}
?>
</body>
</html>