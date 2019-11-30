<?php 

	$conn = mysqli_connect('localhost','root','','test');
	$sql = "select * from userlist where id= '{$_POST['ids']}'";
	$result = mysqli_query($conn, $sql);

	/*while ($rows = mysqli_fetch_assoc($result)) {
		echo $rows['id'];
		echo $rows['username'];
		echo $rows['password'];
		echo $rows['type'];
		echo "<br>";
	}
*/
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Table Show</title>
</head>
<body>

	<table border="1">
		
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Password</th>
			<th>Type</th>
		</tr>

		<?php 

			while ($rows = mysqli_fetch_assoc($result)) {

		 ?>

		 <tr>
		 	<td><?php echo $rows['id'] ?></td>
		 	<td><?php echo $rows['username'] ?></td>
		 	<td><?php echo $rows['password'] ?></td>
		 	<td><?php echo $rows['type'] ?></td>
		 </tr>

		 <?php 
		 	}
		  ?>

	</table>

</body>
</html>



