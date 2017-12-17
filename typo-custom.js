(function($) {
	"use strict";

	$(window).load(function(){

		// Alert

	  $(".typo_failed span.close").click(function () {
			$(".typo_failed").fadeOut("slow");
		});

		$(".typo_success span.close").click(function () {
			$(".typo_success").fadeOut("slow");
		});

		$(".typo_info span.close").click(function () {
			$(".typo_info").fadeOut("slow");
		});

		$(".typo_warning span.close").click(function () {
			$(".typo_warning").fadeOut("slow");
		});	


		// Toggle

		$(".toggle_container").hide(); 
		$("h4.toggle").click(function(){ 
			$(this).toggleClass("active").next().slideToggle("normal"); 
			return false; 
		}); 


		// Tabs
		
		$(".tab-content").hide(); 
		$("ul.tab-menu li:first").addClass("active").show(); 
		$(".tab-content:first").show(); 

		$("ul.tab-menu li").click(function() {
			$("ul.tab-menu li").removeClass("active"); 
			$(this).addClass("active"); 
			$(".tab-content").hide(); 

			var activeTab = $(this).find("a").attr("href"); 
			$(activeTab).fadeIn(); 
			return false;
		});


		// Skill Bar
		jQuery('.skillbar').each(function(){
			jQuery(this).find('.skillbar-bar').animate({
				width:jQuery(this).attr('data-percent')
			},6000);
		});

	});

})(jQuery);