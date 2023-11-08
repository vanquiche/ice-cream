export default class MobileMenu {
	header: HTMLElement;

	constructor( header: HTMLElement ) {
		this.header = header;
	}

	init() {
		// query elements and add css classes
		const nav = this.header.querySelector( 'nav' );
		const menus = nav.querySelector( 'ul' );
		if ( nav && menus ) {
			menus.classList.add( 'pd-mobile-menu' );

			const linksWithChildren = menus.querySelectorAll( '.has-child' );

			linksWithChildren.forEach( ( link ) => {
				link.classList.add( 'pd-mobile-menu__menu-with-child' );
				const submenu = link.querySelector( 'ul' );

				submenu.classList.add( 'pd-mobile-menu__submenu' );

				const submenuBtn = link.querySelector(
					'.wp-block-navigation__submenu-icon'
				);

				submenuBtn.classList.add( 'pd-mobile-menu__submenu-button' );
			} );
		}
	}
}
