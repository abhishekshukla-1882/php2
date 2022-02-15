<?php
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
</body>
</html>