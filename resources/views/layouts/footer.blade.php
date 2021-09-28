<?php //Helper::inlineEditable("h2","",'copy right','FOOTER'); 
?>
<!-- Footer -->
<footer class="footer">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6 textCenter">
				<div class="footer_content">
					<?php
        print Helper::dynamicImages(asset('/'), 'assets/images/logo.png', array("data-width" => "229", "data-height" => "109", "alt" => "logo", "class" => "imgFluid"), 'logo', true);
        ?>
					<ul class="footer_links">
						<li><a href="{{route('home')}}">Home</a></li>
						<li><a href="{{route('about')}}">About Us</a></li>
						<li><a href="{{route('products')}}">Products</a></li>
						<li><a href="{{route('blogs')}}">Blog</a></li>
						<li><a href="{{route('contactus')}}">Contact Us</a></li>
					</ul>
					<ul class="footer_social">
						<li>
							<a href="#">
								<i class="bx bxl-facebook bx-sm bx-fade-up-hover"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="bx bxl-twitter bx-sm bx-fade-up-hover"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="bx bxl-pinterest-alt bx-sm bx-fade-up-hover"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="bx bxl-google bx-sm bx-fade-up-hover"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="bx bxl-linkedin bx-sm bx-fade-up-hover"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		Copyright © {{date('Y')}} Social Pulse LLC. All Rights Reserved.
	</div>
</footer>