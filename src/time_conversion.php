<?php
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
</body>
</html>