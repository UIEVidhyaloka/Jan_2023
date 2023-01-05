$('.nested-accordion').find('.comment').slideUp();
$('.nested-accordion').find('h3').click(function(){
  $(this).next('.comment').slideToggle(100);
  $(this).toggleClass('selected');
});

const accordion = document.getElementsByClassName('accordion-container');

for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
    this.classList.toggle('active')
  })
}

$('.btn-showmore').click(function(){
	var showmorefaq = document.getElementById("showmorefaq");
	var btnshowmore = document.getElementById("btn-showmore");
	if(showmorefaq.style.display === "none"){
		showmorefaq.style.display="block";
		btnshowmore.innerHTML = "Show Less FAQs"; 
	}else{
		showmorefaq.style.display="none";
		btnshowmore.innerHTML = "Show More FAQs";
	}
});