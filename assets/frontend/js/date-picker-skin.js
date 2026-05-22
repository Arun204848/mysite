$('.show_cal input').datepicker({		
   beforeShow: function(input, inst) {
   		var dataClass = 'datepicker_skins';
       	$('#ui-datepicker-div').removeClass(function() {
       		return dataClass; 
       	});
       	$('#ui-datepicker-div').addClass(dataClass);
   }
});