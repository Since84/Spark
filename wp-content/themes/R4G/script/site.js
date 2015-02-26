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
	  			"click .team-member": "goToTeamMember",
	  			"click .issue-area": "goToIssueArea"
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			var self= this;
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
	  		}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);