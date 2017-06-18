
(function() {
    var myButton = document.querySelector('.mobile-menu');
    var myNav = document.querySelector('.main-menu');

    function toggle() {
        myNav.classList.toggle('display');
    };

    myButton.addEventListener("click", function(event) {
        event.preventDefault();//prevents default click behaviour
        toggle();
    });
})();

// Main image carousel
$(document).ready(function(){
	$(".slider > div:gt(0)").hide();

		 var carouselInt = '';

	   var carouDiv = function(){
	    carouselInt = setInterval(function() {
	      $('.slider > div:first')
	        .fadeOut(500)
	        .next()
	        .fadeIn(500)
	        .end()
	        .appendTo('.slider');
	    },3000);
	};

	$(carouDiv());//Initialise the carousel function

	$(".slider").hover(function(){//Stop the carousel on hover
	 clearInterval(carouselInt);
	  },function(){
	  carouDiv();
	});



	//Direction Arrow links
	$(".button-sales").click(function(){
		$(".header").fadeOut(800);
		$(".sales").animate({opacity:"show"},800);
	});
	$(".button-modern").click(function(){
		$(".header").fadeOut(800);
		$(".modern").animate({opacity:"show"},800);
	});
	$(".button-antique").click(function(){
		$(".header").fadeOut(800);
		$(".antique").animate({opacity:"show"},800);
	});
});


(function($){
	function floatLabel(inputType){
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
			$this.focus(function(){
				$this.next().addClass("active");
			});
			//on blur check field and remove class if needed
			$this.blur(function(){
				if($this.val() === '' || $this.val() === 'blank'){
					$this.next().removeClass();
				}
			});
		});
	}
	// just add a class of "floatLabel to the input field!"
	floatLabel(".floatLabel");
})(jQuery);

var html = $('html'),
    demo = $('.demo'),
		modal = $('.modal'),
    modalShow = $('.modal-show'),
    modalHide = $('.modal-hide'),
    modalWrapper = $('.modal-wrapper');

// Modal Show
modalShow.on('click', function(e) {
  // e.preventDefault();
  html.addClass('no-scroll');
  modal.addClass('is-visible');
  demo.attr('aria-hidden', 'true');
  modal.attr({
    'aria-hidden': 'false',
    'open': 'true',
    'tabindex': '0'
  });
});

// Modal Hide
modalHide.on('click', function(e) {
  // e.preventDefault();
  html.removeClass('no-scroll');
  modal.removeClass('is-visible');
  demo.attr('aria-hidden', 'false');
  modal.attr('aria-hidden', 'true');
  modal.removeAttr('open tabindex');
});

// Prevent toggle event from bubbling
// modalWrapper.on('click', function(e) {
//   e.stopPropagation();
// });


$('.img-container').click(function(){
  $(this).addClass('showImg');
  $(this).click(function(){
    $(this).removeClass('showImg');
  })
});
