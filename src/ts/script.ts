import MobileMenu from './mobile-menu';

if ( window !== undefined ) {
	const mainNavigation =
		document.querySelector< HTMLElement >( '#pd-main-menu' );
	if ( mainNavigation ) {
		const mobileMenu = new MobileMenu( mainNavigation );
		mobileMenu.init();
	}
}
