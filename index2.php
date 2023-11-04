<!DOCTYPE html>
<html>
<head>

</head>
<body>
    

    <form method = "post" action="<?php $_SERVER["PHP_SELF"] ?>">

    <label>enter the day birthday: </label><input type = "text" name = "day"></br>
    <label>enter the month birthday: </label><input type = "text" name = "month"></br>
    <label>enter the year birthday: </label><input type = "text" name = "year"></br>

    <input  type = "submit" name = "submitt" value="submit">

</body>


</html>
<?php
$d = $m = $y = "";
 if($_POST["day"] <= 31){
    echo $_POST["day"];
 }

 if($_POST["month"] <= 12){
    echo $_POST["month"];
    
 }else{
    echo "error";
    die;
 }

if($_POST["year"] < 18){
    echo "you dont have ...(mojavez)";
}

?>