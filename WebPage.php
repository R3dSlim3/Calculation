<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <title>Activity!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  </head>


     <div class="header">
        <h1>Activity:</h1>
    </div>
    <div class="center">
      <form action ="insert_process.php" method="POST">
<body>
  First Name: <input type="text" class="form-control" name="fname" placeholder="Input First Name Here...">
  <br>
  Last Name: <input type="text" class="form-control" name="lname" placeholder="Input Last Name Here...">
  <br>
  <br>
  <?php 
  error_reporting (E_ALL ^ E_NOTICE);
    //Retrieve name from query string and store to a local variable
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        if(($fname != "" && $lname != "")){
        echo "<font color=red> Welcome $fname $lname </font>"; 
        }else if(($fname == "" && $lname == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($fname == "" && $lname != "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($fname != "" && $lname == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }
    ?>
  <br>
  <br>

 

  First Number: <input type="text"  class="form-control" name="Num1"  placeholder="Input First Number Here...">
  <br>
  Second Number:  <input type="text" class="form-control" name="Num2"  placeholder="Input Second Number Here...">
  <br>
  <br>
  Sum: <?php 
  error_reporting (E_ALL ^ E_NOTICE);
        $iNum1 = $_POST['Num1'];
        $iNum2 = $_POST['Num2'];
        $SumResult = ((int)$iNum1 + (int)$iNum2);
       
         if(($iNum1 != "" && $iNum2 != "")){
        echo "<font color=red>$SumResult</font>"; 
        }else if(($iNum1 == "" && $iNum2 != "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($iNum1 != "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($iNum1 == "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }
        ?>
  <br>
  Diff: <?php 
  error_reporting (E_ALL ^ E_NOTICE);
        $iNum1 = $_POST['Num1'];
        $iNum2 = $_POST['Num2'];
       $DiffResult = ((int)$iNum1 - (int)$iNum2);
        if(($iNum1 != "" && $iNum2 != "")){
        echo "<font color=red>$DiffResult</font>"; 
        }else if(($iNum1 == "" && $iNum2 != "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($iNum1 != "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($iNum1 == "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }

        ?> 
  <br>
  Quo: <?php 
  error_reporting (E_ALL ^ E_NOTICE);
        $iNum1 = $_POST['Num1'];
        $iNum2 = $_POST['Num2'];

        if(($iNum1 != "" && $iNum2 != "")){
        $QuoResult = ((int)$iNum1 / (int)$iNum2);
        if(($iNum1 != "" && $iNum2 != "")){
        echo "<font color=red>$QuoResult</font>"; 
        }else if(($iNum1 == "" && $iNum2 != "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        
        }else if(($iNum1 != "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        
        }else if(($iNum1 == "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        
        }
        }else if(($iNum1 == "" && $iNum2 != "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        
        }else if(($iNum1 != "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        
        }else if(($iNum1 == "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        
        }
        
       
       

        ?>
  <br>
  Product: <?php 
  error_reporting (E_ALL ^ E_NOTICE);
        $iNum1 = $_POST['Num1'];
        $iNum2 = $_POST['Num2'];
        $ProResult = ((int)$iNum1 * (int)$iNum2);
       
         if(($iNum1 != "" && $iNum2 != "")){
        echo "<font color=red>$ProResult</font>"; 
        }else if(($iNum1 == "" && $iNum2 != "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($iNum1 != "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }else if(($iNum1 == "" && $iNum2 == "")){
        echo "<font color=red> Please Complete The Following... </font>"; 
        }

        ?>
  <br>
   <input type="submit" class="form-control btn btn-success" value="Insert">
    
  </body>
    </form>
  </div>

    <!-- Validation Script -->
    



</html>