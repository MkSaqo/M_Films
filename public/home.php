<?php
include "../template/header2.php";
// die();
$filmPage = 6;
if(isset($_GET['page'])) $page = $_GET['page'];
else $page=1;

$countFilms =Kino::getCountFilms($db);
$a = $countFilms -  $page*$filmPage+$filmPage;

		
?>
	<div class="container1">
		<div class="index_left">
			<div class="change_js">
				<div class="icon_gallery" onclick="gallery()"></div>
				<div class="icon_spisk" onclick="spisk()"></div>
			</div>
			<?php
			$f=0;
				for ($i=$a-1; $i >$a-$filmPage-1 ; $i--) { 
					$kino = new Kino($i);
					include "../template/article.php";
					$f++;
				}
			?>
			
			<div class="pages">
				<p><?php
				for($i = 1;$i<=ceil($countFilms/$filmPage);$i++){?>	
					<a href="?page=<?php echo $i;?>"><span><?php echo $i; ?></span></a>
				<?php }?>
				</p>
			</div>	
		</div>
<?php include "../template/right.php"; ?>
<?php include "../template/footer.php"; ?>