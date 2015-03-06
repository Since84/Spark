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
	  			'click .download-report': 'openDownloadForm',
	  			'click .close': 'closeDownloadForm',
	  			'click input[type="checkbox"]': 'toggleChecked',
	  			'click .case': 'openCase',
	  			'click .case-study-footer .close': 'closeCaseStudies',
	  			'click .lesson-pager li': 'toggleSelection',
	  			'click .modal-trigger': 'openModal',
	  			'click .modal-footer .close': 'closeModal',
	  			'click .modal-nav a': 'scrollModal'
	  		},


	  		//Initialization function
	  		initialize: function(){
	  			var self = this;
	  			// this.initPanelNav();
	  			// this.initCycle();
	  			// this.initModal();
	  			$('.main-nav a').smoothScroll();
	  			$(window).scroll(function(){
	  				self.showNav();
	  			})
				self.setNav();
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
	  			$(e.target).addClass('selected').siblings().removeClass('selected');
	  			$(e.target).parents('.lessons').find('.selected-block li.selected').removeClass('selected');
	  			$(e.target).parents('.lessons').find(".selected-block li."+ selected).addClass('selected');
	  		},
	  		openModal: function(e){ 
	  			var modal = $(e.target).data('section');
	  			$(modal).addClass('open');
	  		},
	  		closeModal: function(e){ 
	  			var modal = $(e.target).parents('section');
	  			$(modal).removeClass('open');
	  		},
	  		scrollModal: function(e){
				$.smoothScroll({
		            scrollElement: $('section.resources-media .slides'),
		            scrollTarget: $(e.target).attr('href')
		        });
		        return false;
	  		},
	  		// smoothScroll: function(e){
			  //   event.preventDefault();
			  //   $('body').animate({
			  //       scrollTop:$(this.hash).offset().top
			  //   }, 550);
	  		// },
	  		showNav: function(){
	  			var scrollTop = $(window).scrollTop();

	  			if (scrollTop >= 770 ){
	  				$('.main-nav').addClass('open');
	  			}else{
	  				$('.main-nav').removeClass('open');
	  			}
	  		},
	  		setNav: function(){
	  			var scrollTop = $(window).scrollTop();
	  			var $sections = $('body > section[id]');
	  			var $navs = $('.main-nav li');

	  			var topsArray= $sections.map(function(){
	  				return $(this).position().top - 300;
	  			}).get();

	  			var len = topsArray.length;
	  			var currentIndex = 0;
	  			var getCurrent = function( top ) {
				    for( var i = 0; i < len; i++ ) {   // index should be displayed
				        if( top > topsArray[i] && topsArray[i+1] && top < topsArray[i+1] ) {
				            return i;
				        }
				    }
	  			};

				$(document).scroll(function(e) {
				    var scrollTop = $(this).scrollTop();
				    var checkIndex = getCurrent( scrollTop );
				    if( checkIndex !== currentIndex ) {
				        currentIndex = checkIndex;
				        $navs.eq( currentIndex ).addClass("active").siblings(".active").removeClass("active");
				    }
				});


	  			// $('section').each(function(){
	  			// 	var id 				=  	$(this).attr('id');
	  			// 	var position 		= 	$(this).offset().top;
	  			// 	var height			=	$(this).outerHeight();
	  			// 	var elemPosition	=	scrollTop - position;
	  			// 	var navElem 		=	$('.main-nav #' + id );
	  			// 	var isActive		=	navElem.hasClass('active');



	  			// 	console.log("Elem Position: " + Math.abs(elemPosition), " Height:" + (elemPosition - height))
	  			// 	if ( id 
	  			// 		&& !isActive
	  			// 		&& Math.abs(elemPosition) >= 0 
	  			// 		&& elemPosition - height < 0 
	  			// 	)
	  			// 	{
	  			// 		// $('.active').removeClass('active');
	  			// 		$( navElem ).addClass('active');
	  			// 	}else
	  			// 	{
	  			// 		$( navElem ).removeClass('active');
	  			// 	}
	  			// })

	  			
	  		}
	  	});


	$(document).ready(function(){
		var App = new AppView;
	})	

})(jQuery);