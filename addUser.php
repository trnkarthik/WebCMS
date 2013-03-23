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
		<title> Welcome <?php echo $username; ?> </title>
		<link rel="stylesheet" href="stylesheets/login_page.css">
		<script type="text/javascript" src="javascript/jquery1.8.3-min.js"></script>
		<script>
		var $=jQuery.noConflict();
			$(document).ready(function(){
				$("#register_box").css("margin","40px");
				$tr_elems=$("#register_box").find("table").find("tr");
				$tr_elems.eq(4).remove();
				$tr_elems.eq(2).remove();
				$("#register_box").find("h2").text("Do you want to add a new user?");
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

		<hr style="position: absolute;top: 20%;left: 5%;width:90%">
		<div>
			
			<?php
			//including registerbox
			include ("includes/register_box.php");
			?>
		</div>
	</body>
</html>
