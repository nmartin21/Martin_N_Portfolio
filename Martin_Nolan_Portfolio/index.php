<?php



require_once("admin/scripts/load.php");
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$street = $_POST['street'];
$direct = "Thankyou.php";

if($street ==="") {
$sendMail = submitMessage($name, $email, $message, $street, $direct);
//echo "street is empty";
}
}




?>
<!DOCTYPE html>
<html><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">


</head>

<body>
  <div class="logo row large-4 columns">

   <div class="logoWhite large-centered-4 columns">
		     <img src="images/LogoWhite.svg" alt="Logo">
		</div>

	</div>



   	 	<div class="header row large-7 columns">
		
		
		<div class="mainNav large-centered-7 columns">
         <div class="title-bar" data-responsive-toggle = "mainmenu" data-hide-for = "medium">
      <button class="menu-icon" type="button" data-toggle="mainmenu"></button>
      <div class="title-bar-title">Menu</div>

    </div>
			<ul class="dropdown menu" id="mainmenu" data-dropdown-menu>
				<li><a href="index.php">HOME</a></li>
				<li><a href="gallery.html">GALLERY</a></li>
				<li><a href="about.html">ABOUT ME</a></li>
				<li><a href="renderoftheday.html">RENDER OF THE DAY</a></li>
			</ul>
		</div>
        
        
	</div>
	

	 <div class="linegraphic row large-centered-8 columns">

   <svg class="titleline large-centered-8 columns" height="10">
  <line x1="0" y1="0" x2="8000" y2="0" style="stroke:rgb(255,255,255);stroke-width:2" />

</svg>



	</div>






  <div class="reeltitle row large-7 small-12 columns">

    <div class="title1">

		<p>VIDEO REEL</p>

	  </div>

	</div>

  <div class="reelsubtitle row large-5 small-10 columns">

    <div class="title2">

		<p>Cinema4D | Octane | Adobe AE/PS | Fusion 360</p>

	  </div>

	</div>



   <div class="row">
		<div class="reel large-12 small-12 columns">

 <div class="flex-video widescreen vimeo">
  <iframe src="http://player.vimeo.com/video/250743560" width="400" height="325" allowfullscreen style="border:0"></iframe>
</div>


	</div>

	</div>

	 <div class="linegraphic row large-centered-8 columns">

   <svg class="titleline large-centered-8 columns" height="10">
  <line x1="0" y1="0" x2="8000" y2="0" style="stroke:rgb(255,255,255);stroke-width:2" />

</svg>



	</div>



	<div class="reeltext row">

	<div class="info">

			<p> My name is Nolan Martin and I still attend college for Interactive Media Design. This is my video reel of some of the work I have done to date. I feel comfortable doing a variety of works. Motion, Concept Art, 3D or Web Design.  I am most knowledgeable in Cinema 4D and Photoshop but can use a variety of software. I will be posting my work on this site and my artstation. </p>

			</div>



	</div>



<div class="linegraphic row large-centered-8 columns">

   <svg class="titleline large-centered-8 columns" height="10">
  <line x1="0" y1="0" x2="8000" y2="0" style="stroke:rgb(255,255,255);stroke-width:2" />

</svg>



	</div>
	
	
	<div class="Ctitle2 large-12 columns">
	
	<div class="title2">
	
		<p>CONTACT ME</p>
	
		</div>
	
	
	</div>
	
	
	
	
	<form action="contact.php" method="post">
    <div class="firstC row large-12 columns">
	
	<div class="name large-5 columns">
	
		<input type="text" required id="name" name="fullName" size="30" placeholder="Enter your name">
	
		</div>
		
		
		<div class="email large-7 columns">
		
			<input type="email" name="email" size="30" placeholder="Enter your Email">
		
		</div>
	
	</div>
	
	
	
	
	<div class="secondC row large-12 columns">
	
	
	<div class="number large-5 columns">
	
	<input type="text" name="phonenumber" size="30" placeholder="Enter your number">
	
		</div>
		
		
		<div class="reasoning large-7 columns">
		
		<input type="text" name="reason" size="50" placeholder="Enter your reason for contact (Personal, Buisness, ect...)">
		
		</div>
	
	
	
	
	</div>
	
	
	
	<div class="thirdC row large-12 columns">
	
	<div class="comments large-12 columns">
	
	
	
		<textarea type="text" name="comments" cols="30" rows="15" size="250" placeholder="Enter your Comments"></textarea>
	
	
		</div>
	
	 
	</div>
	
	<div class="fourthC row large-12 columns">
	
	<div class="submission large-12 columns">
	
	<input class="submit large-12 columns"name="submit" type="submit" value="Send" />
	
	
		</div>
	
	
	
		</div>

 
    </form>
    
    
    <div class="linegraphic row large-centered-8 columns">

   <svg class="titleline large-centered-8 columns" height="10">
  <line x1="0" y1="0" x2="8000" y2="0" style="stroke:rgb(255,255,255);stroke-width:2" />

</svg>


<div class="footer row large-12">
	   <div class="footerNav large-centered-7 columns">
	     <ul class="menu2" id="footermenu">
	       <li><a href="index.php">HOME</a></li>
	       <li><a href="gallery.html">GALLERY</a></li>
	       <li><a href="about.html">ABOUT ME</a></li>
	       <li><a href="renderoftheday.html">RENDER OF THE DAY</a></li>
         </ul>
       </div>
</div>



<script src="js/template.js"></script>

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
    <script src="js/template.js"></script>
</body>
</html>

