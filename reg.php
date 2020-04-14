<!DOCTYPE html>
<html>
   <meta charset="utf-8">
	<head>
    <title>Registration</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>

<body>
        <div class="form">
            <h1>Registration</h1>

            <form name="registration" action="reg.php" method="POST">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" required />
                <label for="email">
                    <i class="fa fa-envelope"></i>
                </label>
                <input type="email" name="email" placeholder="Email" required />
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" name="submit" value="Register" />
            </form>
        </div>
  <?php include "registration.php";?>
</body>

</html>