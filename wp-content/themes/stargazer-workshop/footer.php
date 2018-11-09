<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stargazer-workshop
 */

?>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4">
	<div class="container-fluid text-center text-md-left">
		<div class="row light-blue">
			<div class="col-md-6">
				<h5>Pro landing page design</h5>
				<p class="paragraph u-bold text-uppercase">Filip Rastovic</p>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<ul class="list-unstyled">
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a id="portfolio-bot" href="#!">Portfolio</a>
					</li>
					<li>
						<a id="testimonials-bot" href="#!">Testimonials</a>
					</li>
					<li>
						<a id="contact-bot" href="#!">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright text-center py-3 dark-blue">© 2018 Copyright:
		<a href="https://filiprastovic.com">filiprastovic.com</a>
	</div>
</footer>

<button id="myBtn" title="Go to top">Top</button>

<div class='ui-loader ui-body-a ui-corner-all'><span class='ui-icon ui-icon-loading spin'></span>
	<h1></h1>
</div>
</body>

</html>

<?php wp_footer(); ?>

</body>
</html>
