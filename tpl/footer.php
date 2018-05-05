<!-- ___________________________FOOTER____________________________ -->
			
			<div class="footer">
				<div class="login">
					
				<?php
					$href =explode('?',$_SERVER["REQUEST_URI"])[0];
					if( $href !=  "/m_films/login.php"){
						?>
						<form action="login.php" method="get">
							<?php if($_SESSION['login']){ ?>
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
	</body>
</html>
