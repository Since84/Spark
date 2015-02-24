(function($){

	// Spark Application
	var AppView = Backbone.View.extend({
		el: 'body',

	  		// Default Variables for Application
	  		defaults: function() {
	  			return {
	  				"dlForm": $('.contact')
	  			}
	  		},

	  		//Delegated Events for user actions
	  		events: {
	  			'click .download-icon': 'openDownloadForm',
	  			'click .close': 'closeDownloadForm',
	  			'click input[type="checkbox"]': 'toggleChecked'
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			var self = this;
	  			// this.initPanelNav();
	  			// this.initCycle();
	  			// this.initModal();
	  		},

	  		initPanelNav: function(){ // Navigation
	  			console.log('Function to initialize Panel Navigation');
	  		},

	  		initCycle: function(){ // Women & Climate, Common Cause
	  			console.log('Function to initialize slideshows')
	  		},
	  		openDownloadForm: function(){ // Contact Form
	  			this.defaults().dlForm.addClass('open');
	  		},
	  		closeDownloadForm: function(){ // Contact Form
	  			this.defaults().dlForm.removeClass('open');
	  		},
	  		toggleChecked: function(elem){
	  			$(elem.target).parent().toggleClass('checked');
	  		}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);