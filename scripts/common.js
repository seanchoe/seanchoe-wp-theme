var isMobile;
var isMobileMenuClickSet = false;
setIsMobile();

if (isMobile) {
	setMobileMenuClick();
}

function setMobileMenuClick() {
	if (isMobileMenuClickSet == false) {
		var navHide = $('.nav_hide');
		$('#mobile_menu_button').click(function() {
			if (navHide.is(':visible') == false) {
				navHide.show();
				navHide.top($('body').paddingTop());
			}
			else {
				navHide.hide();
			}
		});
		
		isMobileMenuClickSet = true;
	}
}

function setIsMobile() {
	if ($(window).width() < 768) {
		if (!isMobile) {
			isMobile = true;
			setMobileMenuClick();
		}
	}
	else {
		if (isMobile) {
			isMobile = false;
		}
	}
}

$(window).resize(function() {
	setIsMobile();
});