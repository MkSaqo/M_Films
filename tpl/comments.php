<div class="comments">
    <form action="">
        <div class="textarea">
            <textarea name="" id="" ></textarea>
        </div><br>  
        <button class="com_sub" type="submit" >Send</button><br><br><br>
    </form>
    <div class="us_com">
        <?php 
        $comm = explode(",,>>",$comm);
        for($i = 1;$i<count($comm);$i++){
            $comm2 = explode(",,<<",$comm[$i]);
            ?>
            <div class="us_coms">
                <?php echo $comm2[0];?>
                <?php echo $comm2[1];?>
            </div>
            <?php
        }
        pre($comm);?>
    </div>
</div>