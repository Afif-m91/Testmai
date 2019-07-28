
<html>
<head>
<title>Words Count</title>
</head>
<body>
<h2>Tugas 4.2 Words Count </h2>
<form action="" method="post">
<label>Silahkan Masukan Kalimat<label><p>
<textarea style="width:500px;font-size:14pt;" name="kalimat" rows=4 > </textarea><p>
<label>Masukan Kata Yang Dicari<label><p>
<input style="width:150px;font-size:14pt;" type="text" name="kata" /><p>
<input style="height:30px; width:70px;" type="submit" value="Submit"/>
</form>
</body>
</html>
<?php
function words_count($sentences,$word){   

echo "Jumlah Kata: ". substr_count($sentences,$word);
}   

if($_POST['kata'] !=''){

$sentences = $_POST['kalimat'];
$word = $_POST['kata'];
echo "<h4> Kata yang dicari : <font color=red>".$word."</h4></font>";
words_count($sentences,$word);
echo "<br>";
}
?>
