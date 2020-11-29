<?php
    include "tpl/header.php";
    $i = 0;
    $f = 0;
    $filmCount = 6;
    if(isset($_GET['q'])){
    	$q = $_GET['q'];
    }
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        $limit1=$page*$filmCount-$filmCount;
    	$limit2=$page*$filmCount;
    }
    else{
    	$limit1 = 0;
    	$limit2 = $filmCount;
    }
    
    
    $countFilms = Kino::getSearch($db,$q,$limit1,$limit2);
    $countAllFilms = Kino::getCountSearch($db,$q);
    ?>
<div class="container1">
<div class="search">
    <div class="change_js">
        <div class="icon_gallery" onclick="gallery()"></div>
        <div class="icon_spisk" onclick="spisk()"></div>
    </div>
    <?php
        if(strlen($q)>1){
        	$bool=false;
			if(count($countFilms) != 0){
				?>    <h2>Found <?php echo $countAllFilms; ?> matches for your query <span class="green"><?php echo $q; ?></span></h2><?php
        		while ($f < count($countFilms)) {
				$kino = new Kino($countFilms[$f],$db);
					$f++;
					$bool = true;
					include "tpl/article.php";
				}
        	}else{
        		?>
    <h2>No result for <?php echo $q; ?></h2>
    <?php }
        ?>
    <div class="pages">
        <p><?php
            for($i = 1;$i<=ceil($countAllFilms/$filmCount);$i++){?>	
            <a href="?q=<?php echo $q;?>&page=<?php echo $i;?>"><span><?php echo $i; ?></span></a>
            <?php }?>
        </p>
    </div>
    <?php }else{?>
    <h2>Minimum length is 2 </h2>
    <?php }?>
</div>
<?php include "tpl/right.php" ;?>
<?php include "tpl/footer.php"?>