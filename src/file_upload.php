<?php
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>