<?php
	$insert =false;
	if(isset($_POST['email'])){
		$server="localhost";
		$username="root";
		$password="";

		$con = mysqli_connect($server,$username,$password);
		if(!$con){
			die("This is my last tru if doesnt dont work" .mysqli_connect_error());

		}

		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql="INSERT INTO `trip`.`hello` (`email`, `password`, `datentime`) VALUES ('$email', '$password', current_timestamp());";
		if($con->query($sql) == true){
			echo"succesfull worked";
		}
		else{
			echo "Error: $sql <br> $con->error";
		}
		$con->close();
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="netflix.png" alt="logo" width="100">
            </div>
            <div class="login-card-header">
                <h1>Sign In</h1>
                <div>Please login to use platform</div>
            </div>
            <form class="login-card-form" action="index.php" method="post">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" name="email" id="email" placeholder="Enter Email" required autofocus>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password" id="password" placeholder="Enter password" required>
                </div>
                <div class="form-item-other">
                    <div class="checbox">
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMeCheckbox">Remember me </label>
                    </div>
                    <a href="#">forgot my password</a>
                </div>
                <button class="btn">Sign In</button>
            </form>
            <div class="login-card-footer">
                Don't have an account? <a href="#">Create a free account</a>
            </div>
        </div>
        <div class="login-card-social">
            <div>Other sign Platform</div>
            <div class="login-card-social-btn">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-meta" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 10.174c1.766 -2.784 3.315 -4.174 4.648 -4.174c2 0 3.263 2.213 4 5.217c.704 2.869 .5 6.783 -2 6.783c-1.114 0 -2.648 -1.565 -4.148 -3.652a27.627 27.627 0 0 1 -2.5 -4.174z"></path>
                        <path d="M12 10.174c-1.766 -2.784 -3.315 -4.174 -4.648 -4.174c-2 0 -3.263 2.213 -4 5.217c-.704 2.869 -.5 6.783 2 6.783c1.114 0 2.648 -1.565 4.148 -3.652c1 -1.391 1.833 -2.783 2.5 -4.174z"></path>
                     </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                        <circle cx="12" cy="12" r="3"></circle>
                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                     </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                     </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 7c-3 0 -4 3 -4 5.5c0 3 2 7.5 4 7.5c1.088 -.046 1.679 -.5 3 -.5c1.312 0 1.5 .5 3 .5s4 -3 4 -5c-.028 -.01 -2.472 -.403 -2.5 -3c-.019 -2.17 2.416 -2.954 2.5 -3c-1.023 -1.492 -2.951 -1.963 -3.5 -2c-1.433 -.111 -2.83 1 -3.5 1c-.68 0 -1.9 -1 -3 -1z"></path>
                        <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2"></path>
                     </svg>
                </a>
            </div>
        </div>
    </div>
    
</body>
</html>