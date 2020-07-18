//hide pages
function hide_f()
{
$("#gbtnp").hide();
$("#sbtnl").hide();
$("#abtnp").hide();
$("#cbtnp").hide();
$("#hbtnp").hide();
}

//display buttons
function dis_btn()
{
$("#gbtn").css('display','');
$("#sbtn").css('display','');
$("#abtn").css('display','');
$("#cbtn").css('display','');
$("#hbtn").css('display','');
}

/*headder */
function a()
{
document.getElementById("header").innerHTML="<table id='h1'><tr><td><img src='photos/ce1.jpg' class='hi1'/></td><td>Computer Engineering</td><td><img src='photos/ce0.jpg' class='hi2'/></td></table><!--button list --><nav id='bl'><a href='front page.htm'><button id='hbtn'>HOME</button></a>	<button id='gbtn'>GALLERY</button><button id='sbtn'>SUBJECTS</button><button id='abtn'>ABOUT US</button><button id='cbtn'>CONTECT US</button></nav><!--shares list --><div id='share'>	<div id='sbg' style='background:url(photos/facebook.png)'><img src='photos/facebook icon.jpg' style='height:50px;width:50px;border-radius:5px'/></div>	<div id='sbg' style='background:url(photos/twitter.jpg)'><img src='photos/twitter icon.png' style='height:50px;width:50px;border-radius:5px'/></div>	<div id='sbg' style='background:url(photos/whatsapp.jpg)'><img src='photos/whatsapp icon.jpg' style='height:50px;width:50px;border-radius:5px'/></div>	<div id='sbg' style='background:url(photos/youtube.jpg)'><img src='photos/you tube1.jpg' style='height:50px;width:50px;border-radius:5px'/></div>	<div id='sbg' style='background:url(photos/email.jpg)'><img src='photos/email icon.jpg' style='height:50px;width:50px;border-radius:5px'/></div></div>";
}




/*add */
function add()
{
document.getElementById("add").innerHTML="<hr/><marquee>welcome to computers hube</marquee><hr/>";
}





/*pages */
function b()
{

$(document).ready(function(){
hide_f();
$("#hbtn").hide();
$("#hbtnp").css('display','');
/*home */
$("#hbtn").click(function(){
/*display buttons */
dis_btn();
$(this).hide();
/*hide pages*/
hide_f();
/*slde page */
$("#hbtnp").slideToggle();
});


/*gallery */
$("#gbtn").click(function(){
$("body").css('background','-webkit-linear-gradient(60deg,#00FF00,#00FF33,#00FF66,#00FF99,#00FFCC)');
/* diaplay buttons */
dis_btn();
$(this).hide();
/*hide page*/
hide_f();
/*slide page */
$("#gbtnp").slideToggle();
});


/*subject */
$("#sbtn").click(function(){
$("body").css('background','-webkit-linear-gradient(175deg,#CCFF00,#CCFF33,#CCFF66,#CCFF99,#CCFFCC,#CCFFFF)');
/*display buttons */
dis_btn();
$(this).hide();
/*hide pages*/
hide_f();
/*slide page */
$("#sbtnl").slideToggle();
});


/*about us */
$("#abtn").click(function(){
/*display buttons */
dis_btn();
$(this).hide();
/*hide pages*/
hide_f();
/*slide page */
$("#abtnp").slideToggle();
});


/*contect us */
$("#cbtn").click(function(){
/*display butttons */
dis_btn();
$(this).hide();
$("body").css('background','-webkit-linear-gradient(30deg,#FFFFFF,#FFFFCC,#FFFF99,#FFFF66,#FFFF33,#FFFF00)');
/*hide pages*/
hide_f();
/*slide page */
$("#cbtnp").slideToggle();
});
});

}






/*footer */
function footer()
{
document.getElementById("footer").innerHTML="<table border=0 width=100% id=footer><tr><th colspan=2 width=40% id=hf1>Call us<hr color=red /></th> <th>&nbsp;</th> <th colspan=2 width=40% id=hf2>Follow us<hr color=red /></th></tr><tr><th><img src='phone icon1.png' id='fi'/></th><td id=fd>+919416953241</td> <td rowspan=4 id=fc width=20%><marquee>copyright &copy; 2017.Designed by Mohit, Mehak, Ashna, Akash</marquee></td> <th><img src='facebook icon.png' id='fi'/></th><td id=fd>Facebook</td></tr><tr><th>Address:</th><td id=fd>Seth Jai Parkash Polytechnic, Damla(Yamunanager)</td> <th><img src='twitter icon2.jpg' id='fi'/></th><td id=fd>Twitter</td></tr><tr><th><img src='email icon.jpg' id='fi'/></th><td id=fd>mksjppdamla27@gmail.com</td> <th><img src='you tube1.jpg' id='fi'/></th><td id=fd>You tube</td></tr><tr><th><img src='whatsapp icon.jpg' id='fi'/></th><td id=fd>+919068456423</td> <th>&nbsp;</th><td>&nbsp;</td></tr></table>";
/*style="height:150px;width:100%;background-color:white;margin-top:150px"*/
}