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
<!-- wp:html -->
<main id="main" class="tbc-main">
	<section class="tbc-hero tbc-section--pattern">
		<div class="tbc-shell tbc-hero__grid">
			<div class="tbc-hero__content">
				<h1>Join the ultimate tech book club</h1>
				<p>Turn your reading time into learning time with fellow tech enthusiasts. Get curated recommendations, join vibrant discussions, and level up your skills one chapter at a time.</p>
				<a class="tbc-button" href="#membership">Review membership options <span aria-hidden="true"></span></a>
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
			</div>
			<picture class="tbc-image tbc-hero__image">
				<source media="(min-width: 64rem)" srcset="<?php echo $asset( 'image-hero-desktop.webp' ); ?>">
				<source media="(min-width: 48rem)" srcset="<?php echo $asset( 'image-hero-tablet.webp' ); ?>">
				<img src="<?php echo $asset( 'image-hero-mobile.webp' ); ?>" alt="Three people reading and discussing books around a table at a book club meeting">
			</picture>
		</div>
	</section>

	<section class="tbc-shell tbc-feature tbc-feature--image-right">
		<div class="tbc-feature__copy">
			<h2>Read together, grow together</h2>
			<ul class="tbc-check-list">
				<li>Monthly curated tech reads selected by industry experts</li>
				<li>Virtual and in-person meetups for deep-dive discussions</li>
				<li>Early access to new tech book releases</li>
				<li>Author Q&amp;A sessions with tech thought leaders</li>
			</ul>
		</div>
		<picture class="tbc-image">
			<source media="(min-width: 64rem)" srcset="<?php echo $asset( 'image-read-together-desktop.webp' ); ?>">
			<source media="(min-width: 48rem)" srcset="<?php echo $asset( 'image-read-together-tablet.webp' ); ?>">
			<img src="<?php echo $asset( 'image-read-together-mobile.webp' ); ?>" alt="People reading books together during a book club gathering" loading="lazy">
		</picture>
	</section>

	<section class="tbc-shell tbc-feature tbc-feature--image-left">
		<picture class="tbc-image">
			<source media="(min-width: 64rem)" srcset="<?php echo $asset( 'image-not-average-desktop.webp' ); ?>">
			<source media="(min-width: 48rem)" srcset="<?php echo $asset( 'image-not-average-tablet.webp' ); ?>">
			<img src="<?php echo $asset( 'image-not-average-mobile.webp' ); ?>" alt="A book club discussion with three people reading books and talking together in a cozy lounge" loading="lazy">
		</picture>
		<div class="tbc-feature__copy tbc-feature__copy--average">
			<h2>Not your average book club</h2>
			<p>Connect with a community that speaks your language - from Python to TypeScript and everything in between. Our discussions blend technical depth with practical applications.</p>
		</div>
	</section>

	<section class="tbc-shell tbc-journey tbc-section--pattern">
		<h2>Your tech reading journey</h2>
		<ol>
			<li>Choose your membership tier</li>
			<li>Get your monthly book selection</li>
			<li>Join our discussion forums</li>
			<li>Attend exclusive meetups</li>
		</ol>
	</section>

	<section id="membership" class="tbc-shell tbc-membership">
		<h2>Membership options</h2>
		<div class="tbc-pricing">
			<article class="tbc-card">
				<h3>Starter</h3>
				<p><strong>$19</strong><span>/month</span></p>
				<ul class="tbc-check-list">
					<li>1 book/month</li>
					<li>Online forums</li>
				</ul>
				<a class="tbc-button" href="#">Subscribe now <span aria-hidden="true"></span></a>
			</article>
			<article class="tbc-card tbc-card--featured">
				<h3>Pro</h3>
				<p><strong>$29</strong><span>/month</span></p>
				<ul class="tbc-check-list">
					<li>2 books/month</li>
					<li>Virtual meetups</li>
				</ul>
				<a class="tbc-button" href="#">Subscribe now <span aria-hidden="true"></span></a>
			</article>
			<article class="tbc-card">
				<h3>Enterprise</h3>
				<p><strong>Custom</strong></p>
				<ul class="tbc-check-list">
					<li>Team access</li>
					<li>Private sessions</li>
				</ul>
				<a class="tbc-button" href="#">Talk to us <span aria-hidden="true"></span></a>
			</article>
		</div>
	</section>

	<section class="tbc-shell tbc-testimonial">
		<div class="tbc-stars" aria-label="Five star rating">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
			<img src="<?php echo $asset( 'icon-star.svg' ); ?>" alt="">
		</div>
		<blockquote>
			<p>&ldquo;This book club transformed my technical reading from a solitary activity into an enriching community experience. The discussions are gold!&rdquo;</p>
			<cite>Sarah Chen, Software Architect</cite>
		</blockquote>
	</section>

	<section class="tbc-cta">
		<div class="tbc-shell">
			<h2>Ready to debug your reading list?</h2>
			<a class="tbc-button tbc-button--dark" href="#membership">Review membership options <span aria-hidden="true"></span></a>
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
		</div>
	</section>
</main>
<!-- /wp:html -->
