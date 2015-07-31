function pageSet(pageId){
		// $('ul.sidebar-nav li').removeClass('active');
		// $('ul.sidebar-nav li').removeClass('open');
		// $('ul.sidebar-nav li a').addClass('collapsed');
		// $('ul.sidebar-nav li a').attr('aria-expanded', false);
		$('li#' + pageId).parent().parent().addClass('open active');
		$('li#' + pageId).parent().parent().find('a').removeClass('collapsed');
		$('li#' + pageId).parent().parent().find('ul').addClass('collapse in');
		$('li#' + pageId).addClass('active');
}