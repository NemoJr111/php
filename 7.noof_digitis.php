<!DOCTYPE html>
 <html lang="en">
 <head>
 </head>
 <body>
     <h1>Number of digits in a number</h1>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
         <label for="num">Enter the number</label>
         <input type="number" name="num" id="num"><br>
         <input type="submit" value="submit" name="submit">
     </form>
 
     <?php 
     if(isset($_POST['submit'])){
         $c = $_POST['num'];
         $n = abs($c);
         $count = 0;
         while ($n > 0){
             $count++;
             $n = (int)($n / 10);
         }
         if ($c == 0){
             $count = 1;
         }
         echo '<h4>Number of digits in '.$c.' are '.$count.'</h4>';
     }
     ?>
 </body>
 </html>
