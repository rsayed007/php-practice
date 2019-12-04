<?php include 'getdata.php'; ?>
<?php 

$string = getData('https://www.imdb.com/');
$exportData = explode('src="', $string);

for ($i=0; $i < count($exportData); $i++) { 
	$exportData2 = explode('"', $exportData[$i]);
	echo $exportData2[0].'<br>';

	echo '<img src="'.$exportData2[0].'"  /><br>';
}



 ?>