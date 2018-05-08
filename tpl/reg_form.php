<div class="Rdiv">
    <form action="" method="post">
        <table>
            <tr>
                <th><label for="Rfname">First name:</label></th>
                <td><input type="text" name="Rfname" id="Rfname" placeholder="Write first name" ><br></td>
            </tr>
            <tr>
                <th><label for="Rlname">Last name:</label></th>
                <td><input type="text" name="Rlname" id="Rlname" placeholder="Write last name" ><br></td>
            </tr>
        
            <tr>
                <th><label for="Rphone">Phone number:</label></th>
                <td><input type="number" name="Rphone" id="Rphone" placeholder="Write Phone number" ><br></td>
            </tr>
            <tr>
                <th><label for="Rabout">About you:</label></th>
                <td><input type="text" name="Rabout" id="Rabout" placeholder="Write about you"><br></td>
            </tr>
            <tr>
                <th><label for="Rimage">img:</label></th>
                <td><input type="file" name="Rimage" id="Rimage" title="sa"><br></td>
            </tr>
        </table>

    
        <label for="Rmale">Male:</label>
            <input type="radio" name="Rmale" id="Rmale" value="male" >
        <label for="Rfemale">Female:</label>
            <input type="radio" name="Rmale" id="Rfemale" value="female" ><br>
        <select name="Rday" id="Rday">
            <?php for ($i = 1; $i <= 31; $i++) {?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php }?>
        </select>
        <select name="Rmounth" id="Rmounth">
            <?php for ($i = 0; $i <count($month); $i++) {?>
                <option value="<?php echo $month[$i]; ?>"><?php echo $month[$i]; ?></option>
            <?php }?>
        </select>
        <select name="Ryear" id="Ryear">
            <?php for ($i = $dateY; $i >=1940; $i--) {?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php }?>
        </select><br><br>

        <table>
            <tr>
                <th> <label for="Rmail">Email:</label></th>
                <td><input type="email" name="Rmail" id="Rmail" placeholder="Write Email"></td>
            </tr>
            <tr>
                <th><label for="Rpass">Passworld:</label></th>
                <td><input type="password" name="Rpass" id="Rpass"><br></td>
            </tr>
            <tr>
        
        </table>
        
            
        <?php if(isset($_POST["Rsend"])){ ?>
            <input type="submit" name="Rend" id="Rend" value="Register">
        <?php } else {?>

        <input type="submit" name="Rsend" id="Rsubmit" value="send">
        <?php } ?>
    </form>
</div>