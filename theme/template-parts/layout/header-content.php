<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CMC
 */

?>

<header class="py-5 px-5">
	<div class="w-full max-w-screen-xl mx-auto flex flex-row items-center justify-between md:justify-between gap-x-2">
		<div class="flex flex-row gap-6">
			<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/nav-img.png" alt="Logo QG"
					class="block w-max h-16"></a>
			<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/nav-logo.png" alt="Logo CMC"
					class="block w-max h-16"></a>
		</div>

		<nav id="navigation"
			class="hidden lg:flex md:flex-1 w-full h-screen md:h-auto flex-col md:flex-row items-center md:justify-center gap-x-1 absolute md:static left-0 bg-white md:bg-inherit z-50 <?php echo is_user_logged_in() ? 'top-10' : 'top-0' ?>">
			<ul id="nav-links"
				class="w-full h-screen md:h-auto md:w-fit flex flex-col gap-y-5 gap-x-4 md:flex-row md:items-center px-5 md:px-0 text-base font-medium">
				<a id="nav-link" href="#" class="close block p-2.5 cursor-pointer self-end md:hidden">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-10 self-end pointer"
						viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path
							d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
					</svg>
				</a>

				<li><a href="<?php echo esc_url(home_url('/')); ?>"
						class="block w-full md:w-fit px-1 py-2 text-green-qg hover:text-shadow-sm transition-colors">Quality
						Guard</a>
				</li>
				<li><a href="<?php echo esc_url(home_url('/cmc')); ?>"
						class="block w-full md:w-fit px-1 py-2 text-green-qg hover:text-shadow-sm transition-colors">CMC</a>
				</li>
				<li>
					<div class="relative inline-block w-full lg:w-auto text-left group">
						<div class="flex flex-row items-center justify-between gap-x-2.5">
							<a href="/"
								class="block w-full md:w-fit px-1 py-2 text-green-qg hover:text-shadow-sm transition-colors">
								Productos
							</a>
							<svg id="dropdownButton" xmlns="http://www.w3.org/2000/svg" class="h-6 lg:h-4 fill-gray-QG"
								viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path
									d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
							</svg>
						</div>

						<div id="dropdownMenu"
							class="hidden group-hover:block lg:absolute static mt-0 w-full lg:w-48 lg:rounded-md lg:shadow-lg bg-transparent lg:bg-white">
							<div class="py-1">
								<a href="#"
									class="block px-4 py-4 lg:py-2 text-s text-black lg:border-b lg:border-[#E6E6E6]">1</a>
								<a href="#"
									class="block px-4 py-4 lg:py-2 text-s text-black lg:border-b lg:border-[#E6E6E6]">2</a>
								<a href="#"
									class="block px-4 py-4 lg:py-2 text-s text-black lg:border-b lg:border-[#E6E6E6]">3</a>
								<a href="#" class="block px-4 py-4 lg:py-2 text-s text-black">4</a>
							</div>
						</div>
					</div>
				</li>
				<li><a href="<?php echo esc_url(home_url('/')); ?>"
						class="block w-full md:w-fit px-1 py-2 text-green-qg hover:text-shadow-sm transition-colors">Contactos</a>
				</li>
			</ul>
		</nav>

		<div class="flex flex-row items-center gap-x-5">
			<!-- search input -->
			<div class="absolute top-[130px] left-0 md:top-0 md:static w-full px-2.5 md:px-0 z-auto">
				<div id="input-search" class="hidden lg:block relative">
					<input id="search-bar" type="search" placeholder="¿Qué andas buscando?"
						class="border border-gray-1000 rounded-lg w-full md:w-[232px] px-3.5 py-3.5 placeholder:text-s placeholder:text-gray-700">
					<svg xmlns="http://www.w3.org/2000/svg" id="search-icon"
						class="absolute top-2/4 right-6 -translate-y-2/4 h-4"
						viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path
							d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
					</svg>
				</div>
			</div>
			<!--  -->
			<ul class="relative flex flex-row items-center gap-x-4">
				<!-- input toggler icon -->
				<a href="#" id="search-toggler" class="cursor-pointer lg:hidden sm:block">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4"
						viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path
							d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
					</svg>
				</a>
				<a href="#" id="search-close" class="hidden">
					<span class="cursor-pointer rounded-full w-6 h-6 flex items-center justify-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4"
							viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path
								d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
						</svg>
					</span>
				</a>

				<a href="#" id="navbar-toggler" class="block lg:hidden">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5"
						viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path
							d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
					</svg>
				</a>
			</ul>
		</div>
	</div>
</header>