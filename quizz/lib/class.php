<?php 
if(!session_id()) session_start();
class user{
	public $host		 ="localhost";
	public $username	 ="root";
	public $password	 ="";
	public $dbname		 ="quizz";
	public $conn;
	public $cat;
	public $qus;
	public $right_ans;
	public $wrong_ans;
	public $no_ans;
	public $result;
	public $abc;



	public function __construct(){
		$this->conn = new mysqli($this->host, $this->username, $this->password,$this->dbname);
		if (mysqli_connect_errno()) {
			echo "cannection faild";
			exit();
		}else{
			// echo " DB Connected";
		}
	}
	
	/*function for SignUP*/
	public function register($data){
		$name = $this->conn->query($data);

		if ($name) {
			return true;
		}else{
			return false ;
		}
	}

	/*Function for Login*/
	public function login($data){
		$log = $this->conn->query($data);
		if ($log->num_rows>0) {
			return true;
		}else{
			return false ;
		}
	}

	/*select or read data*/
	public function select($query1){
		$result = $this->conn->query($query1);
		if ($result->num_rows>0) {
			return $result;
		}else{
			return false;
		}
	}


/* ----------------------------------------------------------------------- */
/* ----------------------------------------------------------------------- */


	/*User profile*/
	public function userProfile($email){
/*		echo $email;
*/		$query= $this->conn->query("select * from signup where email='$email'");
		$row = $query->fetch_array(MYSQLI_ASSOC) ;
		if ($query->num_rows>0){
			$this->data[]=$row;
		}
		return $this->data;
	}

	/*category show*/
	public function categoryShow(){
		$query = $this->conn->query("select * from category  ");
		while ($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->cat[]=$row;
		}
		return $this->cat; 
	}

	/*Question Show*/
/*		public function qustionShow($question){

		$query = $this->conn->query("select * from question where cat_id='$question'");
		while ($row=$query->fetch_array(MYSQLI_ASSOC)){
			$this->qus[]=$row;
		}
		return $this->qus;	
	}
*/

		/*for random question*/
/*	public function qustionShow($question){

		$query = $this->conn->query("select * from question where cat_id='$question'");
		$c = mysqli_num_rows($query);
		$rand = rand(3, $c)-3;


		$show = $this->conn->query("select * from question where cat_id ='$question' and id >'$rand' LIMIT 4");
		while ($row=$show->fetch_array(MYSQLI_ASSOC)){
			$this->qus[]=$row;
		}
		return $this->qus;	
	}*/
	public function qustionShow($question, $limit=10){

		$userEmail = $_SESSION['email'];
		$query = "SELECT * FROM question where cat_id ='$question' AND id NOT IN (SELECT question_id from use_question where user_email='$userEmail' )/* ORDER BY RAND()*/ LIMIT 10 ";
		
    $show = $this->conn->query($query);
    while ($row=$show->fetch_array(MYSQLI_ASSOC)){
        $this->qus[]=$row;
    }
    return true;  
}
 // $chquery = "select * from tbl_cart where productId='$productId' AND sId='$sId'";
 //        $getPro = $this->db->select($chquery);
 //        if($getPro){
 //            $msg = "product already added!";
 //            return $msg;

/*
1. Fetch all questions answered by the user. keep those in an array
2. write a recursive function where you will do the following -

a. fetch all the questions from the question table
b.while traversing the questions one by one check if that exists in the user-questions array. if exists then call the function again
else push in the new question array.

3. show questions from the new question array

*/

	/*answer*/
	public function answer($data){
		$ans = implode(" ", $data);
		$right  = 0;
		$wrong	= 0;
		$no_ans = 0;
		error_reporting(0);
		$query  = $this->conn->query("select id,ans from question where cat_id='".$_SESSION['cat']."' ");
		while ($qust =$query->fetch_array(MYSQLI_ASSOC)){
			if ($qust['ans'] == $_POST[$qust['id']]) {
				$right++;
			}elseif ($_POST[$qust['id']]== "no_ans") {
				$no_ans++;
			}else{
				$wrong++;
			}
		}
		$array =array();
		$array['right']=$right;
		$array['wrong']=$wrong;
		$array['no_ans']=$no_ans;

		return $array;


/*		echo "Right ".$right."<br>";
		echo "Wrong ".$wrong."<br>";
		echo "ON Answer ".$no_ans."<br>";*/
		// print_r($data);
	}
	
		/*result show */
	public function resultShow($resut){
		$query= $this->conn->query("select * from result where student_id='".$_SESSION['email']."'");
		while($row=$query->fetch_array(MYSQLI_ASSOC)) {
			$this->result[]=$row;
		}
		return $this->result;
	} 

	/*function for Result*/
	public function results($data){
		$ans = implode(" ", $data);
		$right  = 0;
		$wrong	= 0;
		$no_ans = 0;

		$query  = $this->conn->query("select id,ans from question where cat_id='".$_SESSION['cat']."' ");
		while ($qust =$query->fetch_array(MYSQLI_ASSOC)){
			if ($qust['ans']==$_POST[$qust['id']]){
				$right++;
			}elseif ($_POST[$qust['id']]== "no_ans") {
				$no_ans++;
			}else{
				$wrong++;
			}
		}
		echo "<input type='hidden' name='right_ans' value='".$right."' />";
		echo "<input type='hidden' name='wrong_ans' value='".$wrong."' />";
		echo "<input type='hidden' name='no_ans' value='".$no_ans."' />";
	}

	/* insert or Add data*/
	public function insart($rec)
	{
		$a1=$this->conn->query($rec);
			return true;
	}
/*questionName Show*/
	public function questionName($data){
		$query = $this->conn->query("select * from category where id='$data'");
		while ($row=$query->fetch_array(MYSQLI_ASSOC)){
			$abc=$row['cat_name'];
		}
		return $abc;	
	}

	public function url($url){
		header("location:".$url);
	}
		
}

$run = new user;
?>