<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akvm
 */

?>

<header id="masthead" class="bg-foreground bg-linear-to-t from-bg-foreground to-stone-900">
	<div class="hidden md:block mx-auto px-6 py-2 container">
		<div class="flex lg:flex-row flex-col items-center gap-x-6 gap-y-2">
			<div class="[&>a]:inline-block pt-3 lg:pt-0 w-full lg:text-left text-center lg:basis-3/12">
				<?php get_template_part( 'template-parts/layout/partials/logo'); ?>
			</div>
			<div class="w-full text-center lg:basis-5/12">
				<?php
				$tagline = get_bloginfo('description') ?: '';
				if($tagline) echo '<span class="block text-white 2xl:text-lg italic">'.$tagline.'</span>';

				$phone = get_field('phone','options') ?: '';
				if($phone) echo '<span class="block mt-3 font-display text-white text-2xl xl:text-3xl tracking-wide">Call: '.$phone.'</span>';
				?>
			</div>
			<div class="flex justify-end w-full lg:basis-3/12">
				<?php if ( get_theme_mod( 'site_branded_vehicle' ) ): ?>
					<img class="hidden lg:block w-[125px] lg:w-[175px] 2xl:w-[200px] xl:w-[200px]" src="<?php echo esc_attr(get_theme_mod( 'site_branded_vehicle' )) ?>" >
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/layout/simple-nav-alt/nav'); ?>
	
</header><!-- #masthead -->
