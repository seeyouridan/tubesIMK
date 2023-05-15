let docTitle = document.title;
window.addEventListener("blur", () => {
    document.title = "Kemana bang? :(";
});

window.addEventListener("focus", () => {
    document.title = docTitle;
});

$(document).ready(function() {
	$(".showContent-btn .btn1").click(function() {
		$(this).closest('.showContent-frame').find('.showFronted2').slideDown('slow');
		$(this).fadeOut('slow');
		$(this).closest('.showContent-btn').find('.btn2').fadeIn('slow');
	});

	$(".showContent-btn .btn2").click(function() {
		$(this).closest('.showContent-frame').find('.showFronted2').slideUp('slow');
		$(this).fadeOut('slow');
		$(this).closest('.showContent-btn').find('.btn1').fadeIn('slow');
	});
});