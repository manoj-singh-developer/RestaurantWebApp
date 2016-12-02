$(document).on('click', '.delete', function(event){
	var table = document.getElementById("cartTable");
	var rowProductId = $('.delete').closest('tr').attr('id');
	rowProductId = rowProductId.replace( /^\D+/g, '');
	//var rowDelete = $('#row'+cartEntries[i].productId).closest('tr').index();
	var currentCartTotal = $("#subtotal").text().replace( /^\D+/g, '');
	currentCartTotal = parseInt(currentCartTotal);
	var rowDelete = $('.delete').closest('tr').index();
	var cartEntries = JSON.parse(localStorage.getItem("allEntries"));
	for(i = 0; i<cartEntries.length; i++){
		if(cartEntries[i].productId == rowProductId){
			currentCartTotal = currentCartTotal - parseInt(cartEntries[i].productTotal);
			$("#subtotal").html("$" + currentCartTotal + ".00");
			cartEntries.splice(i,1); 
			localStorage.allEntries = JSON.stringify(cartEntries);
			//localStorage.removeItem("allEntries[i]");
			table.deleteRow(rowDelete);

		}
	}

})
