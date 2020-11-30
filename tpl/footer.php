	<?php 
			$_SESSION["link"] = explode("/",$_SERVER["SCRIPT_NAME"])[2];
			?>
			<div class="footer">
				<div class="login footer-form">
				<?php if(isset($_SESSION["login"])){ 
				?>
				<h3 id="usrname">Logged by <?php echo $_SESSION["login"]; ?> </h3>
					<a href="admin.php" class="ib" > <input type="button" value="Append film"></a>
					<form class="ib" method="post" action="tpl/login_check.php">
						<input type="submit" value="Log out" name="logout">
					</form>
					<?php } else{?>
					
					<form method="post" class="" action="tpl/login_check.php">
						<input required class="ffi" name="Lmail" type="text" placeholder="Email">
						<input required class="ffi" name="Lpass" type="password" placeholder="Passworld">
						<input class="ffs" name="login" type="submit" value = "Log In">
						<a href="reg.php" > <input class="ffsr" type="button" value="Register"></a>
					</form>
					<?php }	
					
					?>
				</div>
				<br>
				<p>© <?php echo date("Y") ?></p>
				<p>Սարգիս Մկրտչյան</p>
				<a href="./noitcelfer"><p></p>Game Noitchelfer</p></a>
				<a href="./superHeroes"><p></p>Site superHeroes</p></a>
					<div id="cb"></div>
			</div>
		<script>


		
		function left(){
			var img  = document.getElementById("playerImg");
			if(i>=9){
				i=0;
			}
			i++;
			img.src = images[i];
		}
		function right(){
			var img  = document.getElementById("playerImg");
			if(i<=0){
				i=9;
			}
			i--;
			img.src = images[i];
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
					$('.art_gallery').attr('data-aos',"a");
				}
			}, 300);
		}
		function spisk(){
			setTimeout(function() {
				
				var gallery = document.getElementsByClassName("art_gallery");
				var i = 0;
				while(i<gallery.length){
					gallery[0].className ="art_spisk";
					$('.art_gallery').attr('data-aos',"fade-right");
				}
			}, 300);
			
		}
		function a(a,name,home,show){
			var play =  document.getElementsByClassName(name);
			var home =  document.getElementsByClassName(home);
			if (show){
				play[a].style.zIndex = 1;
				home[a].style.opacity = 0.5;
			}
			else{
				play[a].style.zIndex = -1;
				home[a].style.opacity = 1;

			}
		}
  AOS.init();


	</script>
	</body>
</html>

