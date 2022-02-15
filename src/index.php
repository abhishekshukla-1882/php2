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
    // return "units $ ".($units * 8);
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
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
if (isset($_POST['Convert'])) {

  

    $htm = $_POST['timer'];
    $con = $_POST['time'];
    // echo $htm;
    $converted_time = '';
    if($con == 'htm'){
        $converted_time =' hours to Minute '. $htm * 60 ;

    }
    else{
        $converted_time = ' hours to second '.$htm * 60 * 60 ;
    }
    // return $converted_time;
    // echo $converted_time;
}



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


if(isset($_FILES["fileToUpload"])){
    $uploadOk =1;
    print_r($_FILES);
    if ($_FILES["fileToUpload"]["size"] > 200000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
  
    if ($uploadOk==1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"uploads/".$_FILES["fileToUpload"]["name"])) {
        echo "The file has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


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
		<h1>Php - Calculator </h1>

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
        // echo $sub;
        echo '<br />' . $result; ?>
		</div>
	</div>
<!--                             Area of recctangle             -->

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
<!--                      conversion of time                   -->
<div id="area-cal">
		<h1>Php - Time Conversion</h1>

		<form action="" method="post" id="area-cal">
            Time  : 	<input type="number" name="timer" id="len" placeholder="Please enter no." /><br><br>
            hour to minute : 	<input type="radio" name="time" value="htm" /><br><br>
            hour to second  : <input type="radio" name="time" value="hts" /><br><br>
            <input type="submit" name="Convert"  />
		</form>

		<div>
		    <?php
        // echo $sub;
        echo '<br> converted ' . $converted_time; ?>
		</div>
	</div>

    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>

</body>
</html>