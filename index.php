<?php
include "tpl/new.php";
include "tpl/connect.php";

$sql = "SELECT * FROM `kinoner`";
$conn = mysqli_query($db, $sql);
$i = 0;
?>
	<div class="container">
	<?php
$i = 0;
while ($i++ < 4) {
    $result = mysqli_fetch_assoc($conn);
    include "tpl/var_data.php";
    ?>
		<article>
			<div class="f_left">
				<a href="film.php?id=<?php echo $id; ?>">
					<img src="<?php echo $home_img; ?>">
				</a>
			</div>
			<div class="f_right">
						<h1 class="inl">
							<a href="film.php?id=<?php echo $id ?>"><?php echo "$name"; ?></a>
						</h1>
				<table>
					<tr>
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

		<?php }?>
	</div>
<?php include "tpl/footer.php"?>