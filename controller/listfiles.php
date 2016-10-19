<!DOCTYPE html>
<html>
<head>
	<title>List of Uploaded Files</title>
	<style type="text/css">
		table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
	</style>
</head>
<body>
<?php
	include'../config/config.php'; 
	$sql = "SELECT `id`, `student_id`, `title`, `date`, `filelocation` FROM `file_uploads` ";
	$results = $DB_CONNECTION->query($sql);
?>
	<table style="width:100%">
		<tr>
			<th>
				Article Title
			</th>
			<th>
				View Article
			</th>
		</tr>		
		
		<?php 
			while($row=mysqli_fetch_array($results)){
		?>
			<tr>
				<td>
					<?php echo $row['title'];?>
				</td>
				<td>
					<a href="<?php echo $row['filelocation'];?>"><?php echo $row['title'];?></a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
	<a href="">Upload More</a>

</body>
</html>
