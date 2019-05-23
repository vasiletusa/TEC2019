<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head></head><body>
<!--?php include('head.php') ?-->
<?php
include_once 'server.php'?>
<form method="post" action="login.php" class="col-9 col-sm-5 col-esm-5">						
						</div>
						
						<div class="1">
							<label for="username" class="label username">Username</label>
							<input id="username" type="text" name="username" class="input username" placeholder="Username">
						
						</div>
						<div class="2">
							<label for="password" class="label password">Password</label>
							<input id="password" type="password" name="password" class="input passoword" placeholder="********">
						</div>
						
						<button type="submit" class="button" name="login_utente">Login</button>
					</form>
					<?php include('footer.php') ?>
