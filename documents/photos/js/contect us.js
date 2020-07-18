function check()
{

 if(document.form.name.value=="")
  {
    alert("Plese Enter Name");
	document.form.name.focus();
	return false;
  }
  
 if(document.form.lname.value=="")
  {
    alert("Plese Enter Last Name");
	document.form.lname.focus();
	return false;
  }
  
  if(document.form.pass.value=="")
  {
    alert("Plese Enter Password");
	document.form.pass.focus();
	return false;
  }
 
 if(document.form.email.value=="")
  {
    alert("Plese Enter Email Id");
	document.form.email.focus();
	return false;
  }
 
 e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;
		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
		return true;
  }