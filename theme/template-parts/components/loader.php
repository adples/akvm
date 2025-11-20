<style>
.loader{
	display: block;
	position: relative;
	height: 20px;
	width: 140px;
	background-image:
	linear-gradient(#FFF 20px, transparent 0),
	linear-gradient(#FFF 20px, transparent 0),
	linear-gradient(#FFF 20px, transparent 0),
	linear-gradient(#FFF 20px, transparent 0);
	background-repeat: no-repeat;
	background-size: 20px auto;
	background-position: 0 0, 40px 0, 80px 0, 120px 0;
	animation: pgfill 1s linear infinite;
	}

	@keyframes pgfill {
	0% {   background-image: linear-gradient(#FFF 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0); }
	25% {   background-image: linear-gradient(#f16623 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0); }
	50% {   background-image: linear-gradient(#f16623 20px, transparent 0), linear-gradient(#f16623 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0); }
	75% {   background-image: linear-gradient(#f16623 20px, transparent 0), linear-gradient(#f16623 20px, transparent 0), linear-gradient(#f16623 20px, transparent 0), linear-gradient(#FFF 20px, transparent 0); }
	100% {   background-image: linear-gradient(#f16623 20px, transparent 0), linear-gradient(#f16623 20px, transparent 0), linear-gradient(#f16623 20px, transparent 0), linear-gradient(#f16623 20px, transparent 0); }
	}


@keyframes rotation {
	0% {
	transform: rotate(0deg);
	}
	100% {
	transform: rotate(360deg);
	}
}

@keyframes rotationBack {
	0% {
	transform: rotate(0deg);
	}
	100% {
	transform: rotate(-360deg);
	}

}


	.loader-overlay{
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-image: url('https://akvm.com/wp-content/uploads/2025/11/bg-loader.webp');
		background-size: cover;
		background-position:center;
		z-index: 5;
	}

	.loader-overlay::before{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0, .75);
			content: '';
			backdrop-filter: blur(10px);
		}

	.loader-inner{
		position: absolute;
		width: 100%;
		display: block;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		text-align:center;
	}

	.loading {
	font-size: 3rem;
	font-weight: 800;
	text-align: center;
	margin-top: 2rem;
	font-family: var(--wp--preset--font-family--silver-edition);
	font-style:italic;
}

.loading span{
	display: inline-block;
	margin: 0 -.05em;
	color: #fff;
}

.loading02 span {
	animation: loading02 1.2s infinite alternate;
}
.loading02 span:nth-child(2) {
	animation-delay: 0.2s;
}
.loading02 span:nth-child(3) {
	animation-delay: 0.4s;
}
.loading02 span:nth-child(4) {
	animation-delay: 0.6s;
}
.loading02 span:nth-child(5) {
	animation-delay: 0.8s;
}
.loading02 span:nth-child(6) {
	animation-delay: 1s;
}
.loading02 span:nth-child(7) {
	animation-delay: 1.2s;
}

@keyframes loading02 {
	0% {
	filter: blur(0);
	opacity: 1;
	}
	100% {
	filter: blur(5px);
	opacity: .2;
	}
}

<?php
if ( function_exists( 'get_current_screen' ) ) {
	$screen = get_current_screen();
	if ( $screen->is_block_editor === true ) { ?>
		.loader-overlay{
			display: none;
		}
		<?php
	}
}
?>
</style>

<div class="bg-foreground bg-linear-to-t from-bg-foreground to-stone-900 loader-overlay">
	<div class="loader-inner">
		<img src="https://akvm.com/wp-content/uploads/2025/11/akvm-logo-lg-1.png" alt="AKVM Logo" class="mx-auto mb"/>
		<span class="mx-auto mt-8 loader"></span>

	</div>
</div>
