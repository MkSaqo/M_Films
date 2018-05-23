<!-- ___________________________FOOTER____________________________ -->
		
			<div class="footer">
				<div class="login">
					
				<?php
					$href =explode('?',$_SERVER["REQUEST_URI"])[0];
					if( $href !=  "/m_films/login.php"){
						?>
						<form action="login.php" method="get">
							<?php if(isset($_SESSION["login"])){ ?>
								<input type="submit" name = "logouted"  value="Log Out">							
							<?php } else { ?>
								<input type="submit" value="Log In">
							<?php } ?>
						</form>
						<?php

					}
				?>
				</div>
				<br>
				<p>© 2017</p>
				<p>Սարգիս Մկրտչյան</p>
				<br>
			</div>
		</div><!-- __________________STTE_DIV__END___ ____________________-->
		<script>
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
			var spisk = document.getElementsByClassName("art_spisk");
			var i = 0;
			while(i<spisk.length){
				spisk[0].className ="art_gallery";
			}
			
		}
		function spisk(){
			var gallery = document.getElementsByClassName("art_gallery");
			var i = 0;
			while(i<gallery.length){
				gallery[0].className ="art_spisk";
			}
			
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
