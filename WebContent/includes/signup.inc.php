<?php

if (isset($_POST['sub'])) {
	

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($username) || empty($password)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		//check if input chars are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
				//Check if other users have same username
				$sql = "SELECT * FROM users  WHERE username = '$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
   
                if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else {
                    // Check if the password and confirm password are the same
                    if ($_POST['password'] != $_POST['repeatpassword']){
                        header("Location: ../signup.php?signup=unmatchingpassword");
                        exit();
                        
                        } else {
					//Hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//Insert User into database
					$sql = "INSERT INTO users (first, last, email, username, password) VALUES ('$first', '$last', '$email', '$username', '$hashedPwd')";
					mysqli_query($conn, $sql);
					header("Location: ../success.html");
					exit();
				}
            
          }
                
		}
	}

} else {
	header("Location: ../signup.php?=error");
	exit();
}
