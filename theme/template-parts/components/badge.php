<?php
/**
 * Template part for Badge
 */
?>

<?php
$block_classes = isset($args['classes']) ? $args['classes'] : '';
$text = isset($args['text']) ? $args['text'] : 'Pass some text!'
?>

<div class="inline-flex items-center bg-black px-3 xl:px-4 py-1 xl:py-2 rounded-full font-light text-white uppercase">
	<span class="size-6 icon-[material-symbols-light--asterisk-rounded]"></span>
	<span class="ms-1 text-sm xl:text-base"><?php echo $text ?></span>
</div>
