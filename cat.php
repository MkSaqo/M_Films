<?php
include "new.php";
include "connect.php";

$i = 0;
$f = 0;
$filmCount = 2;
if(isset($_GET["page"])){
   $page= $_GET["page"];
}
else{
    $page= 1;

}
if(isset($_GET['Y'])){
    $pageY = $_GET['Y'];
    $limit1=$page*$filmCount-$filmCount;
    $limit2=$page*$filmCount;
    $sql = "SELECT * FROM `kinoner` WHERE `relase` LIKE '%$pageY%'  LIMIT $limit1,$limit2";
    $sql1 = "SELECT COUNT(`id`) FROM `kinoner`  WHERE `relase` LIKE '%$pageY%'";
}
else if(isset($_GET['G'])){
    $limit1=$page*$filmCount-$filmCount;
    $limit2=$page*$filmCount;
    $pageG = $_GET['G'];
    $sql = "SELECT * FROM `kinoner` WHERE `genres` LIKE '%$pageG%'  LIMIT $limit1,$limit2";
    $sql1 = "SELECT COUNT(`id`) FROM `kinoner`  WHERE `genres` LIKE '%$pageG%'";
}
$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(`id`)"];
$conn = mysqli_query($db, $sql);

?>

	<div class="container">
		<div class="index_left">
			<?php
		while ($f++ < $filmCount) {	
			if($result = mysqli_fetch_assoc($conn)){
				include "var_data.php";
				?>
				<article>
					<div class="index_s_l"  onmouseover="a(<?php echo $f-1?>)" onmouseout="b(<?php echo $f-1?>)">
						<a href=film.php?id="<?php echo $id;?>">
							<img class="play" src="nkarner/play.png" alt="">
						</a>
						<img  class="home" src="<?php echo $home_img ?>" alt="">
						
					</div>
					<script>
						function a(a){
							var play =  document.getElementsByClassName("play");
							var home =  document.getElementsByClassName("home");
							play[a].style.zIndex = 1;
							home[a].style.opacity = 0.5;
						}
						function b(a){
							var play =  document.getElementsByClassName("play");
							var home =  document.getElementsByClassName("home");
							play[a].style.zIndex = -1;
							home[a].style.opacity = 1;
						}

					</script>
					<div class="index_s_r">
						<h2><?php echo $name; ?></h2>
						<div class="index_s_r_1">
						<?php
						$arr = [$desc1,$desc2,$desc3,$desc4];
						for($i=0;$i<4;$i++){
							$descArr = explode(":",$arr[$i]);
							if($descArr[1]){?>
							
								<p><b><?php echo $descArr[0]."</b> : ". $descArr[1]; ?></p>
                                <?php }
                        } 
                        $genres = explode(",",$genres);
                        ?>
                        <p><b>Genres : </b> <?php
                        for($i = 0;$i<count($genres);$i++){
                        ?>
                            <a href="genre.php?genre=<?php echo($genres[$i]); ?>"><?php echo($genres[$i]);
                            if($i != count($genres)-1) echo ",";
                            ?></a>
                    
                    <?php 
                        }?>
                        </p>
							
						</div>
						<div class="index_s_r_2">
							<p><b>Status </b> : <?php echo $status; ?></p> 
							<p><b>Time </b> : <?php echo $time; ?></p> 
							<p><b>Budget </b> : <?php echo $budget; ?></p> 
							<p><b>Revenue </b> : <?php echo $revenue; ?></p> 
							<p><b>Year</b> : <?php echo(explode(" ",$relase)[2]); ?></p>
						</div>
						<div class="index_desc">
							<p><b>Description : </b><?php echo substr($desc,0,200); ?><a href="film.php?id=<?php echo $id;?>">.....</a>
						
						</p>
					</div>
					<div class="watch">Watch Now</div>

					</div>
				</article>

			<?php }}?>
			
			<div class="pages">
				<p><?php
                for($i = 1;$i<=ceil($conCount/$filmCount);$i++){
                    ?>
                    <a href="
                    <?php if(isset($pageG)){?>
                    ?G=<?php echo $pageG;
                    }else{?>
                    ?Y=<?php echo $pageY;
                    }
                    ?>&page=<?php echo $i;?>"><span><?php echo $i; ?></span></a>
                
                <?php }?>
				</p>
			</div>
		</div>
		<?php include "right.php" ;?>
	
<?php include "footer.php"?>