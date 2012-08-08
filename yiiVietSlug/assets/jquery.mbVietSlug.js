(function($){
    $.fn.extend({
        mbVietSlug: function(options) {
        	var defaults = {
				target: 'slug'
			}
			var options =  $.extend(defaults, options);
    		return this.each(function() {
    			$(this).change(function(){
    				$(options.target).val($(this).val().toVietSlug());
    			});
    		});
    	}
	});
})(jQuery);