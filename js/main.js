var activeSlide = 0;
showSlide(activeSlide);


function changePrice()
{
	var optionBox = document.getElementById("sizeform");
	
	var selectedOption = optionBox.options[optionBox.selectedIndex].value;
	var quantity = document.getElementById("quantityform").value;
	var productPrice = document.getElementById("product_price");
	
	switch(selectedOption){
		case '1.5m':
			productPrice.innerHTML = "$" + parseFloat(quantity * 4.99);
			break;
		case '3m':
			productPrice.innerHTML = "$" + parseFloat(quantity * 10.99);
			break;
		case '9m':
			productPrice.innerHTML = "$" + parseFloat(quantity * 20.99);
			break;
			
	}
}


function validation()
{
	var quantity = document.getElementById("quantityform").value;
	if(quantity < 1){
		return false;
	}else{
		return true;
	}
}

/*This is for the quantity box*/
function quantity(x)
{
	var quantity = document.getElementById("quantityform").value;
	var newQuantity = parseInt(quantity) + x;
	
	if(newQuantity == 0){
		document.getElementsByClassName("quantity_button")[0].style.backgroundColor = "var(--accent-color)";
	}
	if(newQuantity < 0){
		newQuantity = 0;
	}
	if(newQuantity > 0){
		document.getElementsByClassName("quantity_button")[0].style.backgroundColor = "var(--secondary-bg-color)";
	}
	document.getElementById("quantityform").value = newQuantity;
	changePrice();
}



/*This is all the carousel code*/

function carouselArrow(x)
{
    showSlide(activeSlide += x);
}

function showSlide(x) {
    var slides = document.getElementsByClassName("carousel_slide");
    if (x > slides.length - 1) {
        activeSlide = 0;
    }
    if (x < 0) {
        activeSlide = slides.length - 1;
    }
    var i;
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[activeSlide].style.display = "block";
}



