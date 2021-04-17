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


mysqli_query($con,"UPDATE activity SET last_name=$lname, first_number=$iNum1,
Second_number=$iNum2, Sum_number=$SumResult, diff_number=$DiffResult,
quo_number=$QuoResult,product_number=$ProResult, WHERE first_name=$fname");
mysqli_close($con);
?>

