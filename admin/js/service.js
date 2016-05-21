$(function() {
	
	$(document).on("click", "#edit-service", function() {
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
			var svcName = $(this).closest('tr').children('td.svcName').text();
			var svcDetail = $(this).closest('tr').children('td.svcDetail').text();
			var svcCost = $(this).closest('tr').children('td.svcCost').text();
			var svcFeat = $(this).closest('tr').children('td.svcFeat').text();
			var svcDisc = $(this).closest('tr').children('td.svcDisc').text();
			$('#serviceName').val(svcName);
			$('#serviceDetails').val(svcDetail);
			$('#serviceCost').val(svcCost);
			$('#serviceDisc').val(svcDisc);
			$('#hidden_id').val(id);
			if(svcFeat == 'Yes')
				$('input:radio[name=radButton]')[0].checked = true;
			else
				$('input:radio[name=radButton]')[1].checked = true;
	});
	
	$(document).on("click", "#btnClear", function() {
			$('#hidden_id').val('');
			$('#serviceName').val('');
			$('#serviceDetails').val('');
			$('#serviceCost').val('');
			$('#serviceDisc').val('');
			$('input:radio[name=radButton]')[0].checked = true;
	});

	
	$(document).on("click", "#delete-service", function() {
		var q = confirm("Do you really want to delete this service?");
		if(q == true){		
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
			var row = $(this).parent().parent();
			request({
				url: "includes/delete-service.php",
				data: {
					id: id
				}
			},
			function(result) {
				if (result.status == "success") {
					$(row).hide(500);
				} else {
					alert(result.message);
				}
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