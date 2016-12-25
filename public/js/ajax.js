$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(window).ready(function(){

	$('body').on('click','.filter_tovar_btn',function(){
		var type = $(this).data('type');
		$.ajax({
		    type: "GET",
		    url: '/getFilterRequest',
		    data: {
		    	type:type,
		    },
		    success: function(result) {
		        console.log(result);
			},
			error: function(data) {
			   	
		    }
		});	
	})
})

