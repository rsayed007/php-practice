<?php
include "../lib/class.php";

/*print_r($_POST);
*/
/* Add Question*/
extract($_POST);
$quiz=new user;

$qus=htmlentities($qus);
$option1=($op1);
$option2=($op2);
$option3=($op3);
$option4=($op4);

$array=[$option1,$option2,$option3,$option4];
$answer	=array_search($ans,$array);

$query	="insert into question values ('','$qus','$option1','$option2','$option3','$option4','$answer','$cat')";
if($quiz->insart($query))
{
	$quiz->url("index.php?msg=run");
	//echo "Successfully add your Question.";
	exit();
}

?>


<!-- Add category -->
<?php 
/*extract($_POST);
$Category=htmlentities($cat_name);

$inserts	="insert into category values ('','$Category')";
$cat_chack 	="select * from category where cat_name ='$Category'";
$chack	= $quiz->conn->query($cat_chack);

if ($quiz->insart($chack)) {
	if ($chack->num_rows>0) {
		$quiz->url("add_cat.php?msgg=run");
	}
	else {
		if($quiz->insart($inserts)){
			
			$run->url('add_cat.php?msg=run');
		} 
		
	}
}*/
/*if($quiz->insart($inserts))
{
	$quiz->url("add_cat.php?msg=run");
	//echo "Successfully add your Question.";
}*/

?>