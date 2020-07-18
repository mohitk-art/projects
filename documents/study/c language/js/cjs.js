function a()
{
$(document).ready(function(){

/*page */
$(".page").hide();
$(".page").dblclick(function(){
$(this).slideToggle();
$(this).css('background','');
});

$(".page").click(function(){
$(this).css('background','');
});


/*algorithm */
$("#algo").click(function(){
$("#algop").slideToggle();
});



/*flowchart */
$("#flow").click(function(){
$("#flowp").slideToggle();
});


/*language */
$("#lang").click(function(){
$("#langp").slideToggle();
});


/*language translators */
$("#lt").click(function(){
$("#ltp").slideToggle();
});



/*program debugginng */
$("#pd").click(function(){
$("#pdp").slideToggle();
});


/*structure of program */
$("#sp").click(function(){
$("#spp").slideToggle();
});


/*programs */
$("#prog").click(function(){
$("#progp").slideToggle();
});
});
}