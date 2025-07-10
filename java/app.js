

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => 	{
	hamburger.classList.toggle("active");
	navMenu.classList.toggle("active");
})

const icon = document.querySelector('.icon');
const search = document.querySelector('.searchC');

icon.onclick = function(){
    search.classList.toggle('active');
}
const spans = document.querySelectorAll('.progress-bar span');

spans.forEach((span) => {
    span.style.width = span.dataset.width;
    span.innerHTML = span.dataset.width;
});

function show(anything){
	document.querySelector(".textbox").value = anything;
}
function show2(anything){
	document.querySelector(".textbox2").value = anything;
}
function show3(anything){
	document.querySelector(".textbox3").value = anything;
}


const dropdown = document.querySelector('.dropdown');

dropdown.onclick = function(){

	dropdown.classList.toggle('active');
}

const dropdown2 = document.querySelector('.dropdown2');

dropdown2.onclick = function(){

	dropdown2.classList.toggle('active');
}

const dropdown3 = document.querySelector('.dropdown3');

dropdown3.onclick = function(){

	dropdown3.classList.toggle('active');
}

function submitthis() {
	document.getElementById("re-schedule").style.backgroundColor = "blue";
	document.getElementById("re-schedule").innerText = "Voluntered!"
}








	

