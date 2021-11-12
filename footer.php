  <!-- Footer Section Start -->
  <style>
	  #myBtn {
	  display: none; /* Hidden by default */
	  position: fixed; /* Fixed/sticky position */
	  bottom: 20px; /* Place the button at the bottom of the page */
	  right: 30px; /* Place the button 30px from the right */
	  z-index: 99; /* Make sure it does not overlap */
	  border: none; /* Remove borders */
	  outline: none; /* Remove outline */
	  background-color: black; /* Set a background color */
	  color: white; /* Text color */
	  cursor: pointer; /* Add a mouse pointer on hover */
	  padding: 15px; /* Some padding */
	  border-radius: 10px; /* Rounded corners */
	  font-size: 18px; /* Increase font size */
	  
		}

		#myBtn:hover {
		background-color: #0000FF; 
		}
	</style>
	<script>
		//Get the button:
		mybutton = document.getElementById("myBtn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0; // For Safari
		  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
	</script>
  <footer class="footer" id="footer">
    <img class="shape2" src="https://geniusdevs.com/themeforest/prolab/probucket/assets/images/bg-shape2.png" alt="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="footer-info-area">
            <div class="footer-logo">
              <a href="home.php" class="logo-link">
                <img src="	https://geniusdevs.com/themeforest/prolab/probucket/assets/images/logo-color.png" alt="">
              </a>
            </div>
            <div class="text">
              <p>AIM FETCH is the leading Recruiting Automation Platform. Find & engage with the best candidates. 
              </p>
            </div>
          </div>
          <div class="fotter-social-links">
            <ul>
              <li>
                <a href="https://www.facebook.com/" class="facebook">
                  <!-- <i class="fab fa-facebook-f"></i> --> <img src="20.png">
                </a>
              </li>
              <li>
                <a href="https://www.twitter.com/" class="twitter">
                  <!-- <i class="fab fa-twitter"></i> --> <img src="21.png">
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/" class="linkedin">
                  <!-- <i class="fab fa-linkedin-in"></i> --> <img src="22.png">
                </a>
              </li>
              <li>
                <a href="https://myaccount.google.com/profile" class="google-plus">
                  <!-- <i class="fab fa-google-plus-g"></i> --> <img src="23.png">
                </a>
              </li>
              <li>
                <a href="https://dribbble.com/" class="dribbble">
                  <!-- <i class="fab fa-dribbble"></i> --> <img src="24.png">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-bg text-center">
      <p>Copyright © <?php $year = date("Y"); echo $year; ?>. All rights reserved.
      </p>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Back to Top Start -->
  <!--<div class="bottomtotop">
    <i class="fa fa-chevron-right"></i>
  </div> -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">TOP<!--<img src="25.png">--></button>
  <!-- Back to Top End -->

  <!-- jquery -->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/jquery.js"></script>
  <!-- popper -->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/popper.min.js"></script>
  <!-- bootstrap -->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/bootstrap.min.js"></script>
  <!-- way poin js-->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/waypoints.min.js"></script>
  <!-- owl carousel -->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/owl.carousel.min.js"></script>
  <!-- magnific popup -->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/jquery.magnific-popup.js"></script>
  <!-- aos js-->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/aos.js"></script>
  <!-- counterup js-->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/jquery.countdown.min.js"></script>
  <!-- easing js-->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/jquery.easing.1.3.js"></script>
  <!-- Map js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&sensor=false"></script>
	<script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/gmap.js"></script>
  <!-- main -->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/contact.js"></script>
  <!-- main -->
  <script src="https://geniusdevs.com/themeforest/prolab/probucket/assets/js/main.js"></script>