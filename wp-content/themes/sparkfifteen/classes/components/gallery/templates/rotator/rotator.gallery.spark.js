(function($){
	

// Rotator App
  var Rotator = Backbone.View.extend({
  		el: '.spark-rotator',

  		// Default Variables for Application
  		defaults: {
        speed: 500,
        keyboardPaging: true,
        slideClass: '.spark-slide',
        sliderClass: '.slide-container',
        sliderWindowClass: '.window',
        slideWidth: '100vw'
  		},

  		//Delegated Events for user actions
  		events: {
      		"click .paging.prev": "goPrevious",
          "click .paging.next": "goNext"
  		},


  		//Initialization function
  		initialize: function(){
        this.options = _.extend({}, this.defaults, this.options);
        this.createUI();
        console.log('here');
  		},

      createUI: function(active) { 
        this.$( this.options.slideClass + '.active').removeClass('active');
        this.$( this.options.slideClass + '.prev').removeClass('prev');
        this.$( this.options.slideClass + '.next').removeClass('next');
        this.$( this.options.slideClass + '.two-ahead').removeClass('two-ahead');
        this.$( this.options.slideClass + '.two-behind').removeClass('two-behind');


        slideCount = this.$(this.options.slideClass).length;

        // 'Add Active Class to Active Slide'
        if ( !active )
          this.$(this.options.slideClass).first().addClass('active');
        else
          active.addClass('active');

        //Check for 2-Up Slides
        if ( !this.$('.active').next().length && slideCount >= 5 )
          this.$(this.options.slideClass).not('.active').first().appendTo(this.options.sliderClass);

        if ( !this.$('.active').next().next().length && slideCount >= 5 )
          this.$(this.options.slideClass).not('.active').first().appendTo(this.options.sliderClass);

        if ( !this.$('.active').prev().length && slideCount >= 5  )
          this.$(this.options.slideClass).not('.active').last().prependTo(this.options.sliderClass);

        if ( !this.$('.active').prev().prev().length && slideCount >= 5  )
          this.$(this.options.slideClass).not('.active').last().prependTo(this.options.sliderClass);



        // if ( !this.$('.active').prev().prev().length && slideCount >= 5  )       

        // Add Next and Prev Classes
        this.$('.active').next(this.options.slideClass).addClass('next');
        this.$('.active').next(this.options.slideClass).next().addClass('two-ahead');

        this.$('.active').prev(this.options.slideClass).addClass('prev');
        this.$('.active').prev(this.options.slideClass).prev().addClass('two-behind');



        //Move Slides and Add Active Class
        // this.$( this.options.slideClass + '.active' ).removeClass('active');

        //Position Slider
        // this.positionSlider();

      },
      // positionSlider: function(){
      //   var windowOffset = this.$( this.options.sliderWindowClass ).offset();
      //   var activeOffset = windowOffset.left - this.$('.active').offset().left;
      //   this.$(this.options.sliderClass).css('margin-left', activeOffset );
      // },

  		goPrevious: function(){
        var newActive = ( this.$('.active').prev().length ? 
                          this.$('.active').prev() : 
                          this.$(this.options.slideClass).last() 
                        );
        this.createUI(newActive);
  		}, 

  		goNext: function(){
        var newActive = ( this.$('.active').next().length ? 
                          this.$('.active').next() : 
                          this.$(this.options.slideClass).first() 
                        );
        this.createUI(newActive);
  		}
  });


  $(document).ready(function(){
  		var homeRotator = new Rotator;
  })
  



})(jQuery);