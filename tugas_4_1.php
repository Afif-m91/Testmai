
<html>
<head>
<title>Is Palindrome</title>
</head>
<body>
<h2>Tugas 4.1 Palindrome </h2>
<form action="" method="post">
<label>Silahkan Masukan Kata<label>
<input type="text" name="string" />
<input type="submit" value="Submit"/>
</form>
</body>
</html>
<?php
function is_palindrom($string){   
    if (strrev($string) == $string){   
        $bool_val = var_export(true);
		echo $bool_val;   
    } 
    else{ 
        $bool_val = var_export(false);
		echo $bool_val; 
    } 
}   

if($_POST){

$string = $_POST['string'];
is_palindrom($string);
echo "<br>";
echo "<h4> Kata yang dimasukan adalah : <font color=red>".$string."</h4>";
}
?>

