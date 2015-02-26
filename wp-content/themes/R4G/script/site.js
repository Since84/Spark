(function($){

	// Spark Application
	var AppView = Backbone.View.extend({
		el: $('body'),

	  		// Default Variables for Application
	  		defaults: function() {
	  			return {

	  			}
	  		},

	  		//Delegated Events for user actions
	  		events: {
	  			"click .team-member": "goToTeamMember",
	  			"click .issue-area": "goToIssueArea"
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			var self= this;
	  			// this.initPanelNav();
	  			// this.initCycle();
	  			// this.initModal();
	  			$('.team-member').on('click', function(){
	  				self.goToTeamMember(this);
	  			});
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
	  			var index_id = $(elem).attr('tab-index') - 1;
	  			
	  			if( $(elem).not('.active') ){
	  				$('.team-member.active').removeClass('active');
		  			$(elem).addClass('active');
		  			$('.tab-content .cycle-slideshow').cycle( 'goto', index_id );	  				
	  			}


	  		},
	  		goToIssueArea: function(elem){ 
	  			var index_id = $(elem).attr('tab-index') - 1;
	  			
	  			if( $(elem).not('.active') ){
	  				$('.issue-area.active').removeClass('active');
		  			$(elem).addClass('active');
		  			$('.tab-content .cycle-slideshow').cycle( 'goto', index_id );	  				
	  			}


	  		}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);