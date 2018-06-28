<html>
<head>
<title>Login User</title>
<link rel="stylesheet" href="style/style_login.css" type="text/css"  />

<script src="JQuery-UI-1.8.17.custom/jquery-1.8.0.min.js"></script>
<script src="JQuery-UI-1.8.17.custom/jquery-validation.js"></script>
</head>

  <form id="login" name="login" method="POST" action="login.php"> 
    <h1>Login USer</h1>   
    <div>
    	<label for="username">Username</label> 
    	<input type="text" name="username" id="username" class="field required" title="Username harus di isi" />
    </div>			
    <div>
    	<label for="password">Password</label>
    	<input type="password" name="password" id="password" class="field required" title="Password harus di isi" />
    </div>			 
    <div class="submit"><button type="submit">Login</button></div>   
    </form>	
	
</html>