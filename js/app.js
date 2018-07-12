import './jquery.pxoHeader'

(function($) {
	$(document).ready(() => {
		$.each($('section[label]'), function( index, section ) {
			const $section = $(section);
			const id = $section.attr('id');
			const label = $section.attr('label');

			$('ul.navbar-nav').append(`
				<li class="nav-item">
					<a class="nav-link" href="#${id}">${label}</a>
				</li>
			`);
		});

		$('.site-header').pxoHeader({
			offset: 0,
			target: '.site-header',
			heighter: '.section-hero',
			absoluteClass: 'position-absolute bg-transparent',
			fixedClass: 'position-fixed bg-dark',
			collapseActionTarget: '.site-header-inner',
		});

	})
})( jQuery );
