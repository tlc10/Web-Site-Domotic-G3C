<?php 
//vérifier si l'utilisateur est bien passé par la form signup pour accéder à cette page
if(isset($_POST['signup-submit'])){

	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];
	$phoneNb = $_POST['phoneNb'];
	$adress = $_POST['adress'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$offer = $_POST['offer'];

	//error handler pour check si tous les champs sont remplis correctement
	if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
		header("Location: signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: signup.php?error=invalidmailuid");
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: signup.php?error=invalidmail&uid=".$email);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: signup.php?error=invaliduid&mail=".$username);
		exit();
	}
	else if ($password !== $passwordRepeat) {
		header("Location: signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else if (!preg_match("/^[0-9]*$/", $phoneNb)) {
		header("Location: signup.php?error=invaliphonenb=".$phoneNb);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9\s]*$/", $adress)) {
		header("Location: signup.php?error=invalidadress=".$adress);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z]*$/", $firstName)) {
		header("Location: signup.php?error=invalifirstname=".$firstName);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z\s]*$/", $lastName)) {
		header("Location: signup.php?error=invalidlastname=".$lastName);
		exit();
	}
	else if (!preg_match("/^[0-9]*$/", $offer)) {
		header("Location: signup.php?error=invalidoffer=".$offer);
		exit();
	}

	else{
		$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $username);	
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: signup.php?error=usertaker&mail=".$email);
				exit();
			}
			else{

				$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, phoneNbUsers, adressUsers, firstNameUsers, lastNameUsers, offersUsers) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: signup.php?error=sqlerror");
					exit();
				}
				else{

					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "ssssssss", $username, $email, $hashedPwd, $phoneNb, $adress, $firstName, $lastName, $offer);	
					mysqli_stmt_execute($stmt);
					header("Location: signup.php?signup=success");
					exit();
				}
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else{
	if($offer == 0)
	{
		header("Location: signup.php");
	}
	
	exit();

}

?>