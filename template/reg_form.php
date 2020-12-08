<div class="Rdiv">
    <form action="" method="post">
    <h1>Registration</h1>
    <?php
if (isset($_POST['login3'])) {
    ?>
         <table>
            <tr>
                <th><label for="Rfname">First name:</label></th>
                <td><input type="text" name="Rfname" id="Rfname" required placeholder="Write first name" ><br></td>
            </tr>
            <tr>
                <th><label for="Rlname">Last name:</label></th>
                <td><input type="text" name="Rlname" id="Rlname" required placeholder="Write last name" ><br></td>
            </tr>

            <tr>
                <th><label for="Rphone">Phone number:</label></th>
                <td><input type="number" name="Rphone" id="Rphone" required  placeholder="Write Phone number" ><br></td>
            </tr>
            <tr>
                <th><label for="Rabout">About you:</label></th>
                <td><input type="text" name="Rabout" id="Rabout" placeholder="Write about you"><br></td>
            </tr>
            <tr>
                <th><label for="Rimage">img:</label></th>
                <td><input type="file" name="Rimage" id="Rimage" title="sa"><br></td>
            </tr>
            <tr>
                <th><label for="pass">Password:</label></th>
                <td><input type="password" name="pass" id="Rpass" required="" title="sa"><br></td>
            </tr>
        </table>


        <label for="Rmale">Male:</label>
            <input type="radio" name="Rmale" required id="Rmale" value="male" >
        <label for="Rfemale">Female:</label>
            <input type="radio" name="Rmale" required  id="Rfemale" value="female" ><br>
        <select name="Rday" id="Rday">
            <?php for ($i = 1; $i <= 31; $i++) {?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php }?>
        </select>
        <select name="Rmounth" id="Rmounth">
            <?php for ($i = 0; $i < count($month); $i++) {?>
                <option value="<?php echo $month[$i]; ?>"><?php echo $month[$i]; ?></option>
            <?php }?>
        </select>
        <select name="Ryear" id="Ryear">
            <?php for ($i = $dateY; $i >= 1940; $i--) {?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php }?>
        </select><br><br>
        <input type="submit" name="end" id="Rsubmit" value="Finsih">
  
        <?php
} 
else if(isset($_POST["end"])){
    ?>
    <input type="submit" value="Finish" name="login" id="Rsubmit">
    
    <?php 
}
else {
    ?>
       <input type="email" required name="email"><span>email registred</span><br>
       <input type="submit" value="Send" name="login1" id="Rsubmit">

<?php }?>
    </form>
</div>