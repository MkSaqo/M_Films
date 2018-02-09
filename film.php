<?php include "tpl/new.php" ?>
<?php 
	$db = mysqli_connect('localhost','root','root','Filmer');
	mysqli_set_charset($db,"utf8");
	$sql = "SELECT * FROM `kinoner` WHERE `id` = $_GET[id] ";
	$conn = mysqli_query($db,$sql);
	$result = mysqli_fetch_assoc($conn) ;

	$name = $result["name"];
	$date = $result["date"];
	$country = $result["country"];
	$genres = $result["genres"];
	$desc = $result["desc"];
	$home_img = $result["home_img"];
	$url = $result["url"];
?>

	<div class="container">
		<article>
			<a href="<?php echo "$url"; ?>">
				<p> Смотрите здесь</p>
			</a>
		</article>

	</div>


<?php include "tpl/footer.php" ?>