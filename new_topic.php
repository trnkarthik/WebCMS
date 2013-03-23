<?php
require_once ("includes/session.php");
require_once ("includes/connect.php");
require_once ("includes/functions.php");
confirm_logged_in();
$user_id = $_SESSION['user_id'];
$level = $_SESSION['level'];
$username = $_SESSION['username'];
?>
<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
	<head>
		<title> Welcome <?php echo $username; ?>
		</title>
		<link rel="stylesheet" href="stylesheets/login_page.css">
	</head>
	<body>

		<?php
		include ("includes/header.php");

		if ($level == 10) {
			include ("includes/user_top_navbar.php");
		} else if ($level == 1) {
			include ("includes/admin_top_navbar.php");
		}
		?>
		<div style="width: 100%;height: 80px;"></div>
		<!-- 		<hr style="position: absolute;top: 20%;left: 5%;width:90%"> -->
		<div class="content_holder">
			<center>
				<form action="" method="post" >
				<div class="new_topic_content"></div>
				<h2>Want to add a new Topic?</h2>
				<div>
					<label>Topic Name  :</label>
					<input type="text" name="topic_name"  />
				</div>
				<br/>
					<div>
						<label>Description :</label>
						<br/>
						<textarea rows="5" name="data"></textarea>
					</div>
					<div>
						<input type="submit" value="Add topic" />
						<input type="reset"" value="Clear" />
					</div>
				</form>

			</center>
		</div>
	</body>
</html>
