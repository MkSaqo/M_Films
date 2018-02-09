<?php include "tpl/new.php" ?>
	<?php 
	$db = mysqli_connect('localhost','root','root','Filmer');
	mysqli_set_charset($db,"utf8");
	$sql = "SELECT * FROM `kinoner`";
	$conn = mysqli_query($db,$sql);
	$i = 0;
?>
	<div class="container">
<?php
	while(++$i<10){
		$result = mysqli_fetch_assoc($conn) ;
		$id = $result["id"];
		$name = $result["name"];
		$country = $result["country"];
		$genres = $result["genres"];
		$date = $result["date"];
		$desc = $result["desc"];
		$home_img = $result["home_img"];
		$url = $result["url"];
	?>
	<article>
		<div class="f_left">
			<img src="<?php echo $home_img; ?>">
		</div>
		<div class="f_right">
			<table>
				<tr>
					<th>Название</th>
					<td>
						<a href="film.php?id=<?php echo $id?>"><?php echo "$name"; ?></a>
					</td>
				</tr>
				<tr>
					<th>Год</th>
					<td><?php echo "$date"; ?></td>
				</tr>
				<tr>
					<th>Страна</th>
					<td><?php echo "$country"; ?></td>
				</tr>
				<tr>
					<th>Жанр</th>
					<td><?php echo "$genres"; ?></td>
				</tr>
				<tr>
					<th>Про фильм</th>
					<td><?php echo "$desc"; ?></td>
				</tr>
			</table>
		</div>
	</article>

	<?php } ?>
</div>
<?php include "tpl/footer.php" ?>