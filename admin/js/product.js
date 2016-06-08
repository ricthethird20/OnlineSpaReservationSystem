$(function() {
	
	
	$(document).on("click", "#edit-product", function() {
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
			var prodId = $(this).closest('tr').children('td.prodId').text();
			var prodName = $(this).closest('tr').children('td.prodName').text();

			$('#prod_id').val(prodId);
			$('#prodName').val(prodName);

	});
	

	
	$(document).on("click", "#delete-product", function() {
		var q = confirm("Do you really want to delete this product?");
		if(q == true){		
			selectedRow = $(this).parent().parent();
			var id = $(selectedRow).attr("id");
			var row = $(this).parent().parent();
			request({
				url: "includes/delete-product.php",
				data: {
					id: id
				}
			},
			function(result) {
					$(row).hide(500);	
			},
			function() {
				alert(result.message);
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