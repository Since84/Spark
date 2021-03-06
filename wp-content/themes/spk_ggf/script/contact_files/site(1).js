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
	  			"click .video": "playVideo",
	  			"click .load-more": "loadMore",
	  			"click .wpcf7-form": "hideAlert"
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
				var modal = $(e.currentTarget).hasClass('donate') ? "donate" : $(e.currentTarget).attr('modal-name');
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
			toggleEvent: function(e) {
				var ev = $(e.currentTarget),
					index = ev.attr('slide-index');
					slideIndex = $('[slide-index="'+index+'"]')
				
				if ( slideIndex.hasClass('active') ){
					$('.event-detail').removeClass('open')
				} else if ( $('.event-detail').not('.open') ){
					$('.event-detail').addClass('open');
				}

				$('[slide-index="'+index+'"]').toggleClass('active');
				slideIndex.siblings('.active').removeClass('active');	
			},
			playVideo: function(e){
				var video = $(e.currentTarget);
				video.addClass('on').find('object').playVideo();
			},
			loadMore: function(e){
				$(e.currentTarget).parent().addClass('loaded');
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
			},
			hideAlert: function(e){
				$( e.currentTarget ).children( "[role='alert']" ).css( "display", "none" );
			}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);