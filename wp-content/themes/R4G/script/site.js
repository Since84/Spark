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
	  			"click .spark-modal-trigger": "openDonateModal",
	  			"click .events .slide": "toggleEvent"
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			var self = this;
	  			var issue = this.getParameterByName("issue");
	  			// this.initPanelNav();
	  			// this.initCycle();
	  			// this.initModal();
	  			// $('.team-member').on('click', function(){
	  			// 	self.goToTeamMember(this);
	  			// });
	  			// $('.issue-area').on('click', function(){
	  			// 	self.goToTeamMember(this);
	  			// });
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
				var modal = $(e.currentTarget).attr('modal-name');
				$('.'+ modal).toggleClass('show');
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
				
			}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);