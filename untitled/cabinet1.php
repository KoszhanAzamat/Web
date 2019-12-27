<?php
function printPr(){
    $mark=$_POST["mark"];
    $model=$_POST["model"];
    $email=$_POST["email"];
    $memory=$_POST["memory"];
    $price=$_POST["price"];
    $mysqli=new mysqli("localhost","root","","project");
    $mysqli->query("SET NAME 'utf8'");
    $mysqli->query("INSERT INTO `products`(`email_address`, `mark`, `model`, `memory`, `cell`) VALUES ('$email','$mark','$model','$memory','$price')");
        echo 'Click button for continue'.'<form name="test" action="index.php"> <input type="submit" value="Home"></form>'.;
}

$mysqli=new mysqli("localhost","root","","project");
$mysqli->query("SET NAME 'utf8'");
$results= $mysqli->query("SELECT * from users");
$result=$mysqli->query("SELECT * from products");
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>
<body>
<?php printPr($results)?>
</body>
</html>
