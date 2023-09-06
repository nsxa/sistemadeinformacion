<?php
//echo "Hola mundo";
?>
<!DOCTYPE html>

<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">
<link rel="stylesheet" href="my.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	alert("Hola");
	
	$("#registrarse").click(function(){
		
		alert("registrarse");
		});
	
	$("#ingresar").click(function(){
		
		alert("ingresar");
		});
	
});
</script>
</script>

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">darse de alta</label> 
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Correo</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<!-- <input type="submit" class="button" value="Sign In"> -->
					<button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
					
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Olvidaste tu password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Usuario</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repetir Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
				
				<button id="registrarse" type="button" class="btn btn-primary">Registrarse</button>
					<!--<input type="submit" class="button" value="Sign Up">-->
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					
				</div>
			</div>
		</div>
	</div>
</div>

</html>
