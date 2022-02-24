<?php

if(isset($_GET)){
    $unit = $_GET['unit'];
  }
  if($unit <= 50){
     $total = $unit * 3.50;
  }
  elseif($unit>50 and $unit <=150){
     $total = (($unit-50)*4.00) + (50*3.50);
  }
  elseif($unit>150 and $unit <=250){ 
   $unit = $unit - 50;
   $total = 50*3.50;
   $unit= $unit -100 ;
   $total += (100 *4.00) + ($unit * 5.20);   
 }
 else{
   $unit = $unit - 50;
   $total = 50*3.50;
   $unit= $unit -100 ;
   $total += (100 *4.00);
   $unit = $unit -100;
   $total += (100 *5.20) + ($unit * 6.50); 
 
 }
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>PHP-Forms</title>
 </head>
 
 <body>
   <div class="wrapper">
     <h3> Program to calculate Electricity bill </h3>
     <form method="GET" action="" >
       <div class="user">
         <dv class="col">
           <label for="Name" class="row">Unit</label>
         </dv>
         <div class="col">
           <input type="text" id="unit" name ="unit" required>
         </div>
       </div>
       <input type="submit" value="Calculate" id="submit" name="submit">
     </form>
     <H2>Total bill : Rs <?php echo $total?></h2>
   </div>
 </body>
</html>
