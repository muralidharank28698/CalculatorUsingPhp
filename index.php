<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="./calstyle.css">
</head>
<body>
    <?php

    $result="";

    if(isset($_POST['add'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $result =$num1 + $num2;
    }
    if(isset($_POST['sub'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $result =$num1 - $num2;
    }
    if(isset($_POST['mul'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $result =$num1 * $num2;
    }
    if(isset($_POST['div'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $result =$num1 / $num2;
   }
   if(isset($_POST['root'])){
    $num1 = $_POST['number1'];
    $result = sqrt ($num1);  
   }
   if(isset($_POST['pow'])){
    $num1 = $_POST['number1'];
    $result=log($num1); 
   }
    if(isset($_POST['min'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $result=min($num1,$num2);

   }
   if(isset($_POST['max'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $result=max($num1,$num2);

   }
?>
        <form action="cal.php" method="POST">
            <div id="content">
            <table>
                <tr>
                    <td colspan=4><input type="text" name="number1" placeholder="enter the value1..." ></td>
                </tr>
                <tr>
                    <td colspan=4><input type="text" name="number2" placeholder="enter the value2..." ></td>
                </tr>
                <tr>
                    <td><button name="add">+</button></td>
                    <td><button name="sub">-</button></td>
                    <td><button name="mul">*</button></td>
                    <td><button name="div">/</button></td>
                </tr>
                <tr>
                    <td><button name="min">min</button></td>
                    <td><button name="max">max</button></td>
                    <td><button name="pow">log</button></td> 
                    <td><button name="root">√</button></td>
                </tr>
                <tr><td colspan=4><input type="text" name="result" value="<?php echo $result; ?>"></td>
                </tr>
            </table>
            </div>
        </form>
</body>
</html>