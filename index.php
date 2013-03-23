<!DOCTYPE HTML>
<?php
require_once ("includes/session.php");
require_once ("includes/connect.php");
require_once ("includes/functions.php");
confirm_logged_in();
$user_id = $_SESSION['user_id'];
$level = $_SESSION['level'];
$username = $_SESSION['username'];
?>
<meta charset="UTF-8">
<html>
	<head>
		<title> Welcome <?php echo $username; ?> </title>
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

		<hr style="position: absolute;top: 20%;left: 5%;width:90%">
		<div style="position: absolute;top: 25%;left: 5%;">
			<?php
			$con = mysql_connect("localhost", "root", "karthik");
			if (!$con) {
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("webcms", $con);
			$queryStr="SELECT post_name, data, subject.name FROM subject, post WHERE subject.subject_id = post.subject_id AND subject.subject_id =1";
			$result = mysql_query($queryStr);

			while ($row = mysql_fetch_array($result)) {
				echo "<div><span class='subject_head'>".ucfirst($row['post_name']) . 
				"</span><span class='subject_head'>".ucfirst($row['name']) . 
				"</span><br /><span class='subject_about'> " .substr(ucfirst( $row['data']), 0,42)."...</span></div>";
				echo "<div style='float:right;'><span>Click to read more</span></div>";
				echo "<br /><hr /><br />";
			}

			mysql_close($con);
			?>
		</div>
		
		<div class="right_sub_list_div">
			<div><span> SUBJECTS</span><hr /></div>
			<?php
			$con = mysql_connect("localhost", "root", "");
			if (!$con) {
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("webcms", $con);
			$queryStr="SELECT subject.name FROM subject";
			$result = mysql_query($queryStr);

			while ($row = mysql_fetch_array($result)) {
				echo "<div><span><a href='#'> " .ucfirst( $row['name'])."</a></span></div>";
			}

			mysql_close($con);
			?>
		</div>
		
	</body>
</html>
