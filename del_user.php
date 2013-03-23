<?php
require_once ("includes/session.php");
require_once ("includes/connect.php");
require_once ("includes/functions.php");
confirm_logged_in();
$user_id = $_SESSION['user_id'];
$level = $_SESSION['level'];
$username = $_SESSION['username'];
?>

<html>
	<head>
		<title> Welcome <?php echo $username; ?>
		</title>
		<link rel="stylesheet" href="stylesheets/login_page.css">
		<script type="text/javascript" src="javascript/jquery1.8.3-min.js"></script>
		<script>
			var $ = jQuery.noConflict();
			$(document).ready(function() {
				$(".del_user_options").find('div').css({"text-align":"justify","padding":"5px"});
			});
		</script>
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

		
		<div class="content_holder">
			<center>
				<div class="del_user_content" style="margin-top: 100px;">
					
					<h3 style="font-size: 32px;margin: 0;">Do you really want to delete a user?</h3>
<hr style="width:90%">
<div class="del_info" style="width: 180px; position: fixed; left: 20%;">
	<p>Select the users that you want to delete and click the 'Delete selected Users' button to dlete them.</p>
</div>
					<form class="del_user_options" action="includes/del_user_control.php" method="get">
						<?php
						$con = mysql_connect("localhost", "root", "");
						if (!$con) {
							die('Could not connect: ' . mysql_error());
						}

						mysql_select_db("webcms", $con);
						$queryStr = "SELECT username FROM users";
						$result = mysql_query($queryStr);

						while ($row = mysql_fetch_array($result)) {
							echo "<div style='width:20%;background:#999'>
							<input type='checkbox' /><span>" . ucfirst($row['username']) . "</span></div>";
						}

						mysql_close($con);
						?>
						<br />
						<input type="submit" value="Delete selected users" />
						</form>
				</div>
			</center>
		</div>
	</body>
</html>
