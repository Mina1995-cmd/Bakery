<!DOCTYPE html >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://images.unsplash.com/photo-1549592406-47076c45cd02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

#login-form{ 

background:#f44242; 
border: 3 px solid #eeeee; 
padding:10px 10px;
 width:300px; 
 border-radius:5px;
 position: absolute;
  left: 500px;
  top: 150px;
}
.text {
  background-color: white ;
  color: salmon;
  font-size: 5vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 90%;
  text-align: top;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}

</style>
<script>
function validation()
{


  if (document.form.user_id.value == "") {
		alert("Please Enter Your Company Name");
		document.form.user_id.focus();
		return false;
}
if (!/^[a-zA-Z ]*$/g.test(document.form.user_id.value)) {
	alert("Please Enter a Valid Name");
	document.form.user_id.focus();
	return false;
}
}
</script>
<title>Bake'n Flake</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body id="body_bg">


<div class="bg">

<div <div align="center">


<div class="image-container">
  <div class="text">Bake'n Flake Login</div>
</div>




    <form id="login-form" method="post" action="log.php" name="form">
        <table border="0.5" >
            <tr>
                <td><label for="user_id">User Name:</label></td>
                <td><input type="text" name="user_id" id="user_id" required></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password:</label></td>
                <td><input type="password" name="user_pass" id="user_pass" required></input></td>
            </tr>
			 <tr>
				
                <td><input type="submit" value="Submit" onclick="return validation()"/>
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>
		<p>If It's your first time please click here:<p>
	
    </form>
	</div>
		
</div>
</body>
</html>