<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-BS474JBHL0"></script>
  <script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-BS474JBHL0');
  </script>
  <script>
	  !function(f,e,a,t,h,r){if(!f[h]){r=f[h]=function(){r.invoke?
	  r.invoke.apply(r,arguments):r.queue.push(arguments)},
	  r.queue=[],r.loaded=1*new Date,r.version="1.0.0",
	  f.FeathrBoomerang=r;var g=e.createElement(a),
	  h=e.getElementsByTagName("head")[0]||e.getElementsByTagName("script")[0].parentNode;
	  g.async=!0,g.src=t,h.appendChild(g)}
	  }(window,document,"script","https://cdn.feathr.co/js/boomerang.min.js","feathr");
	
	  feathr("fly", "588f5ef88e80271ed938605b");
	  feathr("sprinkle", "page_view");
	  
	  
</script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>2025 IEEE SSCI - Trondheim, Norway</title>
  <meta content="" name="description">
  <meta content="IEEE SSCI 2025, computational intelligence" name="keywords">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  
  
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Quicksand:400,500" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">

  <link href="assets/css/cookiesconsent.css" rel="stylesheet">
  <link href="assets/css/news.css" rel="stylesheet">
	
  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/ieeeStyles.css" rel="stylesheet">

  <!-- Bootstrap CDN (Ensure jQuery is loaded first if you're using any Bootstrap JavaScript components) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous">
  </script>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top align-items-center">
    <div class="row">
          <div class="meta-nav">
              <p class="ieee-p-header" id="ieee-meta-a"><a href="https://www.ieee.org/index.html"  target="_blank">IEEE.org</a> &#160;|&#160; <a href="https://ieeexplore.ieee.org/Xplore/home.jsp" target="_blank">IEEE <em>Xplore</em> Digital Library</a> &#160;|&#160; <a href="https://standards.ieee.org/"  target="_blank">IEEE Standards</a> &#160;|&#160; <a href="https://spectrum.ieee.org/"  target="_blank">IEEE Spectrum</a> &#160;|&#160; <a href="https://www.ieee.org/sitemap.html"  target="_blank">More Sites</a></p>

              <p class="ieee-p-header" id="meta-ieee-logo">
                  <a href="https://www.ieee.org/"  target="_blank"><img src="./assets//images/ieee-logo.png"></a>
                  <a href="https://www.ieee.org/join" class="joinIEEE"  target="_blank">Join IEEE</a>
              </p>
          </div>
    </div>
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
         <a href="<?php echo "?ui=home"; ?>"><img src="assets/images/logo3.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link <?php if(isset($_GET['ui']) && ($_GET['ui']==='home') || (!isset($_GET['ui']))) { echo "active"; } ?>" href="<?php echo "?ui=home"; ?>">Home</a></li>
		   <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
			   <li <?php if(isset($_GET['ui']) && ($_GET['ui']==='organizing-committee')) { echo 'class="active"'; } ?>><a href="<?php echo "?ui=organizing-committee"; ?>">Organizing Committee</a></li>
			   <li><a href="<?php echo "?ui=ssci-evaluation-and-planning-committee"; ?>">SSCI Evaluation and Planning Committee</a></li>
			   <li><a href="<?php echo "?ui=contact-us"; ?>">Contact Us</a></li>
            </ul>
          </li>
		  
		  <li class="dropdown"><a href="#"><span>Submissions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
			   <li><a href="<?php echo "?ui=call-for-papers"; ?>">Call For Papers and Abstracts</a></li>
			   <li><a href="<?php echo "?ui=submission-instructions"; ?>">Submission Instructions</a></li>
			   <li><a href="<?php echo "?ui=presentation-format"; ?>">Presentation Format</a></li>
			     <li><a href="<?php echo "./assets/files/PosterRulesSSCI2025.pdf"; ?>" target="_blank">Poster Instructions</a></li>
			   <li><a href="<?php echo "?ui=camera-ready-submission-instructions"; ?>">Camera-ready Submission Instructions</a></li>		   
            </ul>
          </li>
		  
		  <li class="dropdown"><a href="#"><span>Symposia</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
				<li><a href="<?php echo "?ui=symposia-overview"; ?>">Symposia Overview</a></li>
				<li><a href="<?php echo "?ui=ci-for-energy-transport-environmental-sustainability"; ?>">CI for Energy, Transport and Environmental Sustainability</a></li>
				<li><a href="<?php echo "?ui=ci-in-engineering-cyber-physical-systems"; ?>">CI in Engineering / Cyber Physical Systems</a></li>
				<li><a href="<?php echo "?ui=ci-in-image-signal-processing-and-synthetic-media"; ?>">CI in Image, Signal Processing and Synthetic Media</a></li>
				<li><a href="<?php echo "?ui=ci-in-artificial-life-and-cooperative-intelligent-systems"; ?>">CI in Artificial Life and Cooperative Intelligent Systems</a></li>
				<li><a href="<?php echo "?ui=ci-in-security-defence-and-biometrics"; ?>">CI in Security, Defence and Biometrics</a></li>
				<li><a href="<?php echo "?ui=ci-in-health-and-medicine"; ?>">CI in Health and Medicine</a></li>
				<li><a href="<?php echo "?ui=ci-for-financial-engineering-and-economics"; ?>">CI for Financial Engineering and Economics</a></li>
				<li><a href="<?php echo "?ui=ci-in-natural-language-processing-and-social-media"; ?>">CI in Natural Language Processing and Social Media</a></li>
				<li><a href="<?php echo "?ui=trustworthy-explainable-and-responsible-ci"; ?>">Trustworthy, Explainable and Responsible CI</a></li>
				<li><a href="<?php echo "?ui=multidisplinary-computational-intelligence-incubators"; ?>"> Multidisciplinary Computational Intelligence Incubators</a></li>
            </ul>
          </li>
		  
		   <li class="dropdown"><a href="#program"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
			   <li><a href="<?php echo "?ui=program-at-a-glance"; ?>">Program at a Glance</a></li>
			   <li><a href="<?php echo "?ui=social-program"; ?>">Social Program</a></li>
			   <li><a href="<?php echo "?ui=additional-social-program"; ?>">Additional Social Events</a></li>
			   <li><a href="<?php echo "?ui=plenary-and-keynote-sessions"; ?>">Plenary and Keynote Sessions</a></li>
			   <li><a href="<?php echo "?ui=panel"; ?>">Panels</a></li>	
			   <li><a href="<?php echo "?ui=tutorials"; ?>">Tutorials</a></li>
			   <li><a href="<?php echo "?ui=competitions"; ?>">Competitions</a></li>			   		   
			   <li><a href="<?php echo "?ui=industry-collaboration-workshop"; ?>">Industry Collaboration Workshop</a></li>	
			   <li><a href="<?php echo "?ui=quantum-ci-workshop"; ?>">Schools Outreach - Quantum CI Workshop</a></li>	
            </ul>
          </li>
		   <li><a class="nav-link <?php if(isset($_GET['ui']) && ($_GET['ui']==='registration')) { echo  "active"; } ?>" href="<?php echo "?ui=registration"; ?>">Registration</a></li>
		  <li class="dropdown"><a href="#program"><span>Venue and Travel</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
			   <li><a href="<?php echo "?ui=venue-information"; ?>">Venue Information</a></li>
			   <li><a href="<?php echo "?ui=travel-information"; ?>">Travel Information</a></li>			   
			    <li><a href="<?php echo "?ui=accommodation"; ?>">Accommodation</a></li>		   
			   <li><a href="<?php echo "?ui=things-to-do-in-trondheim"; ?>">Things To Do in Trondheim</a></li>
			   <li><a href="<?php echo "?ui=travel-grant"; ?>">Travel Grants</a></li>
            </ul>
          </li>  	
		  
		  <li class="dropdown"><a href="#program"><span>Sponsors</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
				<li><a href="<?php echo "?ui=sponsorship"; ?>">Call for Sponsors</a></li>	
			    <li><a href="<?php echo "?ui=sponsors"; ?>">Our Sponsors</a></li>
            </ul>
          </li>           
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<?php include($templatefile); ?>

    <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-10 col-md-12 footer-contact">        
			<img src="assets/images/logo3.png" alt="" class="img-footer-fluid">
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Important Links </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.ieee.org/accessibility_statement.html" target="_blank">Accessibility</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://ieee-ethics-reporting.org/" target="_blank">IEEE Ethics Reporting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.ieee.org/p9-26.html" target="_blank">Nondiscrimination Policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.ieee.org/security_privacy.html" target="_blank">IEEE Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
      <!-- <div class="copyright">
        
		
		&copy; Copyright <script type="text/javascript">document.write((new Date()).getFullYear());</script> IEEE - All rights reserved. A not-for-profit organization, IEEE is the world's largest technical professional organization dedicated to advancing technology for the benefit of humanity.
		
      </div> -->
      
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/aos/aos.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
   
  
  <!-- jQuery  -->
  <script type="text/javascript" src="./assets/js/jQuery.js"></script>
    <script type="text/javascript" src="./assets/js/news-js.js"></script>
  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous">
  </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>  


  <!-- Cookie Consent Pop-Up -->
  <div id="cookieConsentContainer" class="cookie-consent-container" style="display: none; position: fixed; bottom: 0; width: 100%; background-color: rgba(0, 0, 0, 0.9); color: white; text-align: center; padding: 20px; z-index: 1000;">
      <p>IEEE websites place cookies on your device to give you the best user experience. By using our websites, you agree to the placement of these cookies. To learn more, read our
      <a href="http://www.ieee.org/security_privacy.html" style="color:#fff; text-decoration: underline;">Privacy Policy</a>.
      <button id="acceptCookieConsent" style="background-color: #4CAF50; color: white; padding: 10px; margin: 10px 0; border: none; cursor: pointer;">Accept & Close</button></p>
  </div>

  <script>
  $(document).ready(function() {
      var cookieConsent = getCookie("cookieConsent");
      if (!cookieConsent) {
          $("#cookieConsentContainer").show();
      }

      $("#acceptCookieConsent").click(function() {
          setCookie("cookieConsent", "accepted", 365);
          $("#cookieConsentContainer").hide();
      });

      function setCookie(name, value, days) {
          var expires = "";
          if (days) {
              var date = new Date();
              date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
              expires = "; expires=" + date.toUTCString();
          }
          document.cookie = name + "=" + (value || "") + expires + "; path=/";
      }

      function getCookie(name) {
          var nameEQ = name + "=";
          var ca = document.cookie.split(';');
          for(var i=0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) == ' ') c = c.substring(1, c.length);
              if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
          }
          return null;
      }
  });
  

	$(window).load(function(e) {     
		
		$("#bn7").breakingNews({
			effect		:"slide-v",
			autoplay	:true,
			timer		:4000,
			color		:'darkred'
		});		

    });
	
(function($) {
    
  var allPanels = $('.panel').hide();
  $('.accordion').click(function() 
  {
    $(this).toggleClass( "active" );
    allPanels.slideUp();
    $(this).next('.panel').show();
  }
  );       
})(jQuery);
 </script>
  </script>
</body>

</html>