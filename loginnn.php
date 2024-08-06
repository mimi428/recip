<?php
    include "dabse.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasteversity</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="loginnn.css">
    <link rel="icon" href="img/logo1.png">
</head>
<body>
    <header>
      <a href="home.php">
      <img src="img/ab.JPG" alt="tasteversity" style="width: 53%;"/>
      </a>
        
        <div class="nav-bar">
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="recipee.php">Recipes</a></li>
                <li><a href="home.php#Categories">Categories</a></li>
                <li><a href="loginnn.php">Login</a></li>
            </ul>
        </div>
    </header>

    <div class="container" id="container">
		<div class="form-container log-in-container">

		<?php
				if(isset($_POST["login"]))
				{
					$sql="select * from admin where aname='{$_POST["username"]}' and apass='{$_POST["password"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION["aid"]=$ro["AID"];
						$_SESSION["aname"]=$ro["ANAME"];
						echo "<script>window.open('index.php','_self');</script>";
					}
					else
					{
						echo "<div class='error'>Invalid Username or Password</div>";
					}
					
				}
				if(isset($_GET["mes"]))
				{
					echo "<div class='error'>{$_GET["mes"]}</div>";
				}
				
			?>
 <div class="form-box">
        <center><h2>LOGIN</h2></center>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
		 <div class="login-box">
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="username" placeholder="Username" required>
			</div>
			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
				<input class="button" type="submit"
					name="login" value="Sign In">
			</div>

			</div>
		
	</form>
	</div> 
	</div> 
	</div> 
	<?php
include "login_footer.php";
	?>
	
</body>
</html>







