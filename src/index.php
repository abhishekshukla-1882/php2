<!DOCTYPE html>

<head>
	<title>PHP - Calculate Electricity Bill</title>
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    return "units $ ".($units * 8);
}


$first_num = $_POST['val'];
$second_num = $_POST['val1'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}
// if (isset($_POST['cal-submit'])) {
//   $calcu = $_POST['val'];
//   $calcu1 = $_POST['val1'];
//   $sub = $_POST('operator');
//   echo $sub;
//   if (!empty($units)) {
//       $result1 = calculate($calcu,$calcu1,$sub);
//       // $result_str = 'Total amount of ' . $units . ' - ' . $result;
//   }
// }
// function calculate($calcu,$calcu1,$sub){
//   switch($sub){
//     case '+':
//       return $calcu1 + $calcu;
//     case '-':
//       return $calcu - $calcu1;
//     case '/':
//       return $calcu1 / $calcu;
//     case '*':
//       return $calcu1 * $calcu;
        
//   }

// }
?>

<body>
	<div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $result_str; ?>
		</div>
	</div>
  <div id="page-cal">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method="post" id="cal">
            Firrst val : 	<input type="number" name="val" id="val" placeholder="Please enter no." /><br><br>
            second val : <input type="number" name="val1" id="val1" placeholder="Please enter no." /><br><br>
              <input type="submit" name="operator" value="Add" />&nbsp;&nbsp;&nbsp;
            <input type="submit" name="operator" value="Subtract" />&nbsp;&nbsp;&nbsp;
            <input type="submit" name="operator" value="Multiply" />&nbsp;&nbsp;&nbsp;
            <input type="submit" name="operator" value="Divide" />
		</form>

		<div>
		    <?php
        echo $sub;
        echo '<br />' . $result; ?>
		</div>
	</div>
</body>
</html>