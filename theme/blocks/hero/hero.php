<?php
/**
 * Process step template.
 *
 * @param array $block The block settings and attributes.
 */

$block_name = 'hero';

$namespace = 'acf';

$block_name = 'wp-block-' . $namespace . '-' . $block_name;

// Block #id
$anchor = ( empty( $block['anchor'] ) ) ? null : 'id=' . $block['anchor'];

// Additional editor classes including $block['style'] defined in block.json
$additional_classes = $block['className'] ?? '';

// Step default classes
$hero_default_classes = 'relative pt-25 pb-8 md:pt-16 xl:pb-16 bg-gray-400 hero-home wp-block-acf-wrapper overflow-hidden';

// Filter Overlay
$rand = rand( 10000, 99999 );
if ( get_field( 'filter' ) ) {
	$filter = 'bg-filter relative overflow-hidden filter-' . $rand;
} else {
	$filter = '';
}

// Background Video
$show_video = get_field( 'show_video' ) && get_field( 'video' ) ? true : false;

// Create array $all_classes and implode
$all_classes = array(
	$block_name,
	$additional_classes,
	$hero_default_classes,
);

if ( ! $show_video ) {
	array_push( $all_classes, $filter );
}

$classes = implode( ' ', $all_classes );


// Background Image
$bg = '';
if ( get_field( 'bg' ) && ! $show_video ) {
	$bg      = get_field( 'bg' );
	$bg_md   = wp_get_attachment_image_src( $bg['id'], 'medium_large' );
	$bg_full = wp_get_attachment_image_src( $bg['id'], 'full' );

	$attributes = 'class="' . $classes . ' bg-cover bg-center bg-no-repeat bg-resize" style="background-image: url(' . $bg_full[0] . ')" data-img-md="' . $bg_md[0] . '" data-img-full="' . $bg_full[0] . '"';
} else {
	$attributes = 'class="' . $classes . ' bg-cover bg-center bg-no-repeat bg-resize"';
}

?>

<!-- Inline Style for Filter Overlay -->
<?php if ( ! empty( $filter ) ) : ?>
	<style>
		.filter-<?php echo $rand; ?>::before{
			background-color: <?php echo get_field( 'filter' ); ?>
		}
	</style>
<?php endif; ?>
<!-- / Inline Style for Filter Overlay -->

<div <?php echo esc_attr( $anchor ); ?> <?php echo $attributes; ?>>

	<?php if ( $show_video ) : ?>
		<?php
		$x         = 'https://player.vimeo.com/video/';
		$y         = '&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;autoplay=1&amp;loop=1&amp;background=1';
		$vimeo     = get_field( 'video' );
		$vimeo_url = $x . $vimeo . $y;
		?>

		<iframe id="vimeo" src="<?php echo esc_url( $vimeo_url ); ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

	<?php endif ?>

	<div class="z-3 relative mx-auto px-6 pb-[100px] xl:pb-[150px] container">
		<div class="flex lg:flex-row flex-col lg:gap-0 2xl:gap-6">
			<div class="w-full lg:basis-7/12 2xl:basis-1/2">
				<InnerBlocks class="space-y-4"/>
			</div>
			<div class="w-full lg:basis-5/12 2xl:basis-1/2">
				<div class="hidden lg:block bg-black/75 shadow-xl/50 backdrop-blur-md 2xl:ms-24 mt-8 lg:mt-0">
					<h3 class="py-4 border-white/50 border-b font-semibold text-white text-center h6">Schedule <span class="text-primary">FREE</span> Inspection & Estimate</h3>
					<div class="px-4 lg:px-8 py-4">
						<?php gravity_form( 1, false, false, false, '', true ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php if ( $show_video ) : ?>

			<?php // get_template_part( 'template-parts/components/loader' ); ?>


	<?php endif; ?>

</div>

<?php if ( $show_video ) : ?>
<script>
function fadeOut(element, duration) {
	element.style.transition = `opacity ${duration}ms`;
	element.style.opacity = 0;

	setTimeout(() => {
		element.style.display = 'none';
	}, duration);
}

// const video = document.querySelector('.wp-block-acf-hero');
// const loader = document.querySelector('.loader-overlay');
// if (video) {
// 	var iframe = document.getElementById('vimeo');
// 	/* eslint-disable */
// 	var player = new Vimeo.Player(iframe);
// 	/* eslint-enable */
// 	player.on('play', function () {
// 		setTimeout(function () {
// 			fadeOut(loader, 1000);
// 		}, 100);
// 	});
// }


// function onVimeoReady(callback) {
// 	if (window.Vimeo && window.Vimeo.Player) {
// 		callback();
// 	} else {
// 		setTimeout(() => onVimeoReady(callback), 50);
// 	}
// }

// onVimeoReady(() => {
// 	const video = document.querySelector('.wp-block-acf-hero');
// 	const loader = document.querySelector('.loader-overlay');

// 	if (video) {
// 		const iframe = document.getElementById('vimeo');
// 		const player = new Vimeo.Player(iframe);

// 		player.on('play', () => {
// 			setTimeout(() => fadeOut(loader, 1000), 100);
// 		});
// 	}
// });
</script>
<?php endif; ?>
