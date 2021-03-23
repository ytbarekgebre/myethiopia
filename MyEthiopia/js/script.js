
function getEle(id){
	return document.getElementById(id);
}


var navbar = getEle('navbarID');


function navPop(){
	var yValue = window.pageYOffset;

	if (yValue > 100) {
		navbar.classList.add('nav-active');
		navbar.classList.add('bounceInDown')

	} else {
		navbar.classList.remove('nav-active');
		navbar.classList.remove('bounceInDown');
		


	}
}
window.onscroll = function() {
	navPop();
}

// Slider





