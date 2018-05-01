<?php 
include "tpl/new.php";
include "tpl/connect.php";
$a = $_GET["id"];
$sql = "SELECT * FROM `kinoner` WHERE `id` = $a ";
$conn = mysqli_query($db,$sql);
$result = mysqli_fetch_assoc($conn) ;
include "tpl/var_data.php";
	
?>
	<div class="container">
		<div class="film_art">
			<div class="film_verev">
				<div class="film_verev_img">
					<img src="<?php echo $home_img ?>">
				</div>
				<div class="film_verev_h1">
					<h1 class="title"><?php echo $name; ?></h1>
				</div>
			</div>
				<div class="film_nergev">
					<div class="film_table">
						<table>
							<tr>
								<th>Жанр :</th>
								<td><?php echo $genres; ?></td>
							</tr>
							<tr>
								<th>Год выпуска :</th>
								<td><?php echo $date; ?></td>
							</tr>
							<tr>
								<th>Страна :</th>
								<td><?php echo $country; ?></td>
							</tr>
							<tr>
								<th>Длительность:</th>
								<td><?php echo $jam; ?></td>
							</tr>
							<tr>
								<th>Просмотр :</th>
								<td><?php echo $prasmotr; ?></td>
							</tr>
							<tr>
								<th>B ролях :</th>
								<td><?php echo $glavni; ?></td>
							</tr>
						</table>
					</div>
					<div class="film_desc">
						<p class="desc"><?php echo $desc; ?></p>
					</div>
				</div>
				<!-- <p> Смотрите здесь</p> -->
		</div>
	</div>


<?php include "tpl/footer.php"; ?>
