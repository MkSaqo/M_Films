<div class="insert">
    <h1>Welcome <?php echo $_SESSION['login']; ?></h1>
<form method="post" enctype="multipart/form-data">
    <?php 
    // $sql = "SELECT * FROM `kinoner`";
    // $r = mysqli_fetch_assoc(mysqli_query($db,$sql));
    // pre($_FILES);
    // pre($_POST);    
    ?>
    <div class="insert_left">
        <span> name :</span><input required type="text" name="name"  placeholder="name"><br>
        <span> desc1 :</span><input type="text" name="desc1" placeholder="desc1" ><br>
        <span> desc2 :</span><input type="text" name="desc2" placeholder="desc2" ><br>
        <span> desc3 :</span><input type="text" name="desc3" placeholder="desc3" ><br>
        <span> desc4 :</span><input type="text" name="desc4" placeholder="desc4" ><br>
        <span> desc :</span><textarea required name="desc"  placeholder="desc" ></textarea>
    </div>
    <div class="insert_right">
        <span> status :</span><input required type="text" name="status" placeholder="status"><br>
        <span> time :</span><input required type="text" name="time" placeholder="time"><br>
        <span> budget :</span><input required type="text" name="budget" placeholder="budget"><br>
        <span> revenue :</span><input required type="text" name="revenue" placeholder="revenue"><br>
        <span> genres :</span><input required type="text" name="genres" placeholder="genres"><br>
        <span> lang :</span><input required type="text" name="lang" placeholder="lang"><br>
        <span> video enbed code :</span><input required type="text" name="trailer" placeholder="video enbed code"><br>
        <span> relase month,day :</span><input required type="text" name="relase1" placeholder="relase month,day"><br>
        <span> relase year :</span><input required type="text" name="relase2" placeholder="relase year"><br>
    </div>
    <div class="insert_glavn">    
        <span>Top Biled Cast Name 1</span><input required type="text" name="glavni1" placeholder="Top Biled Cast Name 1"><span class="insert_glavnn">Top Biled Cast image 1</span><input type="file" name="glavnin1"><br>
        <span>Top Biled Cast Name 2</span><input required type="text" name="glavni2" placeholder="Top Biled Cast Name 2"><span class="insert_glavnn">Top Biled Cast image 2</span><input type="file" name="glavnin2"><br>
        <span>Top Biled Cast Name 3</span><input required type="text" name="glavni3" placeholder="Top Biled Cast Name 3"><span class="insert_glavnn">Top Biled Cast image 3</span><input type="file" name="glavnin3"><br>
        <span>Top Biled Cast Name 4</span><input required type="text" name="glavni4" placeholder="Top Biled Cast Name 4"><span class="insert_glavnn">Top Biled Cast image 4</span><input type="file" name="glavnin4"><br>
        <span>Top Biled Cast Name 5</span><input required type="text" name="glavni5" placeholder="Top Biled Cast Name 5"><span class="insert_glavnn">Top Biled Cast image 5</span><input type="file" name="glavnin5"><br>
    </div>
    <div class="home_ten">
        <span>10 Images slide </span><input type="file" name="ten_images[]" required multiple>
        <span>Main Picture</span><input type="file" name="home_img" required>
    </div>

    <input type="submit" class="insert_submit" name="insert" value="add">
</form>
    </div>
