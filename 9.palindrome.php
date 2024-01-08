<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>palindrome</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="num">Enter a number: </label>
        <input type="number" id="num" name="num">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $c = $_POST['num'];
            $rev = 0;
            $n = abs($c);
            while($n > 0) {
                $rem = (int)($n % 10);
                $rev = $rev * 10 + $rem;
                $n = (int)($n / 10);
            }
            if($c < 0) {
                $rev = -$rev;
            }
            echo "Reverse of $c is $rev";
            if($c == $rev) {
                echo "<br/>$c is a palindrome";
            }
            else {
                echo "<br/>$c is not a palindrome";
            }
        }
    ?>
</body>
</html>
