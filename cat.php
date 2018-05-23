<?php
include "tpl/header.php";
include "tpl/connect.php";

$i = 0;
$f = 0;
$filmCount = 6;
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
            if(isset($pageG) || isset($pageY)){
                while ($f++ < $filmCount) {	
                    if($result = mysqli_fetch_assoc($conn)){
                        include "tpl/var_data.php";
                        include "tpl/article.php";
                        ?>
                        
                <?php }}}else{ ?>
                <h2>No selected category</h2>
                <?php } ?>
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
<?php include "tpl/right.php" ;?>
<?php include "tpl/footer.php"?>