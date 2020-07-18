//Profile Page
$(document).ready(function(){

//mobile change btn
$("#mbtn").click(function(){
	$(this).hide();
	//$("#mbtnp").css("display","inline");
	$("#mbtnp").slideToggle();
})

//Address Change btn
$("#abtn").click(function(){
	$(this).hide();
	$("#abtnp").slideToggle();
})

// Email Change btn
$("#ebtn").click(function(){
	$(this).hide();
	$("#ebtnp").slideToggle();
})
	
// Email Password btn
$("#passbtnp").hide();
$("#passbtn").click(function(){
	$(this).hide();
	$("#passbtnp").slideToggle();
})

	})
