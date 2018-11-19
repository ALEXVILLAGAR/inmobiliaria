$(document).ready(function(){
	$('#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

function openNav() {
    document.getElementById("sidebar-wrapper").style.width = "100%";
}

function closeNav() {
    document.getElementById("sidebar-wrapper").style.width = "0";
}

$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
});
