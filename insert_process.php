<?php
include 'database_connection.php';
include 'WebPage.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
/*  
=====================
*/
$iNum1 = $_POST['Num1'];
$iNum2 = $_POST['Num2'];
/*  
=====================
*/
$SumResult = ((int)$iNum1 + (int)$iNum2); 
$DiffResult = ((int)$iNum1 - (int)$iNum2);
$QuoResult = ((int)$iNum1 / (int)$iNum2);
$ProResult = ((int)$iNum1 * (int)$iNum2);
/*  
=====================
*/
mysqli_query($con,"INSERT INTO act1 (first_name, last_name, first_number, second_number,sum_number,diff_number,quo_number,product_number)
 VALUES ('$fname', '$lname', '$iNum1', '$iNum2','$SumResult','$DiffResult','$QuoResult','$ProResult')");
mysqli_close($con);

?>

