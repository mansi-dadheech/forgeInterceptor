<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fake</title>
<?php
$target_dir = "E:\SIH\/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
echo $target_file; 
$myfile = fopen("newfile.txt", "w");
$txt = "";
fwrite($myfile,$txt );
$file = exec("python FakeImage.py $target_file");
echo "<p> <font color=blue font face='arial' size='2pt'>$file</font> </p>";
?>

</head>
</html>
