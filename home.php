<?php
include "tpl/header2.php";
require 'class/HomeFilm.php';
$i = 0;
$f = 0;
$filmCount = 6;
if(isset($_GET['page'])) $page = $_GET['page'];
else $page=1;
$kino = new HomeFilm($page);
?>
	<div class="container1">
		<div class="index_left">
			<div class="change_js">
				<div class="icon_gallery" onclick="gallery()"></div>
				<div class="icon_spisk" onclick="spisk()"></div>
			</div>
			<?php
		while ($f++ < $filmCount) {	
			if($result = mysqli_fetch_assoc($kino->getData1())){
				include "tpl/var_data.php";
				include "tpl/article.php";
			}}?>
			
			<div class="pages">
				<p><?php
				for($i = 1;$i<=ceil($kino->getCount()/$filmCount);$i++){?>	
					<a href="?page=<?php echo $i;?>"><span><?php echo $i; ?></span></a>
				<?php }?>
				</p>
			</div>	
		</div>
<?php include "tpl/right.php"; ?>
	</div>
<?php include "tpl/footer.php"; ?>