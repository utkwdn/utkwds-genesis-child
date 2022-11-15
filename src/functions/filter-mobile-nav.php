<?php 

// Make the menu responsive, and off-canvas
// Uses bootstrap:
// https://getbootstrap.com/docs/5.2/components/offcanvas/#responsive
// Note the variables near the bottom. The background, etc, can be edited with variables.


// Add a responsive toggle button with Bootstrap's classes to control visibility (d-lg-none)
function utkchancellor_mobileButton($menu) {
  ?>
    <button class="btn btn-primary btn-mobileNav d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive" aria-label="Toggle Navigation">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="btn-hamburger"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"></path></svg> <span class="navLabel">Menu</span>
     <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg btn-close" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg> -->
    </button>
<?php
return $menu;
}
add_action ('genesis_header', 'utkchancellor_mobileButton');



// // Add a close button inside the menu
// function utkchancellor_closeButton($menu) {
//   
//    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
// return $menu;
// }
//add_action ('genesis_header_right', 'utkchancellor_closeButton');


// Add an ID and other attribuutes to the main navigation so we can target it for off-canvas
add_filter( 'genesis_attr_nav-primary', 'utkchancellor_navbar', 20 );
function utkchancellor_navbar( $attributes ) {
		// class, id, itemscope, itemtype, etc.
		$attributes['id']  = 'offcanvasResponsive';
		$attributes['class']  = 'offcanvas-lg offcanvas-end nav-primary';
		$attributes['tabindex']  = '-1';
		$attributes['aria-labelledby']  = 'offcanvasResponsiveLabel';
		
	return $attributes;
}