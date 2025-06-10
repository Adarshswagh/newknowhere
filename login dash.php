<?php 
session_start();
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['login']))
{
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	$pass= sha1($pass);
	
	if(!empty($email) && !empty($pass))
	{
		$sql = "SELECT * FROM user where uemail='$email' && upass='$pass'";
		$result=mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
		   if($row){
			   
				$_SESSION['uid']=$row['uid'];
				$_SESSION['uemail']=$email;
				header("location:index.php");
				
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Email or Password doesnot match!</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login dash.css">
    <title>Knowhere</title>
</head>
<body>
    
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
    

        <!-- new code -->
        <div class="page-wrappers login-body full-row bg-gray">
        <div class="login-wrapper">
        <div class="container">
        <div class="form-section">
            <div class="sign-in-box">
                <h2>Sign In</h2>
                <form>
                    <div class="input-box">
                        <label for="username">User Name</label>
                        <input type="text" id="username" placeholder="Enter Username">
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter Password">
                    </div>
                    <a href="#" class="forgot-password">Forgot password?</a>
                    <button type="submit" class="sign-in-btn">Sign In</button>
                </form>
                <div class="signup-link">
                    Don't have an account? <a href="#">Sign up</a>
                </div>
            </div>
        </div>
        <div class="image-section">
            <div class="info-box">
                <h2>A new way to experience real estate in the infinite virtual space.</h2>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>

        <!-- new code end -->

        <?php include("include/footer.php");?>
      
</body>
</html>