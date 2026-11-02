
// Initialize homepage, fired on DOM ready
$(function(){
	// Begin setup: 
	HPNormalizer.initializeUI(); 
	// Call WebTrends with page and open tab info
	//
//dcsMultiTrack("DCSext.tabcontent_page","Homepage","DCSext.tabcontent_link", "NONE", "DCSext.tabcontent_tab",$(".tabs li.ui-tabs-selected span").text());

});

// To avoid global collisions with other objects/methods, all functionality here is wrapped in the HPNormalizer 
// Object. After the initializeUI() method is called above, all needed normalization for the HomePage will execute.
// Visual changes need to occur first; once complete all page event listeners are added. 
var HPNormalizer = new function() {
	
//--PROPERTY--//----------------------------------------------------------------------------------------------------------------------------->
		
	
//--METHOD--//------------------------------------------------------------------------------------------------------------------------------->
	
	// Group all visual changes together to limit flickering/jiggling/motion on page load. There are several
	// tasks to accomplish on page load, these however are the most noticable to the user. 
	this.initializeUI = function() {
			
			// Tab-bify the tabs
			$("ul.tabs").tabs();
			
			// Setup accordion container
			$("ul.drawers").accordion({header: "h2.drawer_handle", selectedClass:"open", autoheight:true, active:".selected", alwaysOpen: false});
			
			//Force Firefox to reserve space for the vertical scrollbar, keeps from horizontal "jiggling" when all panels are closed
			if ($.browser.mozilla) {  $("body").css("overflow-y", "scroll"); }
			
			//Force pointer cursor when active accordion panel title is hovered on
			$("h2.drawer_handle").hover( function(){$(this).css({cursor: "pointer"})}  , function(){/*empty onmouseout handler*/});
			
			// Setup hover behavior for the tabs
			$("#nav ul li").hover( function(){$(this).addClass("hover")}  ,  function(){$(this).removeClass("hover")});
			
			// Display Global Gateway country link if set 
	 		
			
			// After all visual manipulation to DOM is complete, attach all event handlers
			this.bindPageEventHandlers();
	},
		
//--METHOD--//------------------------------------------------------------------------------------------------------------------------------->
	
	// Attach all page events		
	this.bindPageEventHandlers =  function() {
			
			// Attach tracking function to links on page that ARE NOT: a tab, a descendant of a tab_content container,
			// or a descendent of the accordion container. 
			$("a").not($(".tabs a, .tab_content a, #accordion_container a")).click( function(){ HPNormalizer.analytics.standard($(this).text())  });
			
			// Assign tab click handler
			//$(".tabs a").click(function(){ HPNormalizer.analytics.tabLink($(this).text())  });
			
			// Assign click handler for links in tab content
			$(".tab_content a").click(function(){ HPNormalizer.analytics.tabContent($(this).text()) });
			
			// Assign click handler for links in accordion content...
			$("#accordion_container a").click(function() {
				HPNormalizer.analytics.accordionContent($(this).text());
				// ...checking for the RSS link, which also needs to have the default accordion behavior modified
				if ( $(this).hasClass("rss")) {
					// jquery.accordion.js automatically hijacks navigation links, need to make this one work like an actual link.
					location.href = $(this).attr("href");
					// return false to keep the accordion from activating on click
					return false;
				}
			});
			
			$("h2.drawer_handle").click(function() {HPNormalizer.analytics.accordionHandle($(this).text())})
			
			// Search logic 
			var searched = false;
			var searchTxt =	$("#search input").attr('value');
			$("#search input").focus(function() { 
				if (!searched) $(this).attr('value', '');
				$(this).removeClass('blur');
			}).blur(function() { 
				$(this).addClass('blur');
				if (typeof($(this).attr('value')) == 'undefined') {
					$(this).attr('value', searchTxt); 	
					searched = false;
				} else {
					searched = true;
				}
			});
			
			// Setup popup notification window
	 		$(".notification").click(function() {
	 			return false;
	 		});
	 		
			// Setup Global Gateway click handler
	 		$(".ggateway").click(function() { DisplayLocale(); return false; });
			
			// Setup language-based redirects 
			var prefix = "";
 			var redirectObj = {  en: "/", zhs: "/zhs/", zht: "/zht/", de: "/de/", it: "/it/", ja: "/ja/", es: "/es/", fr: "/fr/", ko: "/ko/" };
 			if ("") {
				// Store the query string, to be appended on re-direct
				var query = window.location.search;
 				var truePath = location.pathname;
				if (truePath.substr(truePath.length-1,1) != "/") {
					truePath += "/";
				}
				if (!(truePath == redirectObj[user.isoLanguage])) {
					location.href = prefix + redirectObj[user.isoLanguage] + query;
				}
 			}
	}

}; //Closes HPNormalizer

/* Preloader */
jQuery.preloadImages=function(){
	for(var A=0;A<arguments.length;A++){
		jQuery("<img>").attr("src",arguments[A])
	}
};