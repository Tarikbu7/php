<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="stylesheet" href="style.css">
  
    
</head>
<body>
<h1>php calculator</h1>
<form  method="post">

<label>number 1</label>
<input type="number" name="first">  <br>


<label>number 2</label>
<input type="number" name="second">  <br>


      <select name="operation">

<option value="add">add +</option>
     <option value="subtract">subtract -</option>
   <option value="multiply">multiply *</option>
<option value="divide">divide /</option>

</select>

<input type="submit" name="calculate">

</form>

<?php

if (isset($_POST["calculate"])){
$first=$_POST["first"];
$second=$_POST["second"];
$operation=$_POST["operation"];

if ($operation == "add"){
    $result = $first + $second;
} elseif ($operation == "subtract"){
    $result = $first - $second;
} elseif ($operation == "multiply"){
    $result = $first * $second;
} elseif ($operation == "divide"){
    if ($second == 0){
        $result = "cannot divide by zero";
    }else{
        $result= $first / $second;
    }
}

echo "<div class='result show'>Result: $result</div>";

}


?>
    


    
</body>
</html>