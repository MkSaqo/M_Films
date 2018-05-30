<?php
include "tpl/header.php";
include "tpl/connect.php";
$link = $_SESSION['link'];
$root = $_SESSION['login'];
?>

	<div class="container1">
		<div class="index_left">
            <?php
            if (isset($_SESSION["login"])) {
                include "tpl/insert_form.php";
                if (isset($_POST['insert'])) {
                    $count = 0;
                    $home_img = "nkarner/" . $_FILES['home_img']["name"];
                    $home_img_url = $_FILES['home_img']["tmp_name"];
                    if($home_img_url){
                        $count++;
                    }
                    $ten_images = $_FILES["ten_images"]["name"];
                    $ten_images_url = $_FILES['ten_images']["tmp_name"];
                    if(count($ten_images)==10){
                        $nkar1 = "nkarner/".$ten_images[1];
                        $nkar2 = "nkarner/".$ten_images[2];
                        $nkar3 = "nkarner/".$ten_images[3];
                        $nkar4 = "nkarner/".$ten_images[4];
                        $nkar5 = "nkarner/".$ten_images[5];
                        $nkar6 = "nkarner/".$ten_images[6];
                        $nkar7 = "nkarner/".$ten_images[7];
                        $nkar8 = "nkarner/".$ten_images[8];
                        $nkar9 = "nkarner/".$ten_images[9];
                        $nkar10 = "nkarner/".$ten_images[10];
                        $count++;
                    }
                    if($_FILES["glavnin1"]["name"]){
                        $gname = explode(".",$_FILES["glavnin1"]["name"]);
                        $co = count($gname)-1;
                        $glavni1 =  preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST["glavni1"]);
                        $glavnin1 = "nkarner/".$glavni1.".".$gname[$co];
                        $glavnin1_url = $_FILES['glavnin1']["tmp_name"];
                    }
                    if($_FILES["glavnin2"]["name"]){
                        $gname = explode(".",$_FILES["glavnin2"]["name"]);
                        $co = count($gname)-1;
                        $glavni2 =  preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST["glavni2"]);
                        $glavnin2 = "nkarner/".$glavni2.".".$gname[$co];
                        $glavnin2_url = $_FILES['glavnin2']["tmp_name"];
                    }
                    if($_FILES["glavnin3"]["name"]){
                        $gname = explode(".",$_FILES["glavnin3"]["name"]);
                        $co = count($gname)-1;
                        $glavni3 =  preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST["glavni3"]);
                        $glavnin3 = "nkarner/".$glavni3.".".$gname[$co];
                        $glavnin3_url = $_FILES['glavnin3']["tmp_name"];
                    }
                    if($_FILES["glavnin4"]["name"]){
                        $gname = explode(".",$_FILES["glavnin4"]["name"]);
                        $co = count($gname)-1;
                        $glavni4 =  preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST["glavni4"]);
                        $glavnin4 = "nkarner/".$glavni4.".".$gname[$co];
                        $glavnin4_url = $_FILES['glavnin4']["tmp_name"];
                    }
                    if($_FILES["glavnin5"]["name"]){
                        $gname = explode(".",$_FILES["glavnin5"]["name"]);
                        $co = count($gname)-1;
                        $glavni5 =  preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST["glavni5"]);
                        $glavnin5 = "nkarner/".$glavni5.".".$gname[$co];
                        $glavnin5_url = $_FILES['glavnin5']["tmp_name"];
                    }
                    if($_POST['name']){
                        $name = $_POST['name'];
                        $count++;
                    }
                    if($_POST['desc1']){
                        $desc1 = $_POST['desc1'];
                        $count++;
                    }
                    if($_POST['desc2']){
                        $desc2 = $_POST['desc2'];
                        $count++;
                    }
                    if($_POST['desc3']){
                        $desc3 = $_POST['desc3'];
                        $count++;
                    }
                    if($_POST['desc4']){
                        $desc4 = $_POST['desc4'];
                        $count++;
                    }
                    if($_POST['desc']){
                        $desc = preg_replace('/[^\p{L}\p{N}\s]/u', '', $_POST['desc']);
                        $count++;
                    }
                    if($_POST['status']){
                        $status = $_POST['status'];
                        $count++;
                    }
                    if($_POST['time']){
                        $time = $_POST['time'];
                        $count++;
                    }
                    if($_POST['budget']){
                        $budget = $_POST['budget'];
                        $count++;
                    }
                    if($_POST['revenue']){
                        $revenue = $_POST['revenue'];
                        $count++;
                    }
                    if($_POST['genres']){
                        $genres = $_POST['genres'];
                        $count++;
                    }
                    if($_POST['lang']){
                        $lang = $_POST['lang'];
                        $count++;
                    }
                    if($_POST['relase1']){
                        $relase1 = $_POST['relase1'];
                        $count++;
                    }
                    if($_POST['trailer']){
                        $trailer = $_POST['trailer'];
                        $count++;
                    }
                    if($_POST['relase2']){
                        $relase2 = $_POST['relase2'];
                        $count++;
                    }
                    
                    
                        
                    if($count >= 13){
                        if($glavnin1) move_uploaded_file($glavnin1_url,$glavnin1); else $glavnin1 = "nkarner/noimg2.jpg";
                        if($glavnin2) move_uploaded_file($glavnin2_url,$glavnin2); else $glavnin2 = "nkarner/noimg2.jpg";
                        if($glavnin3) move_uploaded_file($glavnin3_url,$glavnin3); else $glavnin3 = "nkarner/noimg2.jpg";
                        if($glavnin4) move_uploaded_file($glavnin4_url,$glavnin4); else $glavnin4 = "nkarner/noimg2.jpg";
                        if($glavnin5) move_uploaded_file($glavnin5_url,$glavnin5); else $glavnin5 = "nkarner/noimg2.jpg";
                        for($i=0;$i<count($ten_images);$i++){
                            move_uploaded_file($ten_images_url[$i],"nkarner/".$ten_images[$i]);   
                        }
                        move_uploaded_file($home_img_url, $home_img);
                        $sql = "INSERT INTO `kinoner`
                        (`name`, `desc`, `desc1`, `desc2`, `desc3`, `desc4`,
                         `glavnin0`, `glavnin1`, `glavnin2`, `glavnin3`, `glavnin4`, 
                         `glavni0`, `glavni1`, `glavni2`, `glavni3`, `glavni4`,
                          `home_img`, `status`, `relase`,`time`, `budget`, `revenue`, `genres`, `trailer`, 
                          `nkar1`, `nkar2`, `nkar3`,`nkar4`, `nkar5`, `nkar6`, `nkar7`, `nkar8`, `nkar9`, `nkar10`,
                           `lang`,`from`,`comments`)
                           VALUES (
                           '$name','$desc','$desc1','$desc2','$desc3','$desc4',
                           '$glavnin1','$glavnin2','$glavnin3','$glavnin4','$glavnin5',
                           '$glavni1','$glavni2','$glavni3','$glavni4','$glavni5',
                           '$home_img','$status','$relase1,$relase2','$time','$budget','$revenue','$genres','$trailer',
                           '$nkar1','$nkar2','$nkar3','$nkar4','$nkar5','$nkar6','$nkar7','$nkar8','$nkar9','$nkar10',
                           '$lang','$root','')";

                           mysqli_query($db,$sql);
                    }
                }

            } else {
                header("Location: home.php");
            }
?>
		</div>
<?php include "tpl/right.php";?>
<?php include "tpl/footer.php"?>