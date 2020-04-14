
 <?php
    include('include/db.php');
	error_reporting(0);
	session_start();
	
	if(isset($_POST['submit'])){
		if (isset($_REQUEST['username'])) {
			global $con;
			$username = mysqli_real_escape_string($con, $_POST['username']);
			
			$username = stripslashes($_REQUEST['username']);

			$username = mysqli_real_escape_string($con, $username);
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($con, $email);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con, $password);
			$query = "INSERT into accounts (account_username, account_password, account_email) VALUES ('$username', '" . password_hash($password, PASSWORD_DEFAULT) . "', '$email')";
			$result = mysqli_query($con, $query);
			if ($result) {
				die("<script>
				alert('You are registered successfully');
				window.location.href = 'reg.php';
				</script>");
		
				
							}
						
		
    } 
	}
?>

