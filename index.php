<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="./bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<style>
			body{padding:10px;}
		</style>
	</head>
	<body>
		<?php
		mysql_connect('localhost', 'root', '111111');
		mysql_select_db('greente');
		$sql = "select id,title from topic";
		$result = mysql_query($sql);
		?>
		<div class="row">
			<div class="span12">
				<h1>JavaScript</h1>
			</div>
		</div>
		<div class="row">
			<div class="span4">
				<ol class="nav nav-tabs nav-stacked">
				<?php
				while ($row = mysql_fetch_assoc($result)) {
				?>
					<li><a href="index.php?id=<?=$row['id'] ?>"><?=htmlspecialchars($row['title']) ?></a></li>
				<?php
				}
				?>
				</ol>
			</div>
			<?php
			$sql = "select * from topic where id = " . mysql_real_escape_string($_GET['id']);
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
			?>
			<div class="span8">
				<div>
					<h2><?=htmlspecialchars($row['title']) ?></h2>
					<div><?=$row['description'] ?></div>
				</div>
			</div>
		</div>
		<?php ?>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>