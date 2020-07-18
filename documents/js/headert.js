function a()
{
document.getElementById("header").innerHTML="<div id='h1'><img src='photos/ce1.jpg' class='hi1'/>Computer Engineering</div><img src='photos/ce0.jpg' class='hi2'/><div id='bl'><button id='hbtn'>HOME</button><button id='gbtn'>GALLERY</button><button id='sbtn'>SUBJECTS</button><button id='abtn'>ABOUT US</button><button id='cbtn'>CONTECT US</button></div> <div id='share'><div id='sbg' style='background:url(photos/facebook.png)'><img src='photos/facebook icon.jpg' style='height:50px;width:50px;border-radius:5px'/></div><div id='sbg' style='background:url(photos/twitter.jpg)'><img src='photos/twitter icon.png' style='height:50px;width:50px;border-radius:5px'/></div><div id='sbg' style='background:url(photos/whatsapp.jpg)'><img src='photos/whatsapp icon.jpg' style='height:50px;width:50px;border-radius:5px'/></div><div id='sbg' style='background:url(photos/youtube.jpg)'><img src='photos/you tube1.jpg' style='height:50px;width:50px;border-radius:5px'/></div><div id='sbg' style='background:url(photos/email.jpg)'><img src='photos/email icon.jpg' style='height:50px;width:50px;border-radius:5px'/></div> </div>";
document.getElementById("page").innerHTML="wecome to computer hube";

$(document).ready(function(){
$("#test").hide();
/*subject button*/
$("#sbtn").click(function(){
$("#sbtnl").slideToggle();
/*hide*/
$("#abtnp").hide();
$("#hbtnp").hide();
$("#cbtnp").hide();
$("#gbtnp").hide();
});


/*home button */
$("#hbtn").click(function(){
$("#hbtnp").slideToggle();
/*hide */
$("#sbtnl").hide();
$("#abtnp").hide();
$("#cbtnp").hide();
$("#gbtnp").hide();
});

/*contect us button */
$("#cbtn").click(function(){
$("#cbtnp").slideToggle();
${"#m3"}.slideToggle();
/*hide */
$("#sbtnl").hide();
$("#abtnp").hide();
$("#hbtnp").hide();
$("#gbtnp").hide();
});


/*about us button */
$("#abtn").click(function(){
$("#abtnp").slideToggle();
/*hide */
$("#sbtnl").hide();
$("#hbtnp").hide();
$("#cbtnp").hide();
$("#gbtnp").hide();
});


/*gallery button */
$("#gbtn").click(function(){
$("#gbtnp").slideToggle();
/*hide */
$("#sbtnl").hide();
$("#abtnp").hide();
$("#hbtnp").hide();
$("#cbtnp").hide();
});
});

/*end */
}