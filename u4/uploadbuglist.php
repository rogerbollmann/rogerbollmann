
<?php
//upload file
if( isset( $_POST['send'] ) ) {

	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	
	if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
		if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			}
		else
		{
			echo "Upload: " . $_FILES["file"]["name"] . " successfully<br>";

			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
			echo $_FILES["file"]["name"] . " already exists. ";
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],
				"/var/www/upload/" . $_FILES["file"]["name"]);
				echo "Stored in: " . "/var/www/upload/" . $_FILES["file"]["name"];
			}
		}
	}
	else
	{
	echo "Invalid file";
	}
}
?>

<!DOCTYPE html>
<html>
    <head>
		 <title>Upload Forms for Bugs</title>
	</head>
    <body>
        <h1>Upload Bugfiles</h1>
        <form action="uploadbuglist.php" method="post" enctype="multipart/form-data">
			<dd><label for="file">Upload you Screenshot:</label></dd>
            <dd><input type="file" name="file" id="file" required><br></dd>
			<dd>Prio: 1<input type="range" name="points" min="1" max="10" value="<?php echo @$_POST['prio']; ?>" required>10</dd>
			<dd><label>bugtype</label>
             <select id = "bugtype" value="<?php echo @$_POST['bugtype']; ?>" required>
               <option value = "1">one</option>
               <option value = "2">two</option>
               <option value = "3">three</option>
               <option value = "4">four</option>
             </select></dd>
			 <dd>callback<input name="callback" value="<?php echo @$_POST['callback']; ?>" type="checkbox" ></dd>
			 
			 <dd><p><label>Reproduzierbar</label><br>            
				<input type="radio" name="rep" value="yes" checked>Yes<br>
				<input type="radio" name="rep" value="no">No<br></p>
				</dd>
			 
			 <dd>date: <input type="datetime" name="datetime" placeholder="01.01.2000" value="<?php echo @$_POST['date']; ?>" required></dd>
			 
			 <dd>Add your homepage: <input type="url" name="homepage" placeholder="http://www.google.com" value="<?php echo @$_POST['webpage']; ?>" required></dd>
			 
			 <dd>E-mail: <input type="email" name="email" placeholder="expamle@domain.com" value="<?php echo @$_POST['to']; ?>" required></dd>
			 <dd>Password: <input type="password" name="pwd"></dd>
			 <?php
				require_once('recaptcha-php-1.11/recaptchalib.php');
				$publickey = "6LeKK-gSAAAAAEOSlc_SsVGJSyZMiPaPLnzM5K2e"; // you got this from the signup page
				echo recaptcha_get_html($publickey);
			?>
			
			
			<input type="hidden" name="send" value="1" />
            <input type="submit" value="Send" />
		</form>
		
		
		
    </body>
</html>