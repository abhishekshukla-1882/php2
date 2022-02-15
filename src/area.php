<?php
if (isset($_POST['calculate'])) {
  
    $length = $_POST['len'];
    $breadth = $_POST['breadth'];
    $result_a = calculate_area($length,$breadth);
  
  
    }
  
  
  // $operator = $_POST['operator'];
  $result_area = '';
  function calculate_area($length,$breadth){
    if (is_numeric($length) && is_numeric($breadth)) {
        return $length * $breadth;
      
  }}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div id="area-cal">
		<h1>Php - Calculate Area </h1>

		<form action="" method="post" id="area-cal">
            length of ractangle  : 	<input type="number" name="len" id="len" placeholder="Please enter no." /><br><br>
            breadth of ractangle  : <input type="number" name="breadth" id="bredth" placeholder="Please enter no." /><br><br>
            <input type="submit" name="calculate" value="calculate" />
		</form>

		<div>
		    <?php
        // echo $sub;
        echo '<br />' . $result_a; ?>
		</div>
	</div>
</body>
</html>