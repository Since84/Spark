(function($){

	// Spark Application
	var AppView = Backbone.View.extend({
		el: 'body',

	  		// Default Variables for Application
	  		defaults: function() {
	  			return {

	  			}
	  		},

	  		//Delegated Events for user actions
	  		events: {
	  			// "click .team-member": "goToTeamMember",
	  			"click .issue-area": "goToIssueArea",
	  			"click .spark-modal-trigger.donate": "openDonateModal",
	  			"click .spark-modal-trigger.gallery": "openGalleryFull",
	  			"click .events .slide": "toggleEvent",
	  			"click .news-feed .post-preview": "openNewsPost",
	  			"click .featured-post .read-more": "openFeaturedPost",
	  			"click .video": "playVideo",
	  			"click .load-more": "loadMore"
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			var self = this;
	  			var issue = this.getParameterByName("issue");
	  			$('<h3>@Rights4Girls</h3>').insertAfter('.footer-content .twitter .widget_display-latest-tweets .widgettitle')
	  			this.runActiveTab();
	  		},

	  		initPanelNav: function(){ // Navigation
	  			console.log('Function to initialize Panel Navigation');
	  		},

	  		initCycle: function(){ // Women & Climate, Common Cause
	  			console.log('Function to initialize slideshows')
	  		},
	  		initModal: function(){ // Contact Form
	  			console.log('Funtion to initialize slideshows')
	  		},

	  		// Team Functions
	  		goToTeamMember: function(elem){ 
	  			$('.tab-content').cycle().addClass('cycle-slideshow');
	  		},
	  		goToIssueArea: function(elem){ 
	  			$('.tab-content').cycle().addClass('cycle-slideshow');
	  		},
			getParameterByName: function(name) {
			    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			        results = regex.exec(location.search);
			    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			},
			openDonateModal: function(e) {
				var modal = "donate";
				$('.'+ modal).toggleClass('show');
				$('.'+ modal).find('.close').click(function(){
					$('.'+modal).removeClass('show');
				})
			},
			openGalleryFull: function(e) {
				var slideshow = $('#cycle-1').clone()
				slideshow.appendTo('.gallery-full-screen:not(".loaded") .modal-content').cycle();
				$('.gallery-full-screen').toggleClass('show').addClass('loaded');
				$('.gallery-full-screen .close').click(function(){
					$('.gallery-full-screen').removeClass('show');
				})
			},
			openNewsPost: function(e){
				$(e.currentTarget).toggleClass('open');
			},
			openFeaturedPost: function(e){
				$(e.currentTarget).parents('.slides').toggleClass('open');
			},
			toggleEvent: function(e) {
				var self = this;
				var ev = $(e.currentTarget),
					index = ev.attr('slide-index');
					slideIndex = $('[slide-index="'+index+'"]')
				
				if ( slideIndex.hasClass('active') ){
					$('.event-detail').removeClass('open')
				} else if ( $('.event-detail').not('.open') ){
					$('.event-detail').addClass('open').click(function(){
						$(this).removeClass('open');
						slideIndex.removeClass('active');
					});
				}

				$('[slide-index="'+index+'"]').toggleClass('active');
				slideIndex.siblings('.active').removeClass('active');	
			},
			playVideo: function(e){
				var video = $(e.currentTarget);
				video.addClass('on').find('object').playVideo();
			},
			loadMore: function(e){
				$(e.currentTarget).parent().toggleClass('loaded');
			},
			runActiveTab: function(e){
				var active = $('.issue-areas').attr('active-tab');

				if ( active ){
					var activeIndex = $("[tab-slug="+active+"]").attr('tab-index'); 
					$('.tab-content')
						.cycle()
						.addClass('cycle-slideshow');
						$('.tab-content').cycle('goto', activeIndex - 1);	
				}
			}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);