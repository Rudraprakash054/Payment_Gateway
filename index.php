<!DOCTYPE html>
<html lang="en">
<head>
<title>Donate Fund</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">Donate Fund</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <!-- d-lg-none -->
                    <div class="d-inline-block  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                     <!-- d-lg-block -->
                    <ul class="site-menu js-clone-nav d-none">
                      <li class="active">
                        <a href="index.html">Home</a>
                      </li>
                      <li><a href="#donate-section">Donate Fund</a></li>
                      <li><a href="#footer-contact">Contact</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(wallpaper-wall.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-10 text-center" data-aos="fade">
              <h1>The Sparks Foundation</h1>
              <p class="text-white py-3 px-4">inspiring,innovating,integrating</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(donate-wallpaper.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-6">We are waiting for DONARS......</h1>
            </div>
          </div>
        </div>
      </div> 

    </div>
	<main id="donate-section">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Donate Fund</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <div class="text-center">
              <a href="#" class="d-block mb-3 thumbnail"><img src="donate-pic.jpg" alt="Image" class="img-fluid"></a>
              <h3 class="heading mb-3"><a href="#">Encourage Innovative Students</a></h3>
              <p>Please donate funds to the student and help to them.</p>
			  <form method="post" action="">
			  <input type="text" name="fund" value="">
			  <input type="submit" value="Donate" onclick="#donate-section">
			  </form>
			  <div class="alert alert-info">
			       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
	               <strong>Info!</strong>
				   <?php 
				     $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
                     $paypalID = 'Insert_PayPal_Email';
				   $fund=$valid="";
				   if(empty($_POST["fund"])||($_POST["fund"]<100))
				   { 
			         $fund="Enter a valid amount";
				   } 
			       else if(!is_numeric($_POST["fund"]))
				   { 
			        $fund="Enter a valid amount";
				   }
				   else
				   {
					   $valid="valid";
				   }
				   echo $fund;
				   echo $valid;
				   ?>
              </div>
			  <p>NOTE:please donate above 100 rupees.</p> 
            </div>
          </div>
        </div>
      </div>
    </div>
	</main>


    

    
    


    

    

   <main id="footer-contact">
    <footer class="site-footer" style="background-image: url('contact-pic.jpg');">
      <div class="container">
        

        <div class="row-md-20">
          <div class="col-md-10">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Contact</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="https://www.facebook.com/profile.php?id=100008189716636" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/edamalapatirud1" class="p-3"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com/rudra_prakash_naidu/" class="p-3"><span class="icon-instagram"></span></a>
                  <a href="https://www.linkedin.com/in/rudra-prakash-edamalapati-4421b5127/" class="p-3"><span class="icon-linkedin"></span></a>
				  <a href="https://www.quora.com/profile/Rudra-Prakash-Naidu" class="p-3"><span class="icon-quora"></span></a>
				  <a href="https://github.com/Rudraprakash054" class="p-3"><span class="icon-github"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This website is designed by <a href="https://www.linkedin.com/in/rudra-prakash-edamalapati-4421b5127/" target="_blank" >EDAMALAPAATI RUDRA PRAKASH</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
	</main>
  </div>
 <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
 </body>
</html>
   