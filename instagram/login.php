 <?php  	
 	include "koneksi.php";

	/*$username = $_POST["username"];
	$password = $_POST["password"];*/

/*	$result_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = md5('$password')");
	$ruser = mysqli_fetch_assoc($result_user);

	$result_profile = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	$cek =mysqli_num_rows($result_user);*/

	$result_user = mysqli_query($koneksi, "SELECT * FROM  user inner join profile on user.username = profile.username WHERE username = '".$_POST["username"]."'AND password = '".$_POST["password"]."'");

	session_start();
	if (mysqli_num_rows($result_user) == 1){
		$_SESSION["user"] = mysql_fetch_assoc($result_user);
		header('location: feed.php');
	}else {
		header('location: index.php');
	}

 ?>
