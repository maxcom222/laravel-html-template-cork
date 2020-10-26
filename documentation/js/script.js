var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}

const ps = new PerfectScrollbar('.menu-categories', {
    wheelSpeed:.5,
    swipeEasing:!0,
    minScrollbarLength:40,
    maxScrollbarLength:300
});
// sbar-open

document.getElementsByClassName('sidebarCollapse')[0].addEventListener('click', function() {
	document.getElementsByClassName('main-container')[0].classList.toggle('sbar-open');
	document.getElementsByClassName('overlay')[0].classList.toggle('show');

	console.log('happy')
})
document.getElementsByClassName('overlay')[0].addEventListener('click', function() {
	document.getElementsByClassName('main-container')[0].classList.remove('sbar-open');
	this.classList.remove('show');	
})