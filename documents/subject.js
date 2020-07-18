function clanguage(){
document.getElementById('img').innerHTML="<img src='photos/ce3.jpg' width='100%' height='100%'>";
}

function java(){
document.getElementById('img').innerHTML="<img src='photos/ce0.jpg' width='100%' height='100%'>";
}

function php(){
document.getElementById('img').innerHTML="<img src='photos/web designing.jpg' width='100%' height='100%'>";
}

function datastructure(){
document.getElementById('img').innerHTML="<img src='photos/se.png' width='100%' height='100%'>";
}

function edm(){
document.getElementById('img').innerHTML="<img src='photos/edm.jpg' width='100%' height='100%'>";
}

function rdbms(){
document.getElementById('img').innerHTML="<img src='photos/dbms1.jpg' width='100%' height='100%'>";
}

function out(){
document.getElementById('img').innerHTML="";
}

function subjectp(){
return document.getElementById('middle').innerHTML="<span id='subject'><table><tr><th colspan='3'>Subject</th></tr>"+
"<tr>"+
"<td width='30%'><ul>"+
	"<a href='study/c language/front page.htm' target='blank_'><li onMouseOver='clanguage();' onMouseOut='out();'>C language</li></a>"+
	"<li onMouseOver='java();' onMouseOut='out();'>Java</li>"+
	"<li onMouseOver='php();' onMouseOut='out();'>Web Desinging using PHP</li>"+
	"<li onMouseOver='datastructure();' onMouseOut='out();'>Data Structure</li>"+
	"<li onMouseOver='edm();' onMouseOut='out();'>Entrepreneurship Development and Management</li>"+
	"<li onMouseOver='rdbms();' onMouseOut='out();'>RDBMS</li>"+
"</ul></td>"+
"<td width='30%' id='img'></td>"+
"<td width='40%'><img src='photos/fhf.png' width='100%' height='100%'></td></tr></table>"+
"</span>";
}
