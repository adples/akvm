<?php $navigation = \Log1x\Navi\Navi::make()->build( 'primary-nav' ); ?>

<!-- Primary Navigation -->
<nav class="hidden md:block bg-linear-to-t from-primary-dark to-primary w-full" aria-label="navigation">

	<div x-data="{ open: false }" class="flex md:flex-row flex-col md:justify-between md:items-center mx-auto px-6 container">

		<div class="flex flex-row justify-center items-center">

			<button class="md:hidden rounded-lg focus:shadow-outline focus:outline-none" @click="open = !open">
			<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
				<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
				<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
			</svg>
			</button>

		</div>

		<ul id="primary-menu" :class="{'flex': open, 'hidden': !open}" class="hidden md:flex md:flex-row flex-col flex-grow md:justify-center space-x-5 lg:space-x-10 mb-0">
			<?php get_template_part( 'template-parts/layout/simple-nav-alt/nav-menu', null, array( 'navigation' => $navigation ) ); ?>
		</ul>
	</div>
</nav>
<!-- /Primary Navigation -->

<!-- Reveal Navigation -->
<nav x-cloak x-data="{ show: false }"
	class="top-0 md:-top-150 z-10 fixed bg-foreground bg-linear-to-t from-bg-foreground to-stone-900 py-2 md:py-0 w-full transition-all duration-500 navbar-reveal"
	:class="{ 'top-0 affix': show, 'md:-top-150': !show}"
	@scroll.window="show = (window.pageYOffset < 150) ? false : true"
	aria-label="navigation">

	<div x-data="{ open: false }" class="flex md:flex-row flex-col md:justify-between md:items-center mx-auto px-6 container">

		<div class="flex flex-row justify-between items-center">

			<?php get_template_part( 'template-parts/layout/partials/logo', null, array( 'reveal' => true ) ); ?>

			<button class="md:hidden rounded-lg focus:shadow-outline focus:outline-none text-white" @click="open = !open">
			<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
				<path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
				<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
			</svg>
			</button>

		</div>

		<ul id="primary-menu" :class="{'flex': open, 'hidden': !open}" class="hidden md:flex md:flex-row flex-col flex-grow md:justify-end space-x-4 lg:space-x-8 mb-0 pb-4 md:pb-0">
			<?php
			get_template_part(
				'template-parts/layout/simple-nav-alt/nav-menu',
				null,
				array(
					'navigation' => $navigation,
					'reveal'     => true,
				)
			);
			?>
		</ul>
	</div>
</nav>
<!-- /Reveal Navigation -->
