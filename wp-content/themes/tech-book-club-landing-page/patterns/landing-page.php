<?php
/**
 * Title: Landing page
 * Slug: tech-book-club-landing-page/landing-page
 * Categories: featured
 * Inserter: false
 *
 * @package TechBookClubLandingPage
 */

$asset = static function ( string $path ): string {
	return esc_url( get_theme_file_uri( 'assets/images/' . $path ) );
};
?>
<!-- wp:group {"tagName":"main","anchor":"main","className":"tbc-main","layout":{"type":"default"}} -->
<main id="main" class="wp-block-group tbc-main">
	<!-- wp:group {"tagName":"section","className":"tbc-hero tbc-section--pattern","layout":{"type":"default"}} -->
	<section class="wp-block-group tbc-hero tbc-section--pattern">
		<!-- wp:group {"className":"tbc-shell tbc-hero__grid","layout":{"type":"default"}} -->
		<div class="wp-block-group tbc-shell tbc-hero__grid">
			<!-- wp:group {"className":"tbc-hero__content","layout":{"type":"default"}} -->
			<div class="wp-block-group tbc-hero__content">
				<!-- wp:heading {"level":1} -->
				<h1 class="wp-block-heading">Join the ultimate tech book club</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Turn your reading time into learning time with fellow tech enthusiasts. Get curated recommendations, join vibrant discussions, and level up your skills one chapter at a time.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"url":"#membership","className":"tbc-button"} -->
					<div class="wp-block-button tbc-button"><a class="wp-block-button__link wp-element-button" href="#membership">Review membership options <span aria-hidden="true"></span></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:html -->
				<div class="tbc-proof">
					<img src="<?php echo $asset( 'image-avatars.webp' ); ?>" alt="" width="110" height="40" loading="lazy">
					<div>
						<div class="tbc-stars" aria-label="Five star rating">
							<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
							<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
							<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
							<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
							<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
						</div>
						<p>200+ developers joined already</p>
					</div>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:html -->
			<picture class="tbc-image tbc-hero__image">
				<source media="(min-width: 64rem)" srcset="<?php echo $asset( 'image-hero-desktop.webp' ); ?>">
				<source media="(min-width: 48rem)" srcset="<?php echo $asset( 'image-hero-tablet.webp' ); ?>">
				<img src="<?php echo $asset( 'image-hero-mobile.webp' ); ?>" alt="Three people reading and discussing books around a table at a book club meeting">
			</picture>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"tbc-shell tbc-feature tbc-feature--image-right","layout":{"type":"default"}} -->
	<section class="wp-block-group tbc-shell tbc-feature tbc-feature--image-right">
		<!-- wp:group {"className":"tbc-feature__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group tbc-feature__copy">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Read together, grow together</h2>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"tbc-check-list"} -->
			<ul class="wp-block-list tbc-check-list">
				<!-- wp:list-item -->
				<li>Monthly curated tech reads selected by industry experts</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Virtual and in-person meetups for deep-dive discussions</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Early access to new tech book releases</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Author Q&amp;A sessions with tech thought leaders</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<picture class="tbc-image">
			<source media="(min-width: 64rem)" srcset="<?php echo $asset( 'image-read-together-desktop.webp' ); ?>">
			<source media="(min-width: 48rem)" srcset="<?php echo $asset( 'image-read-together-tablet.webp' ); ?>">
			<img src="<?php echo $asset( 'image-read-together-mobile.webp' ); ?>" alt="People reading books together during a book club gathering" loading="lazy">
		</picture>
		<!-- /wp:html -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"tbc-shell tbc-feature tbc-feature--image-left","layout":{"type":"default"}} -->
	<section class="wp-block-group tbc-shell tbc-feature tbc-feature--image-left">
		<!-- wp:html -->
		<picture class="tbc-image">
			<source media="(min-width: 64rem)" srcset="<?php echo $asset( 'image-not-average-desktop.webp' ); ?>">
			<source media="(min-width: 48rem)" srcset="<?php echo $asset( 'image-not-average-tablet.webp' ); ?>">
			<img src="<?php echo $asset( 'image-not-average-mobile.webp' ); ?>" alt="A book club discussion with three people reading books and talking together in a cozy lounge" loading="lazy">
		</picture>
		<!-- /wp:html -->

		<!-- wp:group {"className":"tbc-feature__copy tbc-feature__copy--average","layout":{"type":"default"}} -->
		<div class="wp-block-group tbc-feature__copy tbc-feature__copy--average">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Not your average book club</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Connect with a community that speaks your language - from Python to TypeScript and everything in between. Our discussions blend technical depth with practical applications.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"tbc-shell tbc-journey tbc-section--pattern","layout":{"type":"default"}} -->
	<section class="wp-block-group tbc-shell tbc-journey tbc-section--pattern">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Your tech reading journey</h2>
		<!-- /wp:heading -->

		<!-- wp:list {"ordered":true} -->
		<ol class="wp-block-list">
			<!-- wp:list-item -->
			<li>Choose your membership tier</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>Get your monthly book selection</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>Join our discussion forums</li>
			<!-- /wp:list-item -->

			<!-- wp:list-item -->
			<li>Attend exclusive meetups</li>
			<!-- /wp:list-item -->
		</ol>
		<!-- /wp:list -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","anchor":"membership","className":"tbc-shell tbc-membership","layout":{"type":"default"}} -->
	<section id="membership" class="wp-block-group tbc-shell tbc-membership">
		<!-- wp:heading -->
		<h2 class="wp-block-heading">Membership options</h2>
		<!-- /wp:heading -->

		<!-- wp:group {"className":"tbc-pricing","layout":{"type":"default"}} -->
		<div class="wp-block-group tbc-pricing">
			<!-- wp:group {"tagName":"article","className":"tbc-card","layout":{"type":"default"}} -->
			<article class="wp-block-group tbc-card">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Starter</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><strong>$19</strong><span>/month</span></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"tbc-check-list"} -->
				<ul class="wp-block-list tbc-check-list">
					<!-- wp:list-item -->
					<li>1 book/month</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Online forums</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"url":"#","className":"tbc-button"} -->
					<div class="wp-block-button tbc-button"><a class="wp-block-button__link wp-element-button" href="#">Subscribe now <span aria-hidden="true"></span></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</article>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"article","className":"tbc-card tbc-card--featured","layout":{"type":"default"}} -->
			<article class="wp-block-group tbc-card tbc-card--featured">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Pro</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><strong>$29</strong><span>/month</span></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"tbc-check-list"} -->
				<ul class="wp-block-list tbc-check-list">
					<!-- wp:list-item -->
					<li>2 books/month</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Virtual meetups</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"url":"#","className":"tbc-button"} -->
					<div class="wp-block-button tbc-button"><a class="wp-block-button__link wp-element-button" href="#">Subscribe now <span aria-hidden="true"></span></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</article>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"article","className":"tbc-card","layout":{"type":"default"}} -->
			<article class="wp-block-group tbc-card">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Enterprise</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><strong>Custom</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:list {"className":"tbc-check-list"} -->
				<ul class="wp-block-list tbc-check-list">
					<!-- wp:list-item -->
					<li>Team access</li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li>Private sessions</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"url":"#","className":"tbc-button"} -->
					<div class="wp-block-button tbc-button"><a class="wp-block-button__link wp-element-button" href="#">Talk to us <span aria-hidden="true"></span></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</article>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"tbc-shell tbc-testimonial","layout":{"type":"default"}} -->
	<section class="wp-block-group tbc-shell tbc-testimonial">
		<!-- wp:html -->
		<div class="tbc-stars" aria-label="Five star rating">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
		</div>
		<!-- /wp:html -->

		<!-- wp:quote -->
		<blockquote class="wp-block-quote">
			<p>&ldquo;This book club transformed my technical reading from a solitary activity into an enriching community experience. The discussions are gold!&rdquo;</p>
			<cite>Sarah Chen, Software Architect</cite>
		</blockquote>
		<!-- /wp:quote -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","className":"tbc-cta","layout":{"type":"default"}} -->
	<section class="wp-block-group tbc-cta">
		<!-- wp:group {"className":"tbc-shell","layout":{"type":"default"}} -->
		<div class="wp-block-group tbc-shell">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Ready to debug your reading list?</h2>
			<!-- /wp:heading -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"url":"#membership","className":"tbc-button tbc-button--dark"} -->
				<div class="wp-block-button tbc-button tbc-button--dark"><a class="wp-block-button__link wp-element-button" href="#membership">Review membership options <span aria-hidden="true"></span></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:html -->
			<div class="tbc-proof tbc-proof--dark">
				<img src="<?php echo $asset( 'image-avatars.webp' ); ?>" alt="" width="110" height="40" loading="lazy">
				<div>
					<div class="tbc-stars" aria-label="Five star rating">
						<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
						<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
						<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
						<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
						<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
					</div>
					<p>200+ developers joined already</p>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
