(function($){

	// Spark Application
	var AppView = Backbone.View.extend({
		el: '#ggf_app',

	  		// Default Variables for Application
	  		defaults: function() {
	  			return {

	  			}
	  		},

	  		//Delegated Events for user actions
	  		events: {
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			this.initPanelNav();
	  			this.initCycle();
	  			this.initModal();
	  		},

	  		initPanelNav: function(){ // Navigation
	  			console.log('Function to initialize Panel Navigation');
	  		},

	  		initCycle: function(){ // Women & Climate, Common Cause
	  			console.log('Function to initialize slideshows')
	  		},
	  		initModal: function(){ // Contact Form
	  			console.log('Funtion to initialize slideshows')
	  		}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);