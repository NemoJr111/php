<!DOCTYPE html>
 <html lang="en">
 <head>
 </head>
 <body>
     <h1>positive or not</h1>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
         <label for="num">Enter the number</label>
         <input type="number" name="num" id="num"><br>
         <input type="submit" value="submit" name="submit">
     </form>
 
 </body>
 </html>
 
 <?php 
     if(isset($_POST['submit'])){
         $n = $_POST['num'];
        if ($n > 0){
            echo '<h4>number is positive';
        }
        else if ($n < 0){
            echo '<h4> number is negative';
        }
        else{
            echo '<h4> number is zero';
        }

     }
 ?>
