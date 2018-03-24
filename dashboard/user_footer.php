	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="footer-area">
					<div class="col-md-3">
						<img src="../images/logo.png" alt="logo-img">
					</div>
					<div class="col-md-2">
						<div class="footer-details">
							<h4>About Us</h4>
							<ul type="none">
								<li><a href="#">About Us</a></li>
								<li><a href="#">History</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#">We are hiring</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="footer-details">
							<h4>How it Works</h4>
							<ul type="none">
								<li><a href="#">Enter your location</a></li>
								<li><a href="#">Choose restaurant</a></li>
								<li><a href="#">Choose meal</a></li>
								<li><a href="#">Pay via credit card</a></li>
								<li><a href="#">Wait for delivery</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="footer-details">
							<h4>Pages</h4>
							<ul type="none">
								<li><a href="#">Search results page</a></li>
								<li><a href="#">User signup page</a></li>
								<li><a href="#">Pricing page</a></li>
								<li><a href="#">Make order</a></li>
								<li><a href="#">Add to cart</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-details">
							<h4>Popular Location</h4>
							<ul type="none" class="town pull-left">
								<li>Sarajevo</li>
								<li>Tuzla</li>
								<li>Zagreb</li>
								<li>Beograd</li>
								<li>Gradacac</li>
							</ul>
							<ul type="none" id="split">
								<li>Split</li>
								<li>Sibenik</li>
								<li>Brcko</li>
								<li>New York</li>
								<li>Los Angeles</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="lower-footer">
					<div class="payment">
						<div class="col-md-3">
							<h2>Payment option</h2>
							<div class="payment-icon">
								<i class="fa fa-cc-paypal" aria-hidden="true"></i>
								<i class="fa fa-cc-mastercard" aria-hidden="true"></i>
								<i class="fa fa-cc-visa" aria-hidden="true"></i>
								<i class="fa fa-cc-stripe" aria-hidden="true"></i>
								<i class="fa fa-btc" aria-hidden="true"></i>
							</div>
						</div>
					</div>
					<div class="address">
						<div class="col-md-4">
							<div class="address-info">
								<h2>Address</h2>
								<p>Concept design of online food order and <br> delivery, planned as resturant directory</p>
							</div>
						</div>
					</div>
					<div class="additional">
						<div class="col-md-5">
							<div class="additional-info">
								<h2>Additional information</h2>
								<p>Join the thousand of restaurants who benifit from having <br> their menu on TakeOff</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<a href="#" class="scrollup text-center"><i class="fa fa-angle-up" aria-hidden="true"></i></a>


	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<!-- for tag it plugin -->
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/lightbox.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	
	<script type="text/javascript" src="../js/tag-it.js" ></script>
	<script type="text/javascript" src="../js/populartag.js" ></script>

	<script>
		$(document).ready(function(){

			// scrollspy starts
			$('body').scrollspy({ target: '#header' });
			//scrollspy ends

			//Menubar color Begins
			$(window).scroll(function() { 
                if ($(document).scrollTop() > 400) { 
                    $(".navbar-fixed-top").css("background-color", "rgba(0, 0, 0, .3)"); 
                } 
                else {
                $(".navbar-fixed-top").css("background-color", "transparent");
            }
            });
            //Menubar color Ends

            // Go top or scrollup plugin Begins
    		$(window).on('scroll', function(){
				if ($(this).scrollTop() > 400) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			})
    		$('.scrollup').on('click', function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
			// Go top or scrollup plugin Ends

			// price range slider begins
			$( "#slider-range" ).slider({
			      range: true,
			      min: 1,
			      max: 500,
			      values: [ 100, 300 ],
			      slide: function( event, ui ) {
			        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			      }
			    });
			    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
			    // price range slider ends
		});
	</script>
</body>
</html>