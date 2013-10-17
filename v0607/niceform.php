<?php
    session_start();
    if(isset($_SESSION['usr']) && isset($_SESSION['pswd'])){
		header("Location: content.php");
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
    <title> Login </title>
	  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <center>
    <form method="POST" action="login.php">
	 
	<h1>Login</h1>
    <table class="table">
    <tr><td>Username:</td><td><input type="text" name="usr" required></td></tr>
    <tr><td>Password:</td><td><input type="password" name="pswd" required></td></tr>
	</table>
    <input type="submit" class="btn btn-large btn-primary" name="login" value="Login">
    <input type="reset" class="btn btn-large btn-primary" name="reset" value="Reset">
    
	<?php
                if(isset($_GET['loginfailed'])) {
                    echo "<br /><p style=\"color:red;font-family:Arial;size:14pt;font-weight:bold\">Ungueltiger Username oder Password. Bitte erneut versuchen</p>";
                }
     ?>
	 
    </form>
    </center>
    </body>
    </html>
