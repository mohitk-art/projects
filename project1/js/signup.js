//signup
function check()
{

var l=document.form1.phone.value.length; //lenght of phone no


 if(document.form1.pass.value != document.form1.cpass.value)
 {
 alert("Confirmation Password does not Match");
 return false;
 }
 else if(l<10)
  {
  alert("Plese Enter Valid Phone number");
  document.form1.phone.focus();
  return false;
  }
  }