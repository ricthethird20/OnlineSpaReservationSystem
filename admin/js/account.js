$(function() {
	
	$(document).on("click", "#btClientEdit", function() {
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
			var lname = $(this).closest('tr').children('td.acct-lname').text();
			var fname = $(this).closest('tr').children('td.acct-fname').text();
			var contact = $(this).closest('tr').children('td.acct-contact').text();

			$('#cl-lname').val(lname);
			$('#cl-fname').val(fname);
			$('#cl-contact').val(contact);
			$('#acct-id').val(id);
			
	});
	
	$(document).on("click", "#btnClientBook", function() {
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
			var lname = $(this).closest('tr').children('td.acct-lname').text();
			var fname = $(this).closest('tr').children('td.acct-fname').text();


			$('#book-lname').val(lname);
			$('#book-fname').val(fname);
			$('#book-id').val(id);
			
	});
	
	
	
	$(document).on("click", "#clear-client", function() {
			$('#cl-lname').val('');
			$('#cl-fname').val('');
			$('#cl-contact').val('');
			$('#acct-id').val('');
	});

	
	$(document).on("click", "#btClientDelete", function() {
		var q = confirm("Do you really want to delete this client info?");
		if(q == true){		
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
			var row = $(this).parent().parent();
			request({
				url: "includes/delete-account.php",
				data: {
					id: id
				}
			},
			function(result) {
				//if (result.status == "success") {
					$(row).hide(500);
				//} else {
				//	alert(result.status);
				//}
			},
			function() {
				
			});
		}
	});
	
	$("#dt-starttime").on("change", function() {
			
			var startTime = $(this).val().split(':');
			var endHours = parseInt(startTime[0]) +1;
			endHours = Math.min(Math.max(endHours, 1), 24);
			$('#dt-endtime').val(pad(endHours,2) +':'+ startTime[1]);	
			var st = $(this).val().replace(':','');
			var ed = $('#dt-endtime').val().replace(':','');
			checkAvailableBooking(st,ed);
			
	});
	
	function checkAvailableBooking(startTime,endTime){
		request({
				url: "checkAvailability.php",
				data: {
					dt: dt,
					startTime: startTime,
					endTime: endTime
				}
			},
			function(result) {
				if (result.status == "ok") {
					
				} else {

				}
			},
			function() {
				
			});	
	}
	
	function pad (str, max) {
	  str = str.toString();
	  return str.length < max ? pad("0" + str, max) : str;
	}
	
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