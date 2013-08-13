<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
		<?php echo $message;?>
		
		<?php foreach ($query as $row):?>
		<?php echo $row['title']?><br/>
		
		<?php endforeach;?>
		<h1><?php echo anchor('blog/comments', 'Comments');?></h1>
		
	</body>


</html>