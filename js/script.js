
const body=document.querySelector("body"),
	sidebar = body.querySelector(".sidebars"),
	modeSwitch = body.querySelector(".toggle-switch"),
	header = body.querySelector("header"),
	navbar = body.querySelector("header");
	switchs =document.querySelector(".switch::before");


	modeSwitch.addEventListener("click",() => {
		body.classList.toggle("dark-theme");
		switchs.classList.toggle("dark-switch");

		if(localStorage.getItem("theme") == "light" ){
		localStorage.setItem("theme","dark");
	}
	else{
		localStorage.setItem("theme","light");
	}

	});


	if(localStorage.getItem("theme") == "light" ){

	switchs.classList.remove("dark-switch");
	document.body.classList.remove("dark-theme");

}
else if(localStorage.getItem("theme") == "dark" ) {
	switchs.classList.add("dark-switch");
	document.body.classList.add("dark-theme");

}
else{
	localStorage.setItem("theme","light");
}