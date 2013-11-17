/* Flexslider used by carousel and our friends slider */

$(document).ready(function()

						{

							/* Carousel */

							$('#flexslider').flexslider({

														animation: "slide",

														 easing: "swing",

														 animationLoop: true,

														 controlNav: false,

														 minItems: 1,

														 before:function(slider){

															 $(slider).find('.carousel-caption').hide();

															 },

														 after: function(slider){

															 $(slider).find('.carousel-caption').fadeIn('slow');

															 },

														 maxItems: 1

														});

							/* End Carousel */

							

							/* Our friends slider */

							$('#flex-clients').flexslider({

														  animation: "slide",

														 easing: "swing",

														 animationLoop: true,

														 controlNav: false,

														 itemWidth: 145, 
														 minItems: 5

														  });

							});

							/* End Our friends slider */

							

/* End Flexslider used by carousel and our friends slider */



/* Footer social icons background slide effect */  

$(document).ready(function(){

  $(".social-icon")

   // On mouse over, move the background on hover

   .mouseover(function(){

     	 $(this).css({'background-position': '0px 0px'}).

		animate({'background-position': '0px -32px'});

   })

   // On mouse out, move the background back

   .mouseout(function(){

      	 $(this).css({'background-position': '0px -32px'}).

		animate({'background-position': '0px 0px'});

   })



 });

/* Footer social icons background slide effect */



/* Modal window */

$('#myModal').modal({

							show:false

						});



/* End Modal windows */	



$('.tooltip').tooltip();

$('.popover-test').popover();



