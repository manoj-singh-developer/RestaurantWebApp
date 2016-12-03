function completeOrder(){
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var email = document.getElementById('mail').value;
	var phone = document.getElementById('phone').value;
	var instructions = document.getElementById('instructions').value;

	console.log(firstName, lastName, email, phone, instructions);

	//if pickup seleted
	if(document.getElementById("pickup").checked == true){
		var pickupTime = document.getElementById('pickupTime').value;
		var deliveryTime = null;
		var deliveryStreet = null;
		var deliveryCity = null;
		var deliveryState = null;
		var deliveryZip = null;
		var deliveryCountry = null;
	}

	//if delivery selected 
	if(document.getElementById("delivery").checked == true) {
		var deliveryTime = document.getElementById('deliveryTime').value;
		var deliveryStreet = document.getElementById('deliveryStreet').value;
		var deliveryCity = document.getElementById('deliveryCity').value;
		var deliveryState = document.getElementById('deliveryState').value;
		var deliveryZip = document.getElementById('deliveryZip').value;
		var deliveryCountry = document.getElementById('deliveryCountry').value;
		var pickupTime = null;
	}
	
	console.log(deliveryTime, deliveryStreet, deliveryCity, deliveryState, deliveryZip, deliveryCountry);
	//if same as delivery checked 
	if(document.getElementById("sameAddress").checked == true){
		var billingStreet = deliveryStreet;
		var billingCity = deliveryCity;
		var billingState = deliveryState;
		var billingZip = deliveryZip;
		var billingCountry = deliveryCountry;
		var billingFname = firstName;
		var billingLname = lastName;
	} else{
		var billingStreet = document.getElementById('billingStreet').value;
		var billingCity = document.getElementById('billingCity').value;
		var billingState = document.getElementById('billingState').value;
		var billingZip = document.getElementById('billingZip').value;
		var billingCountry = document.getElementById('billingCountry').value;
		var billingFname = document.getElementById('billingFName').value;
		var billingLname = document.getElementById('billingLName').value;
	}

	console.log(billingStreet, billingCity, billingState, billingZip, billingCountry, billingFname, billingLname);

	var cardNumber = document.getElementById('cardNumber').value;
	var expirationMonth = document.getElementById('card_month').value;
	var expirationYear = document.getElementById('card_year').value;
	var cardCode = document.getElementById('cardCode').value;

	console.log(cardNumber, expirationMonth, expirationYear, cardCode);

	var cartEntries = JSON.parse(localStorage.getItem("allEntries"));

	var orderInfo = [
			firstName, 
			lastName, 
			email, 
			phone, 
			instructions,
			pickupTime, 
			deliveryTime,
			deliveryStreet, 
			deliveryCity, 
			deliveryState, 
			deliveryZip, 
			deliveryCountry,
			billingStreet, 
			billingCity, 
			billingState,
			billingZip, 
			billingCountry, 
			billingFname, 
			billingLname, 
			cardNumber, 
			expirationMonth, 
			expirationYear, 
			cardCode
		];
		
    xhr = new XMLHttpRequest;
    console.log(orderInfo);
    console.log("here");
	xhr.open( "POST", "testOrder.php" );
	xhr.setRequestHeader( "Content-Type", "application/json" );
	xhr.send(JSON.stringify(orderInfo));

}