 <?php 

class Session{
	public static function initial(){
		if (version_compare(phpversion(),'5.4.0','>')) {
			if (session_id()=='') {
				session_start();
			}
		}else{
			if (session_start() == PHP_SESSION_NONE) {
				session_start();
			}
		}
	}
	public static function set($key, $val){
		$_SESSION[$key]= $val;
	}
	public static function get($key){
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		}else{
			return false;
		}
	}
	/*Session destroy fro logout*/
	public static function destroy(){
		session_destroy();
		session_unset();
		header("Location: index.php");
	}
	/*Chack session */
	public static function checkSession(){
		$user = Session::get('email');
		if (self::get($user=="")){
			self::destroy();
			header("Location: index.php");
		}
	}
	public function chackSession2()	{
		self::initial();
		if (self::get('login')== false) {
			self::destroy();
			header("Location:login.php");
		}
	}
}
?>