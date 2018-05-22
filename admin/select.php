<?php 
$db = mysqli_connect('localhost','root','root','Filmer');
mysqli_set_charset($db, "utf8");
$sql = "SELECT * FROM `kinoner` ORDER BY `id` DESC";
$dbsql = mysqli_query($db,$sql);
?>

<form class="select" method="post" action="action.php">
	<table>
		<tr>
			<th>name</th>
			<th>country</th>
			<th>genres</th>
			<th>date</th>
			<th>url</th>
			<th>home_img</th>
			<th>desc</th>
		</tr>
		
	<?php while($result  = mysqli_fetch_assoc($dbsql)) {?>
		<tr>
			<td><?php echo $result['name'] ?></td>
			<td><?php echo $result['country'] ?></td>
			<td><?php echo $result['genres'] ?></td>
			<td><?php echo $result['date'] ?></td>
			<td><?php echo $result['url'] ?></td>
			<td><?php echo $result['home_img'] ?></td>
			<td class="desc"><?php echo $result['desc'] ?></td>
			<td>
				<button class="remove">
					<a href="home.php?action=remove&id=<?php echo $result['id'] ?>">Dellete</a>
				</button>
	
				<button class="update">
					<a href="update.php?id=<?php echo $result['id'] ?>"> Update</a>
				</button>
	
			</td>
		</tr>
		<?php } ?>
		
	</table>
</form>

