<?php
session_start();
if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
	header("Location: niceform.php");
}
ini_set('display_errors', 1);
error_reporting(E_ALL);
//include 'logoff.html';
//<!– in this example my content only containing a html with logout link–>

$database="todo";
$user="user";
$password="password";
$dns="mysql:host=localhost;dbname=$database";

try {
	$pdo = new PDO($dns,$user,$password);
	} catch(PDOException $e){
		die ("No connection to Database <br /> $e");
		}

//insert into a new ToDo
if( isset( $_POST['save'] ) ) {
	$contentToDo = @$_POST['contentToDo'];
	$sql="INSERT INTO `todos`(`content`, `state`) VALUES ('".$contentToDo."','open');"; 
	$pdo->exec($sql);
	}

if( isset( $_POST['edit'] ) ) {
	$id = @$_POST['id'];
	$newContent = @$_POST['newContentToDo'];
	$sql="UPDATE `todos` SET `content`= '".$newContent."' WHERE id = '".$id."';";
	$pdo->exec($sql);
	}
	
if( isset( $_POST['complete'] ) ) {
	$idComp = @$_POST['idComp'];
	$sql="UPDATE `todos` SET `state`= 'completed' WHERE id = '".$idComp."';";
	$pdo->exec($sql);
	}

if( isset( $_POST['open'] ) ) {
	$idOpen = @$_POST['idOpen'];
	$sql="UPDATE `todos` SET `state`= 'open' WHERE id = '".$idOpen."';";
	$pdo->exec($sql);
	}
	
if( isset( $_POST['delete'] ) ) {
	$idDel = @$_POST['idDel'];
	$sql="DELETE FROM `todos` WHERE id = '".$idDel."';";
	$pdo->exec($sql);
	}

	
	
if( isset( $_GET['delete'] ) ) {
	$idToDel = @$_GET['delete'];
	echo @$_POST['delete'];
	//$sql="DELETE FROM `todos` WHERE id = '".$idToDel."';"; 
	//$pdo->exec($sql);
	}
		
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Todo</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <script type="text/javascript">
			$(document).ready(function() {
				$('#create').bind('show', function () {
					//var contentToDo= document.getElementById ("createToDo").value;
					});
				});
			function closeDialog () {
				$('#create').modal('hide'); 
				};
			$(document).ready(function() {
				$('#edit').bind('show', function () {
					//var contentToDo= document.getElementById ("createToDo").value;
					});
				});
			function closeDialog () {
				$('#edit').modal('hide'); 
				};
			$(document).ready(function() {
				$('#complete').bind('show', function () {
					//var contentToDo= document.getElementById ("createToDo").value;
					});
				});
			function closeDialog () {
				$('#complete').modal('hide'); 
				};
			$(document).ready(function() {
				$('#delete').bind('show', function () {
					//var contentToDo= document.getElementById ("createToDo").value;
					});
				});
			function closeDialog () {
				$('#delete').modal('hide'); 
				};
			$(document).ready(function() {
				$('#open').bind('show', function () {
					//var contentToDo= document.getElementById ("createToDo").value;
					});
				});
			function closeDialog () {
				$('#open').modal('hide'); 
				};
			function okClicked () {
				closeDialog();
				};
			
   </script>
</head>

<body>
<!--<form action="content.php" method="post">-->
<div class="span9">
    <div class="tabbable"> 
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab" data-toggle="tooltip" title="List all ToDo's">List all open Todo's</a></li>
        <li><a href="#tab2" data-toggle="tab" data-toggle="tooltip" title="Show al ToDo's">Show all ToDo's</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <p><legend>List all open ToDo's</legend>
			<form action="content.php" method="post">
				<table class="table table-striped">
					<thead>
						<!--Tabellenkopf-->
						<tr>
							<th>ID</th>
							<th>ToDo</th>
							<th>State</th>
							<th>Creation Date</th>
						</tr>
					</thead>
					
 
						<?php
						//list all open ToDo's	
						$sql='select id, content, state, date from todos where state = "open"';
						$pds=$pdo->query($sql);
							
						foreach($pds as $row){
							echo "<tr>";
							echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td>";
							echo "</tr>";
						}

						?>
					
				</table>
				<a data-toggle="modal" href="#create" class="btn btn-primary">Create</a>
				<a data-toggle="modal" href="#edit" class="btn btn-primary">Edit</a>
				<a data-toggle="modal" href="#complete" class="btn btn-success">Set Complete</a>
				<a data-toggle="modal" href="#delete" class="btn btn-danger">Delete</a>
			</form>
								
			</p>
			<!--create a task-->
			<form action="content.php" method="post">
			<div id="create" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style="display: none;">
				
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">×</a>
					<h3>Please enter a new ToDo.</h3>
				</div>
				<div class="modal-body">
					<div class="divDialogElements">
						ToDo: <textarea class="control-label" rows="3" name="contentToDo" type="text" placeholder="ToDo Description" required><?php echo @$_POST['contentToDo']; ?></textarea>
					</div>
				</div>

				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<input type="hidden" name="save" value="1" />
					<input type="submit" class="btn btn-primary" onclick="okClicked ();" value="Save" />
					
				</div>
			</div>
			</form>
			<!--edit the task-->
			<form action="content.php" method="post">
			
			<div id="edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style="display: none;">
				
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">×</a>
					<h3>Please enter ID for editing</h3>
					</div>
				<div class="modal-body">
					<div class="divDialogElements">
						ID: <input type="text" class="control-label" name="id" value="<?php echo @$_POST['id']; ?>" required /><br />
						New Content:<br /><textarea class="control-label" rows="3" name="newContentToDo" type="text" placeholder="ToDo Description" required><?php echo @$_POST['newContentToDo']; ?></textarea>
					</div>
				</div>

				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<input type="hidden" name="edit" value="1" />
					<input type="submit" class="btn btn-primary" value="Edit" />
					<!--<a href="#" type="submit" class="btn btn-primary" onclick="okClicked ();" value="Save">Save</a>-->
				</div>
				
			</div>
			</form>
			
			<!--set the task to complete-->
			<form action="content.php" method="post">
			
			<div id="complete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style="display: none;">
				
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">×</a>
					<h3>Please enter ID for deleting</h3>
					</div>
				<div class="modal-body">
					<div class="divDialogElements">
						ID: <input type="text" class="control-label" name="idComp" value="<?php echo @$_POST['idComp']; ?>" required /><br />
					</div>
				</div>

				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<input type="hidden" name="complete" value="1" />
					<input type="submit" class="btn btn-primary" value="Complete" />
					<!--<a href="#" type="submit" class="btn btn-primary" onclick="okClicked ();" value="Save">Save</a>-->
				</div>
				
			</div>
			</form>
			
			<!--delete task-->
			<form action="content.php" method="post">
			
			<div id="delete" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style="display: none;">
				
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">×</a>
					<h3>Please enter ID for deleting</h3>
					</div>
				<div class="modal-body">
					<div class="divDialogElements">
						ID: <input type="text" class="control-label" name="idDel" value="<?php echo @$_POST['idDel']; ?>" required /><br />
					</div>
				</div>

				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<input type="hidden" name="delete" value="1" />
					<input type="submit" class="btn btn-primary" value="Delete" />
					<!--<a href="#" type="submit" class="btn btn-primary" onclick="okClicked ();" value="Save">Save</a>-->
				</div>
				
			</div>
			</form>
			
		</div>
		
			
        <div class="tab-pane" id="tab2">
          <p><legend>List all ToDO</legend>
	
				<table class = "table table-striped">
					<thead>
						<tr>
							<th>ToDo</th>
							<th>State</th>
							<th>Creation Date</th>
						</tr>
					</thead>
		
							<?php
							// List of all ToDO's

								$sql='select id, content, state, date from todos where state = "completed"';
								$pds=$pdo->query($sql);
							
								foreach($pds as $row){
									echo "<tr>";
									echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td>";
									echo "</tr>";
								}
								//insertInto("TEST ROGER345");
								//$sql="INSERT INTO `todos`(`content`, `state`) VALUES ('TEST ROGER123','open')"; 
								//$pdo->exec($sql);
								
							?>
				</table>
				<a data-toggle="modal" href="#open" class="btn btn-success">Set Open</a>
				
				
				<form action="content.php" method="post">
			
			<div id="open" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true" style="display: none;">
				
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">×</a>
					<h3>Please enter ID for re-opening</h3>
					</div>
				<div class="modal-body">
					<div class="divDialogElements">
						ID: <input type="text" class="control-label" name="idOpen" value="<?php echo @$_POST['idOpen']; ?>" required /><br />
					</div>
				</div>

				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<input type="hidden" name="open" value="1" />
					<input type="submit" class="btn btn-primary" value="Open" />
					<!--<a href="#" type="submit" class="btn btn-primary" onclick="okClicked ();" value="Save">Save</a>-->
				</div>
				
			</div>
			</form>
			</p>
        </div>
      </div>
    </div>
	<h3><a href="./logout.php"><button class="btn btn-inverse" type="button">Logout</button></a></h3>
</div>
<!--</form>-->
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>