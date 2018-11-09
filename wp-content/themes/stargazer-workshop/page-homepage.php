<?php
/**
 * Template Name: Home Page
 *
 * @package stargazer-workshop
 */

get_header();
?>

<!-- Hero Section -->
<section id="hero-section" class="hero hero--background">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1 class="heading-primary">I create <br class="hidden-sm hidden-md hidden-lg"><span class="highlight">websites</span>!</h1>
				<p class="paragraph paragraph--hero u-bold animated fadeInLeft">Fill the form and recieve a <span
						class="highlight">free</span> quote about how I would change your existing design or create
					you a new <span class="highlight">responsive website</span>! Learn more about my website creation process <a href="process.html">here</a>.</p>
			</div>
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 text-center">
					<h3 class="heading-secondary heading-secondary--sub highlight u-uppercase animated tada slow">FREE eBOOK HERE!</h3>
					<img class="img-responsive ebook-cover" src="<?php echo get_template_directory_uri() . '/assets/img/fr-ebook.png'?>" alt="Ebook Cover">
					<a target="_blank" href="<?php echo get_template_directory_uri() . '/assets/download//Filip Rastovic - Website Creation eBook.pdf'?>" class="btn" download>Download the eBook!</a>

				<p class="paragraph text-center white u-margin-top-60">Let your UX be evaluated by professionals.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
				<p class="hero-separator paragraph paragraph--hero u-padding-top-40">Growth hack your business
					today.</p>
				<div class="vl hidden-xs hidden-sm"></div>
			</div>

			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 venn">
				<div class="venn-diagram-container">
					<div class="circle-top-left">
						<label>
							<span class="title">Software Engineering</span>
							<span class="subtitle">Analysis <span class="hidden-xs">+</span> Development</span>
						</label>
					</div>
					<div class="circle-top-right" style="z-index: 2;">
						<label>
							<span class="title">Design<br>Studio</span>
							<span class="subtitle">UI + UX <span class="hidden-xs">+</span> Digital Design</span>
						</label>
					</div>
					<div class="circle-bottom-center-x">
						<label>
							<span class="title">A/B<br>Testing</span>
							<span class="subtitle">Data<span class="hidden-xs">,</span> Optimization</span>
						</label>
					</div>
					<div class="subcircle-top-center-x">
						<label>
							<span class="subtitle">Your Ideas <span class="hidden-xs">Delivered</span></span>
						</label>
					</div>
					<div class="subcircle-center-left">
						<label>
							<span class="subtitle">Agile <span class="hidden-xs"><br>Release on Demand</span></span>
						</label>
					</div>
					<div class="subcircle-center-right">
						<label>
							<span class="subtitle">User Feedback</span>
						</label>
					</div>
					<div class="subsubcircle-center-x-y">
						<svg x="0px" y="0px" viewBox="0 0 157.331 200.443">
							<g>
								<path d="M57.257,52.647c0,15.096-12.828,27.339-28.623,27.339C12.816,79.986,0,67.743,0,52.647C0,37.542,12.816,25.31,28.634,25.31 C44.429,25.31,57.257,37.542,57.257,52.647z" />
								<path d="M157.331,83.605c0,13.509-11.476,24.463-25.604,24.463c-14.155,0-25.619-10.954-25.619-24.463 c0-13.51,11.464-24.456,25.619-24.456C145.855,59.149,157.331,70.095,157.331,83.605z" />
								<path d="M123.322,28.78c0,15.895-13.511,28.784-30.14,28.784c-16.648,0-30.135-12.889-30.135-28.784 C63.048,12.883,76.534,0,93.183,0C109.812,0,123.322,12.883,123.322,28.78z" />
								<path d="M98.54,104.468c0,14.307-12.159,25.904-27.118,25.904c-14.989,0-27.129-11.598-27.129-25.904 c0-14.309,12.14-25.895,27.129-25.895C86.381,78.573,98.54,90.16,98.54,104.468z" />
								<path d="M94.128,158.237c0,8.576-7.287,15.531-16.262,15.531c-8.986,0-16.268-6.955-16.268-15.531 c0-8.589,7.281-15.542,16.268-15.542C86.841,142.695,94.128,149.648,94.128,158.237z" />
								<path d="M125.577,136.046c0,8.576-7.293,15.531-16.269,15.531c-8.987,0-16.262-6.955-16.262-15.531 c0-8.584,7.274-15.546,16.262-15.546C118.284,120.5,125.577,127.462,125.577,136.046z" />
								<path d="M116.687,187.748c0,7.02-5.959,12.695-13.289,12.695c-7.34,0-13.287-5.676-13.287-12.695 c0-7.002,5.947-12.676,13.287-12.676C110.728,175.072,116.687,180.746,116.687,187.748z" />
							</g>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Portfolio section -->
<?php get_template_part( 'template-parts/portfolio'); ?>

<!-- Technologes we use  -->
<?php get_template_part('template-parts/technologies'); ?>

<!-- Cta section -->
<?php get_template_part('template-parts/cta'); ?>

<!-- Highlight Line -->
<div class="highlight-line"></div>

<!-- Copy -->
<section class="copy">
	<div class="container">
		<div class="row hidden-md hidden-lg text-center">
			<div class="col-xs-11 col-xs-offset-1 transform-image">
				<img src="assets/svg/monitor-window.svg" alt="Logo" class="svg">
			</div>
			<div class="col-xs-12">
				<div class="card">
					<h2 class="heading-secondary heading-secondary--copy">What makes a good landing page?</h2>
					<p class="paragraph paragraph--copy">A good landing page is built by combining latest
						persuasion techniques with cutting edge software engineering standards and user experience
						design principles. Its goal is to generate new leads and convert the visitor into a paying
						customer.</p>
				</div>
			</div>
			<div class="col-xs-10 col-xs-offset-1 transform-image">
				<img src="assets/svg/monitor-cash-credit-card.svg" alt="Logo" class="svg">
			</div>
			<div class="col-xs-12">
				<div class="card">
					<h2 class="heading-secondary heading-secondary--copy">Most profitable page of your business.</h2>
					<p class="paragraph paragraph--copy">A landing page is the most profitable page of your
						business. Leaving a thrustworhtly first impression is cruacially important for any business
						that is offering a product or service. </p>
				</div>
			</div>
			<div class="col-xs-10 col-xs-offset-1 transform-image">
				<img src="assets/svg/chip-head.svg" alt="Logo" class="svg">
			</div>
			<div class="col-xs-12">
				<div class="card">
					<h2 class="heading-secondary heading-secondary--copy">Feedback is precious, test!</h2>
					<p class="paragraph paragraph--copy">Every customer group is different, that's why by utilizing
						latest technologies we're able to test the landing page design, create heatmaps and
						analytics which allow us to change the design so it fits the user needs.</p>
				</div>
			</div>
			<div class="col-xs-10 col-xs-offset-1 transform-image">
				<img src="assets/svg/lab-scientist.svg" alt="Logo" class="svg">
			</div>
			<div class="col-xs-12">
				<div class="card">
					<h2 class="heading-secondary heading-secondary--copy">Created with love by UX researchers.</h2>
					<p class="paragraph paragraph--copy">With more than ten years of conversion rate optimization
						and user experience research I have failed enough times to actually become good at it.</p>
				</div>
			</div>
		</div>
		<!-- Desktop Copy Version -->
		<div class="hidden-xs hidden-sm row u-pading-top-huge">
			<div class="col-md-offset-1 col-md-6">
				<div class="card text-align">
					<h2 class="heading-secondary heading-secondary--copy">What makes a good landing page?</h2>
				</div>
			</div>
			<div class="col-md-4">
				<img src="assets/svg/monitor-window.svg" alt="Logo" class="svg">
			</div>
		</div>
		<div class="hidden-xs hidden-sm row">
			<div class="col-md-offset-1 col-md-8">
				<p class="paragraph paragraph--copy paragraph--left pull-up">A good landing page is built by
					combining latest persuasion techniques with cutting edge software engineering standards and
					user experience design principles. Its goal is to generate new leads and convert the visitor
					into a paying customer.</p>
			</div>
		</div>
		<div class="hidden-xs hidden-sm row u-pading-top-huge">
			<div class="col-md-4 col-md-offset-1">
				<img src="assets/svg/monitor-cash-credit-card.svg" alt="Logo" class="svg">
			</div>
			<div class="col-md-6">
				<div class="card text-align">
					<h2 class="heading-secondary heading-secondary--copy pull-right">Most profitable page of your
						business.</h2>
				</div>
			</div>
		</div>
		<div class="hidden-xs hidden-sm row">
			<div class="col-md-offset-2 col-md-8">
				<p class="paragraph paragraph--copy pull-up pull-right pull-right--fix">A landing page is the most
					profitable page of your business. Leaving a thrustworhtly first impression is cruacially
					important for any business that is offering a product or service. </p>
			</div>
		</div>
		<div class="hidden-xs hidden-sm row u-pading-top-huge">
			<div class="col-md-offset-1 col-md-6">
				<div class="card text-align">
					<h2 class="heading-secondary heading-secondary--copy">Feedback is precious, test!</h2>
				</div>
			</div>
			<div class="col-md-4">
				<img src="assets/svg/chip-head.svg" alt="Logo" class="svg">
			</div>
		</div>
		<div class="hidden-xs hidden-sm row">
			<div class="col-md-offset-1 col-md-8">
				<p class="paragraph paragraph--copy pull-up">Every customer group is different, that's why by
					utilizing latest technologies we're able to test the landing page design, create heatmaps and
					analytics which allow us to change the design so it fits the user needs.</p>
			</div>
		</div>
		<div class="hidden-xs hidden-sm row u-pading-top-huge">
			<div class="col-md-4 col-md-offset-1">
				<img src="assets/svg/lab-scientist.svg" alt="Logo" class="svg">
			</div>
			<div class="col-md-6">
				<div class="card text-align">
					<h2 class="heading-secondary heading-secondary--copy pull-right">Created with love by UX
						researchers.</h2>
				</div>
			</div>
		</div>
		<div class="hidden-xs hidden-sm row">
			<div class="col-md-offset-2 col-md-8">
				<p class="paragraph paragraph--copy paragraph--left pull-up pull-right pull-right--fix">With more
					than ten years of conversion rate optimization and user experience research we have failed
					enough times to actually become good at it.</p>
			</div>
		</div>
	</div>
</section>

<section id="testimonials-section" class="ad brands">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<h2 class="heading-secondary white">Happy clients</h2>
				<hr class="white hidden-md hidden-lg">
				<div class="vl hidden-xs hidden-sm"></div>
				<img src="assets/img/brands-2.png" alt="">
				<img src="assets/img/brands-1.png" alt="">
				<img src="assets/img/brands-3.png" alt="">
				<img src="assets/img/brands-4.png" alt="">
				<img src="assets/img/brands-5.png" alt="">
				<img src="assets/img/brands-6.png" alt="">
			</div>
		</div>
	</div>
</section>

<!-- Highlight Line -->
<div class="highlight-line"></div>

<section id="contact-section" class="bot-form">
	<div class="container">
		<div class="row">
			<div class="col-md-7 hidden-xs hidden-sm">
				<h2 class="heading-secondary pb-30">Let's get in touch!</h2>
				<p class="paragraph text-center pb-30">Got any questions? Don't hessitate to send me a message! We
					can help you build a landing page or evaluate your existing designs.</p>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-1 col-sm-8 col-sm-offset-2">
				<h2 class="heading-secondary text-center mb-60 hidden-md hidden-lg">Let's get in touch!</h2>
				<p class="paragraph text-center mb-60 hidden-md hidden-lg">Got any questions? Don't hessitate to
					send me a message! We can help you build a landing page or evaluate your existing designs.</p>

				<form action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671"
					method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form validate"
					target="_blank" novalidate>
					<h3 class="bot-form-title">Send Me a Message!</h3>
					<label class="sr-only" for="mce-EMAIL">Email Address </label>
					<input type="email" value="" name="EMAIL" placeholder="Email" class="required form-control email"
						id="mce-EMAIL" data-toggle="tooltip-1" data-placement="top" title="Full Name">

					<label class="sr-only" for="mce-FNAME">First Name </label>
					<input type="text" value="" name="LNAME" class="form-control" placeholder="First name" id="mce-LNAME"
						data-toggle="tooltip-2" data-placement="top" title="Email Address">

					<label class="sr-only" for="mce-LNAME">Last Name </label>
					<input type="text" value="" name="LNAME" class="form-control" placeholder="Last name" id="mce-LNAME"
						data-toggle="tooltip-3" data-placement="top" title="Url To Your Website">

					<label class="sr-only" for="mce-MMERGE3">Message </label>
					<textarea rows="6" type="text" value="" name="MMERGE3" class="form-control" id="mce-MMERGE3"
						placeholder="Leave your message here" data-toggle="tooltip-4" data-placement="top" title="Your Message"></textarea>

					<input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="btn form-control form-button">
				</form>
			</div>
		</div>
	</div>
</section>

<?php
get_sidebar();
get_footer();
