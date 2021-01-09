<!DOCTYPE html>
<html>
<title>Bake'n Flake</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://images.unsplash.com/photo-1429554513019-6c61c19ffb7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80");
  min-height: 80%;
}
.mySlides {display:none;}
.menu {
  display: none;
}
.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
</style>

<body>

<!-- Links (sit on top) -->
<div class="w3-top">	
  <div class="w3-row w3-padding w3-black">
  <div class="w3-col s2">
	   <a href="home.html"><img src="img/logo2.png"></a>
    </div>
    <div class="w3-col s2">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s2">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s2">
      <a href="#where" class="w3-button w3-block w3-black">WHERE</a>
	  </div>
	 
	  	
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container " id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag"><h4>We bake for your Tastebuds !!!</h4></span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-family:georgia,garamond,serif;font-size:96px">Bake'n<br>Flake</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-tag"><h4>Your Neighbourhood Bakery.</h4></span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-large">

<!-- About Container -->
<div class="w3-container " id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE BAKERY</span></h5>
    <p><strong>Bake'n Flake</strong> was founded in Bangalore by 7 Extraordinary Boys who had this cravings for these <strong>sweet&savory</strong> delicacy. So one day we thought that lets spread this joy of eating to everyone !! the joy went on spreading and your neighbourhood bakery was established. </p>
    <p>Now, we have a small team of dedicated, hardworking people. Who work in the middle  of the night to service members who are ready to help you with your needs.</p>
    <p>We specialize in hand crafted bread and from scratch pastries and deserts are baked fresh daily.</p>
	<p>We use fresh, natural ingredients and we believe in the product we make and serve.<p>
	<div class="w3-panel w3-leftbar w3-black">
      <p><i>"Located inside the bakery is a specialty food shop with a focus on products that pair well with our baked goods."</i></p>
      <p>Chef, Coffeeist and Owner&Co-founders: <strong><i>"The Reject 7"</i></strong>.</p>
    </div>

    <img src="img/f.jpg" style="width:100%;max-width:1000px" class="w3-margin-top"></img>
  
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container " id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
  
    <div class="w3-row w3-center w3-black w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Eat</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Drink</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card w3-black">
      <h5>Bread Basket</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card w3-black">
      <h5>Coffee</h5>
      <p class="w3-text-grey">Regular coffee ¢20 </p><br>
    
      <h5>Chocolato</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p><br>
    
      <h5>Corretto</h5>
      <p class="w3-text-grey">Whiskey and coffee 5.00</p><br>
    
      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>
    
      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div> 
	<div>
	<p> <strong>For further exclusive menu click here --|
	                                                    |
													< --|</strong></p>
	</div>
	<div class="w3-row w3-padding w3-black">
  <div class="w3-col s6">
	    <a href="login.php" class="w3-button w3-block w3-black">LOGIN</a>
    </div>
    <div class="w3-col s6">
     
	<a href="index.php" class="w3-button w3-block w3-black">SIGNUP</a>
	</div>
	 <!-- /form -->	
    <div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="img/f1.jpg" style="width:100%">
  <img class="mySlides" src="img/f2.jpg" style="width:100%">
  <img class="mySlides" src="img/f3.jpg" style="width:100%">
  <img class="mySlides" src="img/f4.jpg" style="width:100%">
  <img class="mySlides" src="img/f5.jpg" style="width:100%">
  <img class="mySlides" src="img/f6.jpg" style="width:100%">
  <img class="mySlides" src="img/f7.jpg" style="width:100%">
  <img class="mySlides" src="img/f8.jpg" style="width:100%">
  <img class="mySlides" src="img/f9.jpg" style="width:100%">
  
</div>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 3 seconds
}

</script>

 


<!-- Contact/Area Container -->

<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p><srtong>Find us Here!!!!</strong></p>
	
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD8025B8S6G_5PwQtQnXyT0vNpiF5aIGi0'>
			</script><div style='overflow:hidden;height:400px;width:700px;'>
					<div id='gmap_canvas' style='height:400px;width:700px;'>
					</div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
					</div> <a href='https://www.embed-map.net/'>maps generator</a> 
			<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f2771dcc4bc23897df16e25f9f2cf311c32f51b3'></script>
			<script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(12.98196181275622,77.58038175659179),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.98196181275622,77.58038175659179)});infowindow = new google.maps.InfoWindow({content:'<strong>map</strong><br>church street<br>560001 Bangalore<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	<p><strong>ADDRESS:</strong> </p>
	<div class="contact-details">
									
									<p>
										<strong>4560 Church Street, MG Road, 560001, Bangalore.</strong>
									</p>
								</div>
							
								<div class="contact-details">
									<h5>+91-9880819269</h5>
									
								</div>
							
								<div class="contact-details">
									<h5>markalexander388@gmail.com</h5>
									</div>
									  <p><strong>Opening hours:</strong> Everyday from 6am to 5pm.</p>
									
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="action.php" method="post" name="form">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name" id="Name" autocomplete="off"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="Date" value="2019-01-01T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-black" onclick="return validation()">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>



<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();

function validation(){
	if (document.form.Name.value==""){
		alert("Name");
		document.form.Name.focus();
		return false;
	}

function validation()
{


  if (document.form.Name.value == "") {
		alert("Please Enter Your  Name");
		document.form.Name.focus();
		return false;
}
if (!/^[a-zA-Z ]*$/g.test(document.form.Name.value)) {
	alert("Please Enter a Valid Name");
	document.form.Name.focus();
	return false;
}
}

</script>

</body>
</html>
