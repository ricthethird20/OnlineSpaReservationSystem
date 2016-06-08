$(function() {
	$("#btnConfirm").on("click",function(){
		var q = confirm("Do you really want to confirm this booking?");
		if(q){	
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
				request({
					url: "includes/updateBooking.php",
					data: {
						bookId: id,
						status: 'Confirmed'
					}
				},
				function(result) {
					location.href = 'index.php?page=bookings';
				},
				function() {
					
				});
		}
	});
	
	$("#btnCancel").on("click",function(){
		var q = confirm("Do you really want to cancel this booking?");
		if(q){	
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
				request({
					url: "includes/updateBooking.php",
					data: {
						bookId: id,
						status: 'Cancelled'
					}
				},
				function(result) {
					location.href = 'index.php?page=bookings';
				},
				function() {
					
				});
		}
	});
	
	function request(param, onSuccess, onError) {
		$.ajax({
			url: param.url,
			data: param.data,
			type: "POST",
			success: function(result) {
				if ( onSuccess ) {
					onSuccess(result);
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				if ( onError ) {
					onError(thrownError);
				}
			}
		});
	}
});