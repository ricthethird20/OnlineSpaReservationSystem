$(function() {
	
	$("#check-book").on("click",function(){
		var dt = $("#book-date").val();
		var strTime = $("#book-time").val();
		var endTime = $("#book-end").val();
		strTime = strTime.replace(':','');
		endTime = endTime.replace(':','');
		if(strTime != '' && endTime != '' && dt != ''){
			request({
				url: "includes/checkAvailability.php",
				data: {
					dt: dt,
					startTime: strTime,
					endTime: endTime
				}
			},
			function(result) {
				if (result.status == "ok") {
					$("#td-unavailable").hide(300);
					$("#td-available").show(300);
					$("#tbl-book").show(300);
				} else {
					$("#td-unavailable").show(300);
					$("#td-available").hide(300);
					$("#tbl-book").hide(300);
				}
			},
			function() {
				
			});		
		}else{
			alert('Please select time for your booking.');
			return;
		}

	});
	
	$(".p_book").on("click",function(){
			var userId = $("#svc_userid").val();
			if(userId != ''){
				var svcId = $(this).closest(".p_book").attr("id");
				window.location.href="index.php?pg=book&svcId="+svcId;
			}else{
				alert('Please login first.');
				$('.cd-signin').trigger('click'); // Also Works
			}
	});
	
	$("#book-time").on("change", function() {
			
			var startTime = $(this).val().split(':');
			var endHours = parseInt(startTime[0]) +1;
			endHours = Math.min(Math.max(endHours, 1), 24);
			$('#book-end').val(pad(endHours,2) +':'+ startTime[1]);	
	});
		
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