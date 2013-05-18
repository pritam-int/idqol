(function($){
	$(document).ready(function(){		
		var Drupal = Drupal || { 'settings': {}, 'behaviors': {}, 'themes': {}, 'locale': {} };
		jQuery.extend(Drupal.settings, { "basePath": "/" });
		$('.link_container .link_cont').click(function(){			
			var front_id = this.id;
			var base_path = Drupal.settings.basePath;
			
			alert(front_id +' '+base_path);
			
			$.ajax({
				type: "POST",
				url: base_path+'change_the_front',
				data: "front_id=" + front_id,
				success: function(msg) {
				  window.location = msg;
				}
			});
		});		
	});
})(jQuery);