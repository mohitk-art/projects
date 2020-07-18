//Add Test

function check(){
if(form.subid.value==""){
alert("Please Select Subject");
form.subid.focus();
return false;
}

if(form.addtest.value==""){
alert("Please enter Test");
form.addtest.focus();
return false;
}