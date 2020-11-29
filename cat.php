<?php
    include "tpl/header.php";
    
    $i = 0;
    $f = 0;
    $filmCount = 6;
    if(isset($_GET["page"])) {
    
    $page= $_GET["page"];
    } 
    else{
    
    $page= 1;
    } 
    
    if(isset($_GET['Y'])){
        $page1 = $_GET['Y'];
        $why = "relase";
        $limit1=$page*$filmCount-$filmCount;
        $limit2=$page*$filmCount;
    }
    
    else if(isset($_GET['G'])){
        $limit1=$page*$filmCount-$filmCount;
        $limit2=$page*$filmCount;
        $page1 = $_GET['G'];
        $why = "genres";
    }
        $countFilms = Kino::getCountCategory($db,$why ,$page1);
        $categoryCount = Kino::getCategory($db,$why,$page1,$limit1,$limit2);
    ?>
<div class="container1">
<div class="index_left">
    <?php if($countFilms !=0){
        ?>
    <div class="change_js">
        <div class="icon_gallery" onclick="gallery()"></div>
        <div class="icon_spisk" onclick="spisk()"></div>
    </div>
    <?php
        if(isset($page)){
            ?><h2>Number of movies found: <?php echo($countFilms) ?></h2><?php
            while ($f < count($categoryCount)) {
            $kino = new Kino($categoryCount[$f],$db);
                if($kino){
                    include "tpl/article.php";
                    $f++;
                    ?>
    <?php }
    }
}?>
    <div class="pages">
        <p><?php
            for($i = 1;$i<=ceil($countFilms/$filmCount);$i++){
                ?>
            <a href="<?php echo $_SERVER['REQUEST_URI'].'&page='.$i?>">
            <span><?php echo $i; ?></span></a>
            <?php }?>
        </p>
    </div>
    <?php }else{?>
    <h2>No selected category or no film found</h2>
    <?php } ?>
</div>
<?php include "tpl/right.php" ;?>
<?php include "tpl/footer.php"?>