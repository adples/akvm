<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akvm
 */


$trade_logo = get_field( 'association_logo', 'option' ) ?: '';

$roofing_license  = get_field( 'roofing_license', 'option' ) ?: '';
$building_license = get_field( 'building_license', 'option' ) ?: '';
?>

<footer id="colophon" class="bg-foreground bg-linear-to-t from-bg-foreground to-stone-900 pt-10 xl:pt-16 footer">
	<div class="mx-auto px-6 container">
		<?php get_template_part( 'template-parts/layout/partials/logo' ); ?>

		<div class="flex lg:flex-row flex-col gap-12 lg:gap-6 mt-8">
			<div class="w-full text-white lg:basis-1/2">

				<?php if ( get_field( 'footer_title', 'option' ) ) : ?>
					<h6 class="mb-3 font-display h4"><?php echo get_field( 'footer_title', 'option' ); ?></h6>
				<?php endif; ?>

				<div class="2xl:pr-30">
					<?php if ( get_field( 'footer_lead', 'option' ) ) : ?>
						<p class=""><?php echo get_field( 'footer_lead', 'option' ); ?></p>
					<?php endif; ?>
				</div>

				<?php if ( $trade_logo ) : ?>
					<img class="mt-6 w-full max-w-[350px]" src="<?php echo esc_url( $trade_logo['url'] ); ?>" alt="<?php echo esc_attr( $trade_logo['alt'] ); ?>"/>
				<?php endif; ?>

			</div>
			<div class="w-full lg:basis-1/2">
				<div class="flex lg:flex-row flex-col">
					<div class="w-full text-white lg:basis-1/2">
						<h6 class="mb-3 font-display h4">Get In Touch</h6>
						<ul class="space-y-2 text-lg icon-list contact-list">
							<?php if ( get_field( 'phone', 'option' ) ) : ?>
								<li>
									<?php echo list_icon( 'icon-[mdi--phone]' ); ?>
									<a href="tel:<?php echo get_field( 'phone', 'option' ); ?>"><?php echo get_field( 'phone', 'option' ); ?></a>
								</li>
							<?php endif; ?>

							<?php if ( get_field( 'email', 'option' ) ) : ?>
								<li>
									<?php echo list_icon( 'icon-[mdi--envelope]' ); ?>
									<a href="mailto:<?php echo get_field( 'email', 'option' ); ?>"><?php echo get_field( 'email', 'option' ); ?></a>
								</li>
							<?php endif; ?>

							<?php if ( get_field( 'linkedin', 'option' ) ) : ?>
								<li>
									<?php echo list_icon( 'icon-[mdi--linkedin]' ); ?>
									<a href="<?php echo esc_url( get_field( 'linkedin', 'option' ) ); ?>">LinkedIn</a>
								</li>
							<?php endif; ?>

							<?php if ( get_field( 'facebook', 'option' ) ) : ?>
								<li>
									<?php echo list_icon( 'icon-[mdi--facebook]' ); ?>
									<a href="<?php echo esc_url( get_field( 'facebook', 'option' ) ); ?>">Facebook</a>
								</li>
							<?php endif; ?>

							<?php if ( get_field( 'youtube', 'option' ) ) : ?>
								<li>
									<?php echo list_icon( 'icon-[mdi--youtube]' ); ?>
									<a href="<?php echo esc_url( get_field( 'youtube', 'option' ) ); ?>">Youtube</a>
								</li>
							<?php endif; ?>

							<?php if ( get_field( 'instagram', 'option' ) ) : ?>
								<li>
									<?php echo list_icon( 'icon-[mdi--instagram]' ); ?>
									<a href="<?php echo esc_url( get_field( 'instagram', 'option' ) ); ?>">Instagram</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="w-full text-white lg:basis-1/2">
						<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
							<div class="mt-10 lg:mt-0">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</div>
						<?php endif; ?>

						<h6 class="mt-10 lg:mt-6 mb-3 font-display h4">License</h6>
						<ul>
							<?php if ( $roofing_license ) : ?>
								<li>Roofing License <?php echo $roofing_license; ?></li>
							<?php endif; ?>

							<?php if ( $building_license ) : ?>
								<li>Building License <?php echo $building_license; ?></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<hr class="my-10 border-white/25 border-t">

		<div class="flex sm:flex-row flex-col justify-between gap-2 text-white/75 text-sm">
			<div class="">
				&copy; <?php echo date( 'Y' ) . ' ' . get_bloginfo() . ' All Rights Reserved.'; ?>
			</div>
			<div>
				<a href="<?php echo esc_url( get_permalink( 3 ) ); ?>">Privacy Policy</a>
			</div>
		</div>
	</div>
	<div class="bg-white/5 mt-10 py-5 text-center">
		<div class="mx-auto px-6 container">
			<a href="https://www.construction.marketing/" target="_blank" class="block opacity-35 mx-auto max-w-100 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cm-lg.png" class="hidden lg:inline-block w-full" alt="Construction Marketing Inc." />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cm-sm.png" class="lg:hidden inline-block max-w-32" alt="Construction Marketing Inc." />
			</a>
		</div>
	</div>
</div><!-- #wrapper-footer -->
</footer><!-- #colophon -->
