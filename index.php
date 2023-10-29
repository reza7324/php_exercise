<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <form method = "POST" action = "


</body>

<!DOCTYPE html>
<html>

<head>
</head>

<body>

<form  method = "post" action =" <?php $_SERVER["PHP_SELF"] ?> " >
<label> Number: </label>
<input type = "text" name = "number">
<br><br>
<input type = "submit">
<?php


if(empty($_POST['number'])){    //شماره خالی باشد
    echo "its empty";
}
$num = strlen($_POST['number']);

if($num != 11){     //شماره بیشتر از 11
        echo "error";
    }
if(substr($_POST['number'], 0, 2) == "+98"){    //شماره با +98

    echo "dont enter +98";
    die;
}

echo $_SERVER["PHP_SELF"];
?>
</body>
</html>


</html>