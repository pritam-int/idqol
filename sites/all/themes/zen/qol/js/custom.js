var regionArr = 	['#region1', '#region2', '#region3', '#region4'];

var int;

var index = 0;

var oldIndex = 0;

var delay = 2000;

var regionId;

var pattern = /[0-9]+/g;

var curLeaf;





jQuery(document).ready(function(){



//	int = setInterval(displayLeaf,delay);

//	jQuery(regionArr[index]).fadeIn();

//	index++;

	jQuery('#region3').show();

	jQuery('.mapPan area').hover(function() 

		{

			jQuery(curLeaf).fadeOut();

			regionId = this.hash;

			oldIndex =index = (regionId.match(pattern)-1);

			index++;

			if(index>regionArr.length-1)index = 0;

			jQuery(regionId).fadeIn();

			jQuery(regionId).css({'z-index':regionArr.length});

			clearInterval(int);



		},

		function () 

		{

			jQuery('#region3').show();

			jQuery(regionId).fadeOut();

			jQuery(regionId).css({'z-index':'1'});

			int = setInterval(displayLeaf,delay);

		}

	);

	

	jQuery('#slider').cycle({

		fx: 'scrollHorz',

		timeout: 5000,

		prev: '#prev',

		next: '#next',

	});

	

		jQuery(".newsticker-jcarousellite").jCarouselLite({

		vertical: true,

		hoverPause:true,

		visible: 2,

		auto:5000,

		speed:1000

	});



	jQuery('.custom_individual #edit-field-payment-option .form-type-radios #edit-field-payment-option-und .form-item-field-payment-option-und #edit-field-payment-option-und-0-').next().css('display','none');

	jQuery('.custom_individual #edit-field-payment-option .form-type-radios #edit-field-payment-option-und .form-item-field-payment-option-und #edit-field-payment-option-und-1-').attr('checked', true);



	jQuery('.custom_individual_edit_form #edit-field-payment-option .form-type-radios #edit-field-payment-option-und .form-item-field-payment-option-und #edit-field-payment-option-und-0-').next().css('display','none');

	//jQuery('.custom_individual_edit_form #edit-field-payment-option .form-type-radios #edit-field-payment-option-und .form-item-field-payment-option-und #edit-field-payment-option-und-1-').attr('checked', true);





	jQuery('.view-video-view ul').hide();
	jQuery('.view-video-view .item-list:first-child ul').css('display', 'block');
	jQuery('.view-video-view h3').css('cursor', 'pointer');
	jQuery('.view-video-view h3').click( function() {
									   

		var cur = jQuery(this).next();
		var old = jQuery('.view-video-view ul:visible');
		if ( cur.is(':visible') )
		return false;
		old.slideToggle(500);
		cur.stop().slideToggle(500);

	} );




	jQuery('.view-resources-view ul').hide();
	jQuery('.view-resources-view .item-list:first-child ul').css('display', 'block');
	jQuery('.view-resources-view h3').css('cursor', 'pointer');
	jQuery('.view-resources-view h3').click( function() {
									   

		var cur = jQuery(this).next();
		var old = jQuery('.view-resources-view ul:visible');
		if ( cur.is(':visible') )
		return false;
		old.slideToggle(500);
		cur.stop().slideToggle(500);

	} );

});






//function displayLeaf()

//{

//	jQuery(regionArr[oldIndex]).fadeOut();

//	jQuery(regionArr[oldIndex]).css({'z-index':'1'});

//	

//	jQuery(regionArr[index]).fadeIn();

//	jQuery(regionArr[index]).css({'z-index':regionArr.length});

//	curLeaf = regionArr[index];

//	oldIndex = index;

//	index ++;

//	if(index>regionArr.length-1)index = 0;

//	

//}

