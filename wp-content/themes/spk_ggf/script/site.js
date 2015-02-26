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
	  			'click input[type="checkbox"]': 'toggleChecked',
	  			'click .case': 'openCase',
	  			'click .case-study-footer .close': 'closeCaseStudies',
	  			'click .lesson-pager li': 'toggleSelection',
	  			'click .modal-trigger': 'openModal',
	  			'click .modal-close': 'closeModal',
	  			'click a.nav-main-item': 'smoothScroll',
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			var self = this;
	  			// this.initPanelNav();
	  			// this.initCycle();
	  			// this.initModal();
	  			$(window).scroll(function(){
	  				self.showNav();
	  			})
	  		},

	  		initPanelNav: function(){ // Navigation
	  			// console.log('Function to initialize Panel Navigation');
	  		},

	  		initCycle: function(){ // Women & Climate, Common Cause
	  			// console.log('Function to initialize slideshows')
	  		},
	  		openDownloadForm: function(){ // Contact Form
	  			this.defaults().dlForm.addClass('open');
	  		},
	  		closeDownloadForm: function(){ // Contact Form
	  			this.defaults().dlForm.removeClass('open');
	  		},
	  		toggleChecked: function(elem){
	  			$(elem.target).parent().toggleClass('checked');
	  		},
	  		openCase: function(e){
	  			var index = $(e.target).parents('.case').data('index');
	  			$('.case-study-frame').addClass('open');
	  			$('.case-study-frame .cycle-slideshow').cycle(index-1);

	  		},
	  		closeCaseStudies: function(e){
	  			$('.case-study-frame').removeClass('open');
	  		},
	  		toggleSelection: function(e){
	  			var selected = $(e.target).data('index');
	  			$(e.target).parents('.lessons').find(' li.selected').removeClass('selected');
	  			$(e.target).parents('.lessons').find(" li."+ selected).addClass('selected');
	  		},
	  		openModal: function(e){ 
	  			var modal = $(e.target).data('section');
	  			$(modal).addClass('open');
	  		},
	  		closeModal: function(e){ 
	  			var modal = '.'+$(e.target).parents('section');
	  			$(modal).addClass('close');
	  		},
	  		smoothScroll: function(e){
			    event.preventDefault();
			    $('body').animate({
			        scrollTop:$(this.hash).offset().top
			    }, 550);
	  		},
	  		showNav: function(){
	  			var scrollTop = $(window).scrollTop();
	  			if (scrollTop >= 770 ){
	  				$('.main-nav').addClass('open');
	  			}else{
	  				$('.main-nav').removeClass('open');
	  			}
	  			
	  		}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);