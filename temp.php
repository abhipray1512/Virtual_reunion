<?php
ob_start();
    session_start();
	require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Virtual Reunion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(img/Asset.png);background-size: cover;">
    <div class="container my-auto">
        <h2 class="text-center" style="margin-top: 10%;margin-bottom: 5%;">Virtual Reunion Portal</h2>
        <div class="row">
            <div class="col-12 col-sm-6">
            </div>
            <div class="col-12 col-sm-6">
                <ul class="nav nav-tabs mx-auto">
                    <li class="active mx-auto" style="padding-left: 20%;"><a data-toggle="tab" href="#home">Register</a></li>
                    <li class="mx-auto"><a data-toggle="tab" href="#menu1">Login(if already registered)</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form style="padding-top: 5%;" method="post" action="temp.php">
                            <div class="form-group">
                                <label for="inputname1">Name</label>
                                <input type="text" name="name" class="form-control" id="inputname1" placeholder="Enter Full Name" required>
                            </div>
                            <div class="form-group">
                                <label for="inputmobile">Mobile number</label>
                                <input type="text" name="mobile" class="form-control" id="inputmobile" placeholder="Enter Mobile Number" required>
                            </div>
                            <div class="form-group">
                                <label for="inputname">Batch</label>
                                <input type="text" name="batch" class="form-control" id="inputname" placeholder="Enter graduating year" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword1">Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control" id="confirmPassword1" placeholder="Password" required>
                              </div>
                            <input type="submit" value="Register" name="register" class="btn btn-primary"></button>
                          </form>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <form style="padding-top: 5%;" method="post">
                            <div class="form-group">
                              <label for="exampleInputEmail2">Email address</label>
                              <input type="email" name="login_email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword2">Password</label>
                              <input type="password" name="login_password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                            </div>
                            <input type="submit" value="Login" name="login" class="btn btn-primary"></button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php

	if(isset($_POST['register']))
	{
        echo '<script type="text/javascript">console.log("Clicked register");</script>';
		$name=$_POST['name'];
	    $mobile=$_POST['mobile'];
        $batch=$_POST['batch'];
        $email=$_POST['email'];
		$password=$_POST['password'];
		$confirmpassword=$_POST['confirmpassword'];

		if($password==$confirmpassword)
		{
			$query = "select * from virtual WHERE email = '$email'";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run)>0)
			{
				echo '<script type="text/javascript">alert("Username already exists..... Please select another username")</script>';
			}
			else{
				$query = "insert into virtual values('', '$name', '$mobile','$batch', '$email', '$password')";
				$query_run = mysqli_query($con, $query);
				if($query_run){
					echo '<script type="text/javascript">alert("Congratulations........ You are Successfully Registered")</script>';
				}
				else{
					echo '<script type="text/javascript">alert("There is an error.. Please Try Again")</script>';
				}

			}
		}
		else{									
			echo '<script type="text/javascript">alert("Passwords Do Not MATCH...")</script>';
		}
	}
	
	?>
    <?php
		
		if(isset($_POST['login']))
		{
			$email = $_POST['login_email'];
			$password = $_POST['login_password'];
			$query = "select * from virtual WHERE email='$email' AND password='$password'";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run)>0)
			{
				$row= mysqli_fetch_assoc($query_run) ;

				$_SESSION['name'] = $row['name'];
				header('location: Logout.php');
			}

			else{
				echo '<script type="text/javascript">alert("Invalid Credentials.....")</script>';
			}
		}
		ob_end_flush();
		?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>