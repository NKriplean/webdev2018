var totalCost = 0;

function addToCart(itemName, itemPrice)
{
	var cart = document.getElementById("cart");
	var listItem = document.createElement("li");
	var listItemText = itemName + " " + itemPrice;
	listItem.setAttribute('id',itemName);
	listItem.appendChild(document.createTextNode(listItemText));
	cart.appendChild(listItem);
}

function totalCalc(price)
{
	totalCost += price;
}

function removeFromCart(itemName)
{
	var cart = document.getElementById("cart");
	var listItem = document.getElementById(itemName);
	cart.removeChild(listItem);
}