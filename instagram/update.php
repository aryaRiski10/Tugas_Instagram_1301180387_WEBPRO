<?php  
 include "koneksi.php";

 $result_user = sprintf("UPDATE user SET username =  '%s', email = '$s'", $_POST["username"], $_POST["email"]);
 mysqli_query($koneksi, $result_user);

 $result_profile = sprintf("UPDATE profile SET name = '$s', website = '$s', bio = '$s', phone_number = '$s', gender = '$s'", $_POST["name"], $_POST["website"], $_POST["bio"], $_POST["phone"], $_POST["gender"]);

 mysqli_query($koneksi, $result_profile);

 session_start();

 $result_user = mysqli_query($koneksi, "SELECT * FROM user inner join profile on user.username = profile.username WHERE username = '" . $_SESSION["user"]["username"] . "'");

 $_SESSION["user"] = mysqli_fetch_assoc($result_user);
 
 header('location: profile.php');
 ?>