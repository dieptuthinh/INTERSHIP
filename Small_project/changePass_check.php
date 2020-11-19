<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['oldPass']) && isset($_POST['newPass']) && isset($_POST['checkPass'])&& isset($_POST['user_name']))
{

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$oldPass = validate($_POST['oldPass']);
	$newPass = validate($_POST['newPass']);
	$checkPass = validate($_POST['checkPass']);
	$user_name = validate($_POST['user_name']);

	$user_data = 'oldPass='. $oldPass. '&newPass='. $newPass .'&user_name' .$user_name;


	if (empty($oldPass)) {
		header("Location: ChangePass.php?error=Password is required&$user_data");
	    exit();
	}else if(empty($newPass)){
        header("Location: ChangePass.php?error=New Password is required&$user_data");
	    exit();
	}else if(empty($user_name)){
        header("Location: ChangePass.php?error=user_name is required&$user_data");
	    exit();
	}
	else if(empty($checkPass)){
        header("Location: ChangePass.php?error=Confirm Password is required&$user_data");
	    exit();
	}

	else if($newPass !== $checkPass){
        header("Location: ChangePass.php?error=The confirmation password  does not match&$user_data");
	    exit();
    }
    else if(isset($_POST['submit']))
    {
        $pass1 = md5($oldPass);
        $pass2 = md5($newPass);
        $pass3 = md5($checkPass);
        $user_name = $_POST['user_name'];
        $oldPass = md5($_POST['oldPass']);
        $newPass = md5($_POST['newPass']);
        $checkPass = md5($_POST['checkPass']);
        $sql = "SELECT * FROM users WHERE password='$pass1' and user_name = '$user_name'";
        $result =mysqli_query($conn,$sql);
        $num = mysqli_fetch_array($result);
        if ($num > 0) {
            $set="UPDATE users SET password = '$pass2' WHERE user_name = '$user_name'";
            header("Location: ChangePass.php?success=Change password success&$user_data");
            exit();
        }
    }
        else{
            header("Location: ChangePass.php?error=Please try again.&$user_data");
            exit();
        }

	// else{

	// 	// hashing the password
    //     $pass1 = md5($oldPass);
    //     $pass2 = md5($newPass);
    //     $pass3 = md5($checkPass);
    //     $id = $_SESSION['id'];
    //     $sql = "SELECT password FROM users WHERE user_name='$user_name' AND password='$oldPass'";


	//     $sql = "SELECT * FROM users WHERE user_name='$uname' ";
	// 	$result = mysqli_query($conn, $sql);

	// 	if (mysqli_num_rows($result) > 0) {
	// 		header("Location: signup.php?error=The username is taken try another&$user_data");
	//         exit();
	// 	}else {
    //        $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
    //        $result2 = mysqli_query($conn, $sql2);
    //        if ($result2) {
    //        	 header("Location: signup.php?success=Your account has been created successfully");
	//          exit();
    //        }else {
	//            	header("Location: signup.php?error=unknown error occurred&$user_data");
	// 	        exit();
    //        }
	// 	}
	// }
	
}else{
	header("Location: ChangePass.php");
	exit();
}

?>