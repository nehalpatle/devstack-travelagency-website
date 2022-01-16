<!DOCTYPE html>
<html>
    <head>
        <title>
            DREAM WORLD TRAVEL AGENCY
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      .nav-item:hover{border-bottom: 2px solid rgb(252, 3, 15);transition: 1.5s;}
    .dropdown-item:hover{background-color: rgb(14, 237, 237);}
    h1,h5 {
  text-shadow: 0 0 15px rgb(233, 234, 240);
}

#fd{
  width: 100%;
  height: 470px;
}


div.desc {
  padding: 15px;
  text-align: center;
}

  </style>
    </head>
    <?php
  if(isset($_POST['submit'])){

                                    include_once 'dbtrav.php';
                                    include_once 'dBtravcon.php';

                                    $dbObj = new Travellor($DB_con);
                                    $fname=$_POST['fname'];
                                    $email=$_POST['email'];
                                    $mobile=$_POST['mobile'];
                                    $date=$_POST['date'];
                                    $code=$_POST['code'];
                                    
                                
                                         $dbObj->addTravellor($fname,$email,$mobile,$date,$code);
                          

                                }
   ?>

    <body>
        <div>
        <section>
	<div><nav class="navbar navbar-expand-md  fixed-top" style="padding: 8px 0px 6px 6px;">
		<ul class="navbar-nav">
      <li class="navbar-brand"><img src="nm.png" width="40px" height="35px" style="border:1px solid white;border-radius:25px"></li>
			<li class="navbar-brand" style="font-weight:bold;color:black"><b>DWT Agency</b></li>
			<li class="nav-item" style="margin-left: 650px;color: black">
				<a class="nav-link" href="#home" style="color: black;font-weight:bold"><b>HOME</b></a>
			</li>
            <li class="nav-item dropdown" style="margin-left: 30px;">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: black;font-weight:bold"><b>TRAVEL PACKS</b></a>
                <div class="dropdown-menu">
          <a class="dropdown-item" href="#mum" style="margin-left: -7px;"><b>MUMBAI-GOA</b></a>
          <a class="dropdown-item" href="#go" style="margin-left: -7px;"><b>GOA-MUMBAI</b></a>
          <a class="dropdown-item" href="#dw" style="margin-left: -7px;"><b>KEDARNATH-DWARKA</b></a>
          <a class="dropdown-item" href="#kd" style="margin-left: -7px;"><b>DWARKA-KEDARNATH</b></a>
          <a class="dropdown-item" href="#pan" style="margin-left: -7px;"><b>RAMESHWARAM-PANAJI</b></a>
          <a class="dropdown-item" href="#rsm" style="margin-left: -7px;"><b>PANAJI-RAMESHWARAM</b></a>
        </div>
			</li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="margin-left: 28px;color: black;font-weight:bold"><b>
         SERVICES</b></a>
         <div class="dropdown-menu">
          <a class="dropdown-item" href="#ser" style="margin-left: -7px;color: black;"><b>PLAN A TRAVEL TOUR</b></a>
        </div>
        </li>
			<li class="nav-item" style="margin-left: 28px;">
				<a class="nav-link" href="#ab" style="color: black;font-weight:bold"><b>ABOUT US</b></a>
			</li>
      <li class="nav-item" style="margin-left: 28PX;">
        <a class="nav-link" href="#ff" style="color: black;font-weight:bold"><b>CONTACT US</b></a>
      </li>
		</ul>
  </nav>
</div>
</section>
<div class="container-fluid" id="home" style="background-image:url('no.jpg');background-repeat: no-repeat;background-size:cover;padding: 410px 0px 350px 0px;">
  <h1 style="text-align: center;color: black;font-size: 70px;font-family: cursive;margin-top:-300px;font-weight:bold;"><b>DREAM WORLD TRAVEL AGENCY</b></h1><br>
  <h5 style="text-align: center;color: black;font-size: 22px;font-family: cursive;margin-top:-20px;font-weight:bold"><b>EXPLORE THE WORLD WITH US</b></h5>
</div><br>
<div class="container-fluid ">
  <h1 style="text-align:center;font-family: cursive;font-weight:bold;border:1px solid black;border-radius:45px;background-color:blue">TRAVEL PLANS</h1><br><br>

  <div class="gallery">

    <h3  id="mum" style="text-align:center;font-family: cursive;font-weight:bold;padding-top:60px"><B>MUMBAI TO GOA</B></h3>
   
    <img id="fd" src="mum.jpg"  width="600" height="400">
  </a>

  <div class="desc jumbotron" style="text-align:center;font-weight:bold;">THIS TRAVEL PACK WILL COST YOU <b style="font-weight:bold;font-family: cursive;"><h3>RS 5500</h3></b>TRIP CODE:<h3> MMGO</h3></div>
</div>

<div class="gallery">

<h3  id="go" style="text-align:center;font-family: cursive;font-weight:bold;padding-top:60px"><B>GOA TO MUMBAI</B></h3>

    <img id="fd" src="goa.jpg" width="600" height="400">
  </a>
  <div class="desc jumbotron" style="text-align:center;font-weight:bold;">THIS TRAVEL PACK WILL COST YOU <b style="font-weight:bold;font-family: cursive;"><h3>RS 5000</h3></b>TRIP CODE:<h3>GOMM</h3></div>

<div class="gallery">

<h3  id="dw" style="text-align:center;font-family: cursive;font-weight:bold;padding-top:60px"><B> KEDARNATH TO DWARKA</B></h3>

    <img id="fd" src="dwarka.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc jumbotron" style="text-align:center;font-weight:bold;">THIS TRAVEL PACK WILL COST YOU <b style="font-weight:bold;font-family: cursive;"><h3>RS 3500</h3></b>TRIP CODE:<h3>KEDDW</h3></div>

<div class="gallery">

<h3  id="kd" style="text-align:center;font-family: cursive;font-weight:bold;padding-top:60px"><B> DWARKA TO KEDARNATH</B></h3>

    <img id="fd" src="kedarnath.jpg" alt="Mountains" width="600" height="400">
  </a>

  <div class="desc jumbotron" style="text-align:center;font-weight:bold;">THIS TRAVEL PACK WILL COST YOU <b style="font-weight:bold;font-family: cursive;"><h3>RS 3800</h3></b>TRIP CODE:<h3>DWKED</h3></div>
</div>

<div class="gallery">

<h3  id="pan" style="text-align:center;font-family: cursive;font-weight:bold;padding-top:60px"><B> RAMESHWARAM TO PANAJI </B></h3>

    <img id="fd" src="pan.jpg" alt="Mountains" width="600" height="400">
  </a>

  <div class="desc jumbotron" style="text-align:center;font-weight:bold;">THIS TRAVEL PACK WILL COST YOU <b style="font-weight:bold;font-family: cursive;"><h3>RS 4300</h3></b>TRIP CODE:<h3>PNRSM</h3></div>
</div>

<div class="gallery">

<h3  id="rsm" style="text-align:center;font-family: cursive;font-weight:bold;padding-top:60px"><B> PANAJI TO RAMESHWARAM </B></h3>

    <img id="fd" src="rsm.jpg" alt="Mountains" width="600" height="400">
  </a>

  <div class="desc jumbotron" style="text-align:center;font-weight:bold;">THIS TRAVEL PACK WILL COST YOU <b style="font-weight:bold;font-family: cursive;"><h3>RS 4100</h3></b>TRIP CODE:<h3>RSMPN</h3></div>
</div></div><br>
<br><br>
<hr>
<div id="ser" style="padding:50px">
<div class="container-fluid jumbotron" style="background-color:rgb(14, 237, 237);border: 5px solid red;border-radius:10px;color:black;margin-top:60px"><br><br>
<h3 style="color:black;text-align:center;font-weight:bold"><b>ENTER YOUR DETAILS FOR FURTHER PROCESS</b></h3><hr><br><br>
<form action="#" method="post">
  <label style="padding-top:20px"><b>ENTER YOUR NAME * </b></label>
  <input type="text" name="fname" value="" style="border: 2px solid red" required>
  <label style="padding-left:80px"><b>ENTER YOUR EMAIL ID * </b></label>
  <input type="text" name="email" value=""  style="border: 2px solid red" required>
  <label style="padding-left:80px"><b>ENTER YOUR MOBILE NO. * </b></label>
  <input type="text" name="mobile" value=""  style="border: 2px solid red" required><br><br><br>
  <label style="margin-left:140px"><b>ENTER YOUR JOURNEY DATE * </b></label>
  <input type="text" name="date" value=""  style="border: 2px solid red" required>
  <label style="padding-left:95px"><b>ENTER YOUR JOURNEY CODE * </b></label>
  <input type="text" name="code" value="" style="border: 2px solid red"  required><br><br><br>
  <input style="margin-left:600px;background-color:black;color:white;border:3px solid red;border-radius:10px;padding:10px" type="submit" name="submit" value="Submit" required>
</form>
</div></div><br><hr><br><br>
<DIV id="ab" style="padding:60px">
<div class="container-fluid jumbotron" style="border:2px solid black">
  <h1 style="text-align:center;font-weight:bold;font-family:cursive ">ABOUT US</h1><hr style="color:red;"><br><br>
<p style="text-align:center"><b>OUR TRAVEL AGENCY PROVIDES YOU THE BEST EXPERIENCE IN TRAVELLING.<BR>
      THE MODES OF TRAVEL WILL BE BUSES EXCEPT FOR MUMBAI-GOA ROUTE AND VICE VERSA WHICH WILL BE BY WATER ROUTE(SHIPS AND CRUISE).<BR>
  WE WILL CONTACT YOU BY YOUR GIVEN INFO IN THE FORM ABOVE AND WILL TELL YOU ABOUT THE PROCESS AHEAD.<BR>THANKS FOR YOUR SUPPORT.<BR>WE ALWAYS TREAT OUR CUSTOMERS AS OUR GODS.</b></p>
</div></DIV><br>
<hr>
<div class="container-fluid jumbotron text-light" id="ff"style="background-color:black;padding-bottom:130px"><p style="text-align: center;">

<a href="https://www.instagram.com/_nehalpatle.03/" style="text-decoration: none;">
</b>
  <img src="bank/1.png" width="48px" height="45px" style="border-radius: 10px;padding: 5px;">
  <span style="position: absolute;margin-top: 40px;margin-left: -63px;color: white">Instagram</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 30px;">
  <img src="bank/2.png" width="48px" height="46px" style="border-radius: 10px;padding: 5px;">
  <span style="position: absolute;margin-top: 40px;margin-left: -60px;color: white;">Whatsapp</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 33px;">
  <img src="bank/3.png" width="48px" height="46px" style="border-radius: 10px;padding: 5px;"><span style="position: absolute;margin-top: 40px;margin-left: -55px;color: white">LinkedIn</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 30px;">
  <img src="bank/4.png" width="48px" height="46px" style="border-radius: 10px;padding: 5px;"><span style="position: absolute;margin-top: 40px;margin-left: -57px;color: white">Facebook</span>
</a>
<a href="https://api.whatsapp.com/qr/QHND6UERXJXUB1" style="text-decoration: none;margin-left: 30px;"><img src="bank/5.jpg" width="48px" height="46px" style="border-radius: 10px;padding: 5px;"><span style="position: absolute;margin-top: 40px;margin-left: -50px;color: white">Twitter</span>
</a>
</p><br><br><br>
<hr style="background-color: white;">
<br>
<div class="row">
  <div class="col-4" style="text-align: center;">
    <address style="display: block;font-style: italic;">
      <h6>
        <B>YOU CAN VISIT US TO THIS ADDRESS ::</B>
      </h6>
      <br>
      <img src="bank/6.png"  width="30px" height="30px" style="border-radius: 10px;"> 
      264,
     JAWAHAR NAGAR,<br>
     , RAJENDRA NAGAR,<br>
     INDORE,<br>
      452012</address>
  </div>
    <div class="col-4" style="text-align: center;">
<h6 style="padding-left: 18px;font-style: italic;"><b>CONTACT US ::</b></h6>
<br>
<img src="bank/7.png"  width="30px" height="30px" style="border-radius: 10px;"> 
6265866760 , 7898333595
<br>
0731-6535364
</P>
    </div>
    <div class="col-4" style="text-align: center;">
      <h6 style="font-style: italic;"><b>EMAIL US AT ::</b></h6>
      <BR>
        <img src="bank/8.png" width="30px" height="30px" style="border-radius: 10px;"> 
      NehalPatle2@Gmail.com<br>
      
      
    </div>
</div>

<hr style="background-color: whitesmoke;"><br>
<div style="text-align: center;">
 Copyright Design Nehal Patle © 2021. All right reserved.
</div></div>
<hr>

</div></div>
</div>
</div>

    </body>
</html>