			<?php 
			$_SESSION["link"] = explode("/",$_SERVER["SCRIPT_NAME"])[2];
			
			?>
			<div class="footer">
				<div class="login">
				<?php if(isset($_SESSION["login"])){ ?>
					<p class="ib"><a href="admin.php"> Append film</a></p>
					<form class="ib" method="post" action="tpl/login_check.php">
						<input type="submit" value="Log out" name="logout">
					</form>
					<?php } else{?>
					
					<p class="p_login"><b> Log In</b></p>
					<a href="reg.php"><p class="p_login"> Register</p></a>
					<form method="post" action="tpl/login_check.php">
						<input name="Lmail" type="text" placeholder="Email">
						<input name="Lpass" type="password" placeholder="Passworld">
						<input name="login" type="submit" value = "Log In">
					</form>
					<?php }	
					
					?>
				</div>
				<br>
				<p>© <?php echo date("Y") ?></p>
				<p>Սարգիս Մկրտչյան</p>
				
					<div id="cb"></div>
			</div>
		</div>
		<script>
		function right(){
			var img  = document.getElementById("playerImg");
			if(i>9){
				i=0;
			}
			img.src = images[i];
			i++;
		}
		function left(){
			var img  = document.getElementById("playerImg");
			if(i<0){
				i=9;
			}
			img.src = images[i];
			i--;
		}
		function a2(a){
			var play =  document.getElementsByClassName("right_play");
			var home =  document.getElementsByClassName("right_imgs");
			play[a].style.zIndex = 1;
			home[a].style.opacity = 0.5;
		}
		function b2(a){
			var play =  document.getElementsByClassName("right_play");
			var home =  document.getElementsByClassName("right_imgs");
			play[a].style.zIndex = -1;
			home[a].style.opacity = 1;
		}
		function a1(a){
			var play =  document.getElementsByClassName("header_play");
			var home =  document.getElementsByClassName("verjin_filmer_img");
			play[a].style.zIndex = 1;
			home[a].style.opacity = 0.5;
		}
		function b1(a){
			var play =  document.getElementsByClassName("header_play");
			var home =  document.getElementsByClassName("verjin_filmer_img");
			play[a].style.zIndex = -1;
			home[a].style.opacity = 1;
		}

		function gallery(){
			setTimeout(function() {
				var spisk = document.getElementsByClassName("art_spisk");
				var i = 0;
				while(i<spisk.length){
					spisk[0].className ="art_gallery";
				}
			}, 300);
		}
		function spisk(){
			setTimeout(function() {
				
				var gallery = document.getElementsByClassName("art_gallery");
				var i = 0;
				while(i<gallery.length){
					gallery[0].className ="art_spisk";
				}
			}, 300);
			
		}
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
	</body>
</html>
