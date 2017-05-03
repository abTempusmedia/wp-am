/*------------------------------------------------------------------

@Author: CodeoStudio & A.B.
@URL:    http://codeostudio.hr/
@Date:   04/1/2017

[Table of contents]

1. Open off-canvas wrap on mobile
2. Clone stuff to offcanvas
3. Responsive videos on mobile
4. Support for touch screens for navigation

-------------------------------------------------------------------*/   


(function () {
    "use strict";
    var $j = jQuery.noConflict();
    $j(document).ready(function () {
        
        // 1. Open off-canvas wrap on mobile
	$j(".cs-toggle-nav, .cs-offcanvas-wrap .cs-offcanvas-close").on("click", function () {
        $j(".cs-offcanvas-wrap").toggleClass("active");
        $j("body").toggleClass("locked");
    });
    // 2. Clone stuff to offcanvas
    $j(".cs-primary-nav nav").clone().appendTo(".cs-offcanvas-nav");
	// 3. Responsive videos on mobile
	$j("body").fitVids();
	// 4. Support for touch screens for navigation
	$j(".cs-primary-nav nav li:has(ul)").doubleTapToGo();
    
    });
})(jQuery);