<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
</style>
<script>
function validation()
{


  if (document.form.name.value == "") {
		alert("Please Enter Your Company Name");
		document.form.name.focus();
		return false;
}
if (!/^[a-zA-Z ]*$/g.test(document.form.name.value)) {
	alert("Please Enter a Valid Name");
	document.form.name.focus();
	return false;
}
}
</script>
<body>
<h1>Signup</h1>
<form action="insert.php" method="post">
Name: <input type="text" name="name" id="name" required/><br><br>
Password: <input type="password" name="Password" required/><br><br>
Email: <input type="email" name="email" required/><br><br>
 
<input type="submit" />
</form>
</body>
</html>